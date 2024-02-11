<?php
namespace App\Controllers;

use App\Models\PayrollModel;

class Home extends BaseController
{
    private $payroll;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->payroll = new PayrollModel();
        helper(['html', 'form']);
    }

    public function index(): string
    {
        // return view('welcome_message');
        return view('index');
    }

    public function CreateEmployee()
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
        $departmentResult = $this->db->query( $distinctDepartment)->getResultArray();

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
            'job'        =>$jobResult,
            'position' => $positionResult
        ]]);
    }

    public function Employee()
    {
        return view("employee");
    }

    public function Department()
    {
        $data = [
            'active' => 'active-list',
        ];
        return view("department", $data);
    }

    public function BranchMaster()
    {
        $title = [
            'page_title' => "Manage Branches",
            'head' => "Branch",
            'link' => 'Add Branch'
        ];
        $data = [
            'active' => 'active-list',
        ];
        return view("branch-master", array_merge($data, $title));
    }

    public function Job()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Jobs",
            'head' => 'Job',
            'link' => 'Add job'
        ];
        return view('job-type', $data);
    }

    public function Deduction()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Deduction Types",
            'head' => 'Deductions',
            'link' => 'Add deduction'
        ];
        return view('deductions', $data);
    }

    public function Contract()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Contract Type",
            'head' => 'Contracts',
            'link' => 'Add contracts'
        ];
        return view('contract', $data);
    }

    public function Payement()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Payement Method",
            'head' => 'Payements',
            'link' => 'Add payement method'
        ];
        return view('payement', $data);
    }

    public function Designation()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Designation",
            'head' => 'Designation',
            'link' => 'Add designation'
        ];
        return view('designation', $data);
    }

    public function Leave()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Leave Types",
            'head' => 'Leaves',
            'link' => 'Add leave type'
        ];
        return view('leave', $data);
    }
    public function Loan()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Loans",
            'head' => 'Loans',
            'link' => 'Add loan'
        ];
        return view('loan', $data);
    }
    public function Shift()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Shift Types",
            'head' => 'Shifts',
            'link' => 'Add shift type'
        ];
        return view('shift', $data);
    }


    public function payroll()
    {
        // Custom SQL query to retrieve the first found payroll_id per distinct year
        $yearQuery = "SELECT DISTINCT YEAR(pay_date) AS year, MIN(payroll_id) AS year_id FROM payroll_table GROUP BY year";

        // Custom SQL query to retrieve the first found payroll_id per distinct month
        $monthQuery = "SELECT DISTINCT MONTH(pay_date) AS month, MIN(payroll_id) AS month_id FROM payroll_table GROUP BY month";

        // Execute the SQL queries
        $yearResults = $this->db->query($yearQuery)->getResultArray();
        $monthResults = $this->db->query($monthQuery)->getResultArray();

        $results = ['year' => $yearResults, 'month' => $monthResults];

        // Pass the results to the view
        return view('payroll', ['results' => $results]);
    }

    public function CreatePayroll()
    {
        return view('create-payroll');
    }
    public function CreateAttendance()
    {
        return view('create-attendance');
    }

    // The following method is not yet linked anywhere
    public function ViewEmployee()
    {
        return view('view-employee');
    }


    //The following method is for employee dashboard
    public function employeeDashboard(){
        return view('employee-dashboard');
    }
}
