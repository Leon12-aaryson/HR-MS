<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesignationModel;

class DesignationController extends BaseController
{
    private $designation;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->designation = new DesignationModel();
    }

    public function fetchdesignations()
    {
        // Select Designation table 
        $builder = $this->db->table('designation_table');

        $builder->select('designation_table.*'); 

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('designation', $searchValue)
                ->like('salary', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('designation_id', 'DESC');
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
                $row['designation_id'],
                $row['designation'],
                number_format($row['salary'], 2),
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="designationupdatebtn" class="dropdown-item" value="' . $row['designation_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="designationdeletebtn" class="dropdown-item" value="' . $row['designation_id'] . '">
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


    // Fetch Designation
    public function fetchdesignation()
    {
        $id = $this->request->getPost('designationid');

        $designation = $this->designation->find($id);

        if ($designation) {
            return $this->response->setJSON($designation);
        } else {
            // Prepare sweet alert response data
            $data = [
                'status' => 'error',
                'message' => 'Designation not found'
            ];

            return $this->response->setJSON($data);
        }
    }

    // Add Designation
    public function adddesignation()
    {
        // Prepare Designation data
        $branchData = [
            'designation' => $this->request->getPost('designation'),
            'salary' => $this->request->getPost('salary')
        ];

        // Insert the Designation data into the database
        $this->designation->insert($branchData);

        // Prepare sweet alert response data
        $response = [
            'status' => 'success',
            'message' => 'Designation added successfully'
        ];

        return $this->response->setJSON($response);
    }

    // Update Designation
    public function updatedesignation()
    {

        $id = $this->request->getPost('designationid');

        $data = [
            'designation' => $this->request->getPost('designation'),
            'salary' => $this->request->getPost('salary')
        ];

        $this->designation->update($id, $data);

        $data = [
            'status' => 'success',
            'message' => 'Designation updated successfully'
        ];
        return $this->response->setJSON($data);
    }

    // Delete Designation
    public function deletedesignation()
    {
        $data = [
            'id' => $this->request->getPost('designationid'),
        ];
        $this->designation->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Designation deleted successfully'
        ];
        return $this->response->setJSON($data);
    }


}


