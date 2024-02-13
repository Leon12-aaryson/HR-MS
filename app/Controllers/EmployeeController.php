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

    public function page()
    {
        return view('employee');
    }

    public function createpage()
    {
        // SQL query for retrieving distinct branches
        $distinctBranchQuery = "SELECT DISTINCT branch FROM branch_manager_table";
        $branchResult = $this->db->query($distinctBranchQuery)->getResultArray();

        // SQL query for retrieving distinct designations
        $distinctDesignationQuery = "SELECT DISTINCT designation FROM designation_table";
        $designationResult = $this->db->query($distinctDesignationQuery)->getResultArray();

        // sql query for retrieving payement type
        $distinctPayement = "SELECT DISTINCT payement_type FROM payement_table";
        $payementResult = $this->db->query($distinctPayement)->getResultArray();

        // sql query for retrieving department type
        $distinctDepartment = "SELECT DISTINCT department_id, department_name FROM department_table";
        $departmentResult = $this->db->query($distinctDepartment)->getResultArray();

        // sql query for retrieving contract type
        $distinctContract = "SELECT DISTINCT contract_type FROM contract_table";
        $contractResults = $this->db->query($distinctContract)->getResultArray();

        //sql query for retrieving job type
        $distinctJob = "SELECT DISTINCT job_type FROM job_type_table";
        $jobResult = $this->db->query($distinctJob)->getResultArray();

        //sql query for retrieving positions
        $distinctPosition = "SELECT DISTINCT position_id, position_name FROM position_table";
        $positionResult = $this->db->query($distinctPosition)->getResultArray();

        // Pass the results to the view with separate keys
        return view('create-employee', ['results' => [
            'branch' => $branchResult,
            'designation' => $designationResult,
            'payement' => $payementResult,
            'department' => $departmentResult,
            'contract'   => $contractResults,
            'job'        => $jobResult,
            'position' => $positionResult
        ]]);
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        // Select employee table 
        $builder = $this->db->table('employee_table');

        $builder->select('employee_table.*, department_table.department_name, position_table.position_name,branch');
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
                $row['first_name'] . ' ' . $row['last_name'],
                $row['email'],
                $row['branch'],
                $row['department_name'],
                $row['position_name'],
                $row['hire_date'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="' . base_url('employee/edit/' . $row['employee_id']) . '" class="dropdown-item">
                                <i class="bi bi-pencil" style="color:green"></i> Edit
                            </a>
                        </li>
                        <li>
                            <button type="button" id="employeedeletebtn" class="dropdown-item" value="' . $row['employee_id'] . '">
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

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $userdata = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'date_of_birth'  => $this->request->getPost('dob'),
            'gender'  => $this->request->getPost('gender'),
            'contact_number'  => $this->request->getPost('contact_number'),
            'email'  => $this->request->getPost('email'),
            'password'  => $this->request->getPost('password'),
            'address'  => $this->request->getPost('address'),
            'department'  => $this->request->getPost('department'),
            'branch'  => $this->request->getPost('branch'),
            'designation'  => $this->request->getPost('designation'),
            'payement_type'  => $this->request->getPost('payement'),
            'contract_type'  => $this->request->getPost('contract'),
            'job_type'  => $this->request->getPost('job'),
            'position'  => $this->request->getPost('position'),
            'hire_date' =>  $this->request->getPost('hiredate'),
            'bank_name'  => $this->request->getPost('bank_name'),
            'account_holder_name'  => $this->request->getPost('account_holder_name'),
            'bank_branch'  => $this->request->getPost('bank_branch'),
            'account_number'  => $this->request->getPost('account_number'),
            'bank_identifier_code'  => $this->request->getPost('bank_identifier_code'),
            'tax_payer_id'  => $this->request->getPost('tax_payer_id')
        ];
    
        $this->employee->insert($userdata);
        return redirect()->to('employeespage')->with('status', 'Employee added successfully.');
    }
    

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        // SQL query for retrieving distinct branches
        $distinctBranchQuery = "SELECT DISTINCT branch FROM branch_manager_table";
        $branchResult = $this->db->query($distinctBranchQuery)->getResultArray();

        // SQL query for retrieving distinct designations
        $distinctDesignationQuery = "SELECT DISTINCT designation FROM designation_table";
        $designationResult = $this->db->query($distinctDesignationQuery)->getResultArray();

        // SQL query for retrieving distinct payment types
        $distinctPaymentQuery = "SELECT DISTINCT payement_type FROM payement_table";
        $paymentResult = $this->db->query($distinctPaymentQuery)->getResultArray();

        // SQL query for retrieving distinct departments
        $distinctDepartmentQuery = "SELECT DISTINCT department_id, department_name FROM department_table";
        $departmentResult = $this->db->query($distinctDepartmentQuery)->getResultArray();

        // SQL query for retrieving distinct contract types
        $distinctContractQuery = "SELECT DISTINCT contract_type FROM contract_table";
        $contractResults = $this->db->query($distinctContractQuery)->getResultArray();

        // SQL query for retrieving distinct job types
        $distinctJobQuery = "SELECT DISTINCT job_type FROM job_type_table";
        $jobResult = $this->db->query($distinctJobQuery)->getResultArray();

        // SQL query for retrieving distinct positions
        $distinctPositionQuery = "SELECT DISTINCT position_id, position_name FROM position_table";
        $positionResult = $this->db->query($distinctPositionQuery)->getResultArray();

        // Getting the employee with the given ID
        $data['employee'] = $this->employee->find($id);

        // Pass the results to the view with separate keys
        return view('update-employee', [
            'employee' => $data['employee'],
            'results' => [
                'branch' => $branchResult,
                'designation' => $designationResult,
                'payement' => $paymentResult,
                'department' => $departmentResult,
                'contract'   => $contractResults,
                'job'        => $jobResult,
                'position' => $positionResult,
            ]
        ]);
    }



    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $employee = $this->employee->find($id);

        if (!$employee) {
            // Handle case where employee is not found
            return redirect()->to('employeespage')->with('error', 'Employee not found.');
        }

        $userdata = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'date_of_birth'  => $this->request->getPost('dob'),
            'gender'  => $this->request->getPost('gender'),
            'contact_number'  => $this->request->getPost('contact_number'),
            'email'  => $this->request->getPost('email'),
            'password'  => $this->request->getPost('password'),
            'address'  => $this->request->getPost('address'),
            'department'  => $this->request->getPost('department'),
            'branch'  => $this->request->getPost('branch'),
            'designation'  => $this->request->getPost('designation'),
            'payment_type'  => $this->request->getPost('payment'),
            'contract_type'  => $this->request->getPost('contract'),
            'job_type'  => $this->request->getPost('job'),
            'position'  => $this->request->getPost('position'),
            'hire_date' =>  $this->request->getPost('hiredate'),
            'bank_name'  => $this->request->getPost('bank_name'),
            'account_holder_name'  => $this->request->getPost('account_holder_name'),
            'bank_branch'  => $this->request->getPost('bank_branch'),
            'account_number'  => $this->request->getPost('account_number'),
            'bank_identifier_code'  => $this->request->getPost('bank_identifier_code'),
            'tax_payer_id'  => $this->request->getPost('tax_payer_id')
        ];

        $this->employee->update($id, $userdata);

        return redirect()->to('employeespage')->with('status', 'Employee information updated successfully.');
    }


    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete()
    {
        $data = [
            'id' => $this->request->getPost('employeeid'),
        ];
        $this->employee->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Employee deleted successfully'
        ];
        return $this->response->setJSON($data);
    }
    
}
