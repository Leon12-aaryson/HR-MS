<?php
namespace App\Controllers;
class Home extends BaseController
{
    public function __construct()
    {
        helper(['html','form']);
    }

    public function index(): string
    {
        // return view('welcome_message');
        return view('index');
    }

    public function Employee()
    {
        return view("employee");
    }

    public function CreateEmployee()
    {
        return view("create-employee");
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
        return view('payement',$data);
    }

    public function Designation()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Designation",
            'head' => 'Designation',
            'link' => 'Add designation'
        ];
        return view('designation',$data);
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
        return view('loan',$data);
    }
    public function Shift()
    {
        $data = [
            'active' => 'active-list',
            'page_title' => "Manage Shift Types",
            'head' => 'Shifts',
            'link' => 'Add shift type'
        ];
        return view('shift',$data);
    }


    public function Payroll()
    {
        return view('payroll');
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
        
}
