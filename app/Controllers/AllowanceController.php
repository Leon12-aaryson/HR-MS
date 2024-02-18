<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AllowancesModel;

class AllowanceController extends BaseController
{
    private $allowance;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->allowance = new AllowancesModel();
    }

    public function fetchallowances()
    {
        // Select Allowance 
        $builder = $this->db->table('allowance_table');

        $builder->select('allowance_table.*');

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('allowance_name', $searchValue)
                ->like('allowance_amount', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('allowance_id', 'DESC');
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
                $row['allowance_id'],
                $row['allowance_name'],
                $row['allowance_amount'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="allowanceupdatebtn" class="dropdown-item" value="' . $row['allowance_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="allowancedeletebtn" class="dropdown-item" value="' . $row['allowance_id'] . '">
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


    // Fetch Allowance
    public function fetchallowance()
    {
        $id = $this->request->getPost('allowanceid');

        $allowancetype = $this->allowance->find($id);

        if ($allowancetype) {
            return $this->response->setJSON($allowancetype);
        } else {
            // Prepare sweet alert response data
            $data = [
                'status' => 'error',
                'message' => 'Allowance not found'
            ];

            return $this->response->setJSON($data);
        }
    }

    // Add Allowance
    public function addallowance()
    {

        // Prepare allowance data
        $allowancetypeData = [
            'allowance_name' => $this->request->getPost('allowancename'),
            'allowance_amount' => $this->request->getPost('allowanceamount'),
        ];

        // Insert the  allowance data into the database
        $this->allowance->insert($allowancetypeData);

        // Prepare sweet alert response data
        $response = [
            'status' => 'success',
            'message' => 'Allowance added successfully'
        ];

        return $this->response->setJSON($response);
    }

    // Update Allowance
    public function updateallowance()
    {

        $id = $this->request->getPost('allowanceid');

        $data = [
            'allowance_name' => $this->request->getPost('allowancename'),
            'allowance_amount' => $this->request->getPost('allowanceamount'),
        ];

        $this->allowance->update($id, $data);

        $data = [
            'status' => 'success',
            'message' => 'Allowance updated successfully'
        ];
        return $this->response->setJSON($data);
    }

    // Delete Allowance
    public function deleteallowance()
    {
        $data = [
            'id' => $this->request->getPost('allowanceid'),
        ];
        $this->allowance->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Allowance deleted successfully'
        ];
        return $this->response->setJSON($data);
    }
}