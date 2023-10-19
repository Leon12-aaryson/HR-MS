<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;

class EmployeeController extends BaseController
{
    private $employee;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->employee = new EmployeeModel();
    }

    public function fetchEmployees()
    {
        // Select employee table 
        $builder = $this->db->table('employee_table');

        $builder->select('employee_table.*, department_table.department_name, position_table.position_name'); 
        $builder->join('department_table', 'employee_table.department = department_table.department_id', 'inner');
        $builder->join('position_table', 'employee_table.position = position_table.position_id', 'inner');

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('first_name', $searchValue)
                ->orLike('last_name', $searchValue)
                ->orLike('email', $searchValue)
                ->orLike('address', $searchValue)
                ->orLike('position', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('employee_id', 'DESC');
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
                $row['employee_id'],
                $row['first_name']. ' '.$row['last_name'],
                $row['email'],
                '',
                $row['department_name'],
                $row['position_name'],
                $row['hire_date'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <button type="button" id="adminupdatebtn" class="dropdown-item" value="' . $row['employee_id'] . '">
                                <i class="bi bi-pencil" style="color:dodgerblue"></i> Edit
                            </button>
                        </li>
                        <li>
                            <button type="button" id="admindeletebtn" class="dropdown-item" value="' . $row['employee_id'] . '">
                                <i class="bi bi-trash" style="color:red"></i> Delete
                            </button>
                        </li>
                        <li>
                            <button type="button" id="adminupdatebtn" class="dropdown-item" value="' . $row['employee_id'] . '">
                                <i class="bi bi-eye" style="color:green"></i> View
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
}
