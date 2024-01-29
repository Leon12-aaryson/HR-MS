<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContractModel;

class ContractController extends BaseController
{
    private $contract;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->contract = new ContractModel();
    }

    public function fetchcontracts()
    {
        // Select Contract table 
        $builder = $this->db->table('contract_table');

        $builder->select('contract_table.*'); 

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('contract_type', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('contract_id', 'DESC');
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
                $row['contract_id'],
                $row['contract_type'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="contractupdatebtn" class="dropdown-item" value="' . $row['contract_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="contractdeletebtn" class="dropdown-item" value="' . $row['contract_id'] . '">
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


       // Fetch Contract
       public function fetchcontract()
       {
           $id = $this->request->getPost('contractid');
   
           $contracttype = $this->contract->find($id);
   
           if ($contracttype) {
               return $this->response->setJSON($contracttype);
           } else {
               // Prepare sweet alert response data
               $data = [
                   'status' => 'error',
                   'message' => 'Contract type not found'
               ];
   
               return $this->response->setJSON($data);
           }
       }
   
       // Add Contract
       public function addcontract()
       {
   
           // Prepare Contract data
           $contractData = [
               'contract_type' => $this->request->getPost('contracttype')
           ];
   
           // Insert the Contract data into the database
           $this->contract->insert($contractData);
   
           // Prepare sweet alert response data
           $response = [
               'status' => 'success',
               'message' => 'Contract type added successfully'
           ];
   
           return $this->response->setJSON($response);
       }
   
       // Update Contract
       public function updatecontract()
       {
   
           $id = $this->request->getPost('contractid');
   
           $data = [
               'contract_type' => $this->request->getPost('contract'),
           ];
   
           $this->contract->update($id, $data);
   
           $data = [
               'status' => 'success',
               'message' => 'Contract type updated successfully'
           ];
           return $this->response->setJSON($data);
       }
   
       // Delete Contract
       public function deletecontract()
       {
           $data = [
               'id' => $this->request->getPost('contractid'),
           ];
           $this->contract->delete($data);
           $data = [
               'status' => 'success',
               'message' => 'Contract deleted successfully'
           ];
           return $this->response->setJSON($data);
       }


}
