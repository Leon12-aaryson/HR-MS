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
        return view("department");
    }

    public function BranchMaster()
    {
        return view("branch-master");
    }

    public function Job()
    {
        return view('job-type');
    }

    public function Deduction()
    {
        return view('deductions');
    }

    public function Contract()
    {
        return view('contract');
    }

    public function Payement()
    {
        return view('payement');
    }

    public function Designation()
    {
        return view('designation');
    }
    public function Leave()
    {
        return view('leave');
    }
    public function Loan()
    {
        return view('loan');
    }
    public function Shift()
    {
        return view('shift');
    }
    public function Permission()
    {
        return view('permission');
    }

    
}
