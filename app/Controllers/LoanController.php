<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoanModel;

class LoanController extends BaseController
{
    private $loan;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->loan = new LoanModel();
    }

    public function fetchloans()
    {
        // Select Loan table 
        $builder = $this->db->table('loan_table');

        $builder->select('loan_table.*');

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('loan_type', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('loan_id', 'DESC');
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
                $row['loan_id'],
                $row['loan_type'],
                $row['loan_amount'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="loanupdatebtn" class="dropdown-item" value="' . $row['loan_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="loandeletebtn" class="dropdown-item" value="' . $row['loan_id'] . '">
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


    // Fetch Loan
    public function fetchloan()
    {
        $id = $this->request->getPost('loanid');

        $loan = $this->loan->find($id);

        if ($loan) {
            return $this->response->setJSON($loan);
        } else {
            // Prepare sweet alert response data
            $data = [
                'status' => 'error',
                'message' => 'Loan not found'
            ];

            return $this->response->setJSON($data);
        }
    }

    // Add Loan
    public function addloan()
    {

        // Prepare Loan data
        $loanData = [
            'loan_type' => $this->request->getPost('loantype'),
            'loan_amount' => $this->request->getPost('loanamount')
        ];

        // Insert the Loan data into the database
        $this->loan->insert($loanData);

        // Prepare sweet alert response data
        $response = [
            'status' => 'success',
            'message' => 'Loan added successfully'
        ];

        return $this->response->setJSON($response);
    }

    // Update Loan
    public function updateloan()
    {

        $id = $this->request->getPost('loanid');

        $data = [
            'loan_type' => $this->request->getPost('loantype'),
            'loan_amount' => $this->request->getPost('loanamount'),
        ];

        $this->loan->update($id, $data);

        $data = [
            'status' => 'success',
            'message' => 'Loan updated successfully'
        ];
        return $this->response->setJSON($data);
    }

    // Delete Loan
    public function deleteloan()
    {
        $data = [
            'id' => $this->request->getPost('loanid'),
        ];
        $this->loan->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Loan deleted successfully'
        ];
        return $this->response->setJSON($data);
    }
    
}
