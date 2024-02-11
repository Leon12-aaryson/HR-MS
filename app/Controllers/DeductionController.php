<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DeductionModel;

class DeductionController extends BaseController
{
    private $deduction;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->deduction = new DeductionModel();
    }

    public function fetchdeductions()
    {
        // Select Deduction option table 
        $builder = $this->db->table('deduction_table');

        $builder->select('deduction_table.*'); 

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('deduction_option', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('deduction_id', 'DESC');
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
                $row['deduction_id'],
                $row['deduction_option'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="deductionupdatebtn" class="dropdown-item" value="' . $row['deduction_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="deductiondeletebtn" class="dropdown-item" value="' . $row['deduction_id'] . '">
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


     // Fetch Deduction
     public function fetchdeduction()
     {
         $id = $this->request->getPost('deductionid');
 
         $deductiontype = $this->deduction->find($id);
 
         if ($deductiontype) {
             return $this->response->setJSON($deductiontype);
         } else {
             // Prepare sweet alert response data
             $data = [
                 'status' => 'error',
                 'message' => 'Deduction not found'
             ];
 
             return $this->response->setJSON($data);
         }
     }
 
     // Add Deduction
     public function adddeduction()
     {
 
         // Prepare Deduction data
         $deductionData = [
             'deduction_option' => $this->request->getPost('deductiontype')
         ];
 
         // Insert the Deduction data into the database
         $this->deduction->insert($deductionData);
 
         // Prepare sweet alert response data
         $response = [
             'status' => 'success',
             'message' => 'Deduction added successfully'
         ];
 
         return $this->response->setJSON($response);
     }
 
     // Update Deduction
     public function updatededuction()
     {
 
         $id = $this->request->getPost('deductionid');
 
         $data = [
             'deduction_option' => $this->request->getPost('deduction'),
         ];
 
         $this->deduction->update($id, $data);
 
         $data = [
             'status' => 'success',
             'message' => 'Deduction updated successfully'
         ];
         return $this->response->setJSON($data);
     }
 
     // Delete Deduction
     public function deletededuction()
     {
         $data = [
             'id' => $this->request->getPost('deductionid'),
         ];
         $this->deduction->delete($data);
         $data = [
             'status' => 'success',
             'message' => 'Deduction deleted successfully'
         ];
         return $this->response->setJSON($data);
     }
}
