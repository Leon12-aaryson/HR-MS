<?php

namespace App\Controllers;

class Home extends BaseController
{
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

    
}
