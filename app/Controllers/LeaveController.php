<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LeaveModel;

class LeaveController extends BaseController
{
    private $leave;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->leave = new LeaveModel();
    }

    public function fetchleaves()
    {
        // Select Leave table 
        $builder = $this->db->table('leave_type_table');

        $builder->select('leave_type_table.*'); 

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('leave_type', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('leave_id', 'DESC');
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
                $row['leave_id'],
                $row['leave_type'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="leaveupdatebtn" class="dropdown-item" value="' . $row['leave_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="leavedeletebtn" class="dropdown-item" value="' . $row['leave_id'] . '">
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



    // Fetch Leave
    public function fetchleave()
    {
        $id = $this->request->getPost('leaveid');

        $leave = $this->leave->find($id);

        if ($leave) {
            return $this->response->setJSON($leave);
        } else {
            // Prepare sweet alert response data
            $data = [
                'status' => 'error',
                'message' => 'Leave not found'
            ];

            return $this->response->setJSON($data);
        }
    }

    // Add Leave
    public function addleave()
    {
        // Prepare leave data
        $leaveData = [
            'leave_type' => $this->request->getPost('leavetype')
        ];

        // Insert the Leave data into the database
        $this->leave->insert($leaveData);

        // Prepare sweet alert response data
        $response = [
            'status' => 'success',
            'message' => 'Leave added successfully'
        ];

        return $this->response->setJSON($response);
    }

    // Update Leave
    public function updateleave()
    {

        $id = $this->request->getPost('leaveid');

        $data = [
            'leave_type' => $this->request->getPost('leavetype'),
        ];

        $this->leave->update($id, $data);

        $data = [
            'status' => 'success',
            'message' => 'Leave updated successfully'
        ];
        return $this->response->setJSON($data);
    }

    // Delete Leave
    public function deleteleave()
    {
        $data = [
            'id' => $this->request->getPost('leaveid'),
        ];
        $this->leave->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Leave deleted successfully'
        ];
        return $this->response->setJSON($data);
    }



}
