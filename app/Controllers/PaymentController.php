<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaymentModel;

class PaymentController extends BaseController
{
    private $payment;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->payment = new PaymentModel();
    }

    public function fetchpayments()
    {
        // Select Payment table 
        $builder = $this->db->table('payement_table');

        $builder->select('payement_table.*'); 

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('payement_type', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('payement_id', 'DESC');
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
                $row['payement_id'],
                $row['payement_type'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="paymentupdatebtn" class="dropdown-item" value="' . $row['payement_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="paymentdeletebtn" class="dropdown-item" value="' . $row['payement_id'] . '">
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


     // Fetch Payment type
     public function fetchpayment()
     {
         $id = $this->request->getPost('paymentid');
 
         $paymenttype = $this->payment->find($id);
 
         if ($paymenttype) {
             return $this->response->setJSON($paymenttype);
         } else {
             // Prepare sweet alert response data
             $data = [
                 'status' => 'error',
                 'message' => 'Payment not found'
             ];
 
             return $this->response->setJSON($data);
         }
     }
 
     // Add Payment type
     public function addpayment()
     {
 
         // Prepare Payment type data
         $paymentData = [
             'payement_type' => $this->request->getPost('payment')
         ];
 
         // Insert the Payment data into the database
         $this->payment->insert($paymentData);
 
         // Prepare sweet alert response data
         $response = [
             'status' => 'success',
             'message' => 'Payment type added successfully'
         ];
 
         return $this->response->setJSON($response);
     }
 
     // Update Payment type
     public function updatepayment()
     {
 
         $id = $this->request->getPost('paymentid');
 
         $data = [
             'payement_type' => $this->request->getPost('payment'),
         ];
 
         $this->payment->update($id, $data);
 
         $data = [
             'status' => 'success',
             'message' => 'Payment type updated successfully'
         ];
         return $this->response->setJSON($data);
     }
 
     // Delete Payment type
     public function deletepayment()
     {
         $data = [
             'id' => $this->request->getPost('paymentid'),
         ];
         $this->payment->delete($data);
         $data = [
             'status' => 'success',
             'message' => 'Payment type deleted successfully'
         ];
         return $this->response->setJSON($data);
     }
 


}
