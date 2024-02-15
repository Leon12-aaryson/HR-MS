<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmpHomeController extends BaseController
{
    public function index()
    {
        return view('emp-dashboard');
    }

    public function EmpAttendance()
    {
        return view('emp-attendance');
    }
}
