<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BranchmanagerModel;

class BranchmasterController extends BaseController
{
    private $branchmanager;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->branchmanager = new BranchmanagerModel();
    }

    // Fetch Branch Managers
    public function fetchbranchmanagers()
    {
        // Select Branch Manager table 
        $builder = $this->db->table('branch_manager_table');

        $builder->select('branch_manager_table.*');
        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('branch', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('branch_manager_id', 'DESC');
        }

        // Handle pagination
        $length = $this->request->getPost('length');
        $start = $this->request->getPost('start');
        if ($length !== -1) {
            $builder->limit($length, $start);
        }

        // Get total records count without filters
        $totalFilteredRecords = $builder->countAllResults(false);

        // Execute the query
        $query = $builder->get();
        $result = $query->getResultArray();

        $data = [];

        foreach ($result as $row) {

            // Columns to be returned back in DataTable
            $sub_array = [
                $row['branch_manager_id'],
                $row['branch'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="branchupdatebtn" class="dropdown-item" value="' . $row['branch_manager_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="branchdeletebtn" class="dropdown-item" value="' . $row['branch_manager_id'] . '">
                                    <i class="bi bi-trash" style="color:red"></i> Delete
                                </button>
                            </li>
                        </ul>
                </div>',
            ];

            $data[] = $sub_array;
        }

        $output = [
            "draw" => intval($this->request->getPost('draw')),
            "recordsTotal" => $totalFilteredRecords, // Count all results without filters
            "recordsFiltered" => $totalFilteredRecords,
            "data" => $data,
        ];

        return $this->response->setJSON($output);
    }

    // Fetch Branch Manaher
    public function fetchbranchmanager()
    {
        $id = $this->request->getPost('branchid');

        $branch = $this->branchmanager->find($id);

        if ($branch) {
            return $this->response->setJSON($branch);
        } else {
            // Prepare sweet alert response data
            $data = [
                'status' => 'error',
                'message' => 'Branch not found'
            ];

            return $this->response->setJSON($data);
        }
    }

    // Add Branch Manager
    public function addbranchmanager()
    {
        // Prepare Branch Manager data
        $branchData = [
            'branch' => $this->request->getPost('branchname')
        ];

        // Insert the Branch Manager data into the database
        $this->branchmanager->insert($branchData);

        // Prepare sweet alert response data
        $response = [
            'status' => 'success',
            'message' => 'Branch Manager  added successfully'
        ];

        return $this->response->setJSON($response);
    }

    // Update Branch Manager
    public function updatebranchmanager()
    {
        $id = $this->request->getPost('branchid');

        $data = [
            'branch' => $this->request->getPost('branchname'),
        ];

        $this->branchmanager->update($id, $data);

        $data = [
            'status' => 'success',
            'message' => 'Branch Manager updated successfully'
        ];
        return $this->response->setJSON($data);
    }

    // Delete Branch Manager
    public function deletebranchmanager()
    {
        $data = [
            'id' => $this->request->getPost('branchid'),
        ];
        $this->branchmanager->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Branch Manager deleted successfully'
        ];
        return $this->response->setJSON($data);
    }

}
