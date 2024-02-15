<?php
namespace App\Controllers;

use App\Models\EventModel;
use App\Models\PayrollModel;

class Home extends BaseController
{
    private $payroll;
    protected $db;
    private $event;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->payroll = new PayrollModel();
        $this->event = new EventModel();
        helper(['html', 'form']);
    }

    public function index(): string
    {
        // return view('welcome_message');
        return view('index');
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

    public function Allowances()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Allowances",
            'head' => 'Manage Allowances',
            'link' => 'Add allowance'
        ];
        return view('allowances', $data);
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


    //fetching data for the dashboard
    public function Dashboard()
    {

        //fetching number of departments
        $db      = \Config\Database::connect();
        $builder = $db->table('department_table');
        $department   = $builder->countAllResults(); // Count all records in the table
        
        //fetching number of employees
        $builder = $db->table('employee_table');
        $employees   = $builder->countAllResults();

        //fetching number of leaves
        $builder = $db->table('leave_type_table');
        $leave   = $builder->countAllResults();

        //fetching number of jobs
        $builder = $db->table('job_type_table');
        $job   = $builder->countAllResults();

        //fetching number of loans
        $builder = $db->table('loan_table');
        $loan   = $builder->countAllResults();

        //fetching number of disciplinary
        // $builder = $db->table('disciplinary_table');
        // $discipline   = $builder->countAllResults();

        $data = [
            'dept_count' => $department,
            'emp_count' => $employees,
            'leave_count' => $leave,
            'job_count' => $job,
            'loan_count' => $loan,
            // 'discipline_count' => $discipline

    ];
        return view('index', $data);
    }



    //INSERTING DATA INTO THE EVENTS TABLE
    public function add_event() {

        $modal = new EventModel();
        // Retrieve data from the form
        $event_name = $this->request->getPost('event_name');
        $start_date = $this->request->getPost('start_date');
        $end_date = $this->request->getPost('end_date');


        // Prepare data for insertion
        $data = array(
            'event_name' => $event_name,
            'start_date' => $start_date,
            'end_date' => $end_date
        );

        $modal->insert($data);
        return redirect()->to('home');
    }  
}
