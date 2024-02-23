<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AttendanceController extends BaseController
{
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        helper(['html', 'form']);
    }

    public function index()
    {
        // Get department ID from POST data
        $departmentId = $this->request->getPost('selectdepartment');

        // Select employees based on department ID
        $builder = $this->db->table('employee_table');
        $builder->select('employee_table.*, department_table.department_name');

        // Join with department table to get department name
        $builder->join('department_table', 'department_table.department_id = employee_table.department', 'inner');

        // Filter by department ID
        if (!empty($departmentId)) {
            $builder->where('employee_table.department', $departmentId);
        }

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('employee_table.first_name', $searchValue)
                ->orLike('employee_table.last_name', $searchValue)
                ->orLike('employee_table.email', $searchValue)
                ->orLike('employee_table.address', $searchValue)
                ->groupEnd();
        }


        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            // Determine the correct column name for sorting based on DataTables column index
            $sortColumn = '';
            switch ($column) {
                case 0:
                    $sortColumn = 'employee_table.first_name';
                    break;
                    // Add cases for other columns if needed
                default:
                    $sortColumn = 'employee_table.employee_id'; // Default to sorting by employee ID
                    break;
            }
            $builder->orderBy($sortColumn, $dir);
        } else {
            $builder->orderBy('employee_table.employee_id', 'DESC'); // Default sorting
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
                $row['first_name'] . ' ' . $row['last_name'],
                'Manual',
                'Administrator',
                '<input type="date" name="currentdate" id="currentdate" value="' . date("Y-m-d") . '">',
                '<div class="col-md-10">
                <input type="time" class="form-control form-control-sm" name="timein" id="timein">
            </div>
            ',
                '
            <div class="col-md-10">
                <input type="time" class="form-control form-control-sm" name="timeout" id="timeout">
            </div>
            ',
                '
            <div class="col-md-12">
                <select id="status" name="status" class="form-select form-select-sm">
                    <option value="absent">Absent</option>
                    <option value="present">Present</option>
                    <option value="leave">Leave</option>
                </select>
            </div>
            '
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
