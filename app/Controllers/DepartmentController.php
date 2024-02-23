<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartmentModel;

class DepartmentController extends BaseController
{
    private $department;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->department = new DepartmentModel();
    }

    public function fetchdepartments()
    {
        // Select Department table 
        $builder = $this->db->table('department_table');

        $builder->select('department_table.*');

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->orLike('department_name', $searchValue)
                ->orLike('salary', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('department_id', 'DESC');
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
                $row['department_id'],
                $row['department_name'],
                number_format(floatval($row['salary'])),
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="departmentupdatebtn" class="dropdown-item" value="' . $row['department_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="departmentdeletebtn" class="dropdown-item" value="' . $row['department_id'] . '">
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


    // Fetch Department
    public function fetchdepartment()
    {
        $id = $this->request->getPost('departmentid');

        $department = $this->department->find($id);

        if ($department) {
            return $this->response->setJSON($department);
        } else {
            // Prepare sweet alert response data
            $data = [
                'status' => 'error',
                'message' => 'Department not found'
            ];

            return $this->response->setJSON($data);
        }
    }

    // Add Department
    public function adddepartment()
    {
        // Prepare Department data
        $departmentData = [
            'department_name' => $this->request->getPost('departmentname'),
            'salary' => $this->request->getPost('salary')
        ];

        // Insert the Department data into the database
        $this->department->insert($departmentData);

        // Prepare sweet alert response data
        $response = [
            'status' => 'success',
            'message' => 'Department added successfully'
        ];

        return $this->response->setJSON($response);
    }

    // Update Department
    public function updatedepartment()
    {
        $id = $this->request->getPost('departmentid');
        $data = [
            'department_name' => $this->request->getPost('departmentname'),
            'salary' => $this->request->getPost('salary')
        ];

        $this->department->update($id, $data);

        $data = [
            'status' => 'success',
            'message' => 'Department updated successfully'
        ];
        return $this->response->setJSON($data);
    }

    // Delete Department
    public function deletedepartment()
    {
        $data = [
            'id' => $this->request->getPost('departmentid'),
        ];
        $this->department->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Department deleted successfully'
        ];
        return $this->response->setJSON($data);
    }
}
