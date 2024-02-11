<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function department()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('department_table');
        $query   = $builder->countAllResults(); // Count all records in the table
        $data = ['dept_count' => $query];
        // echo $query;

        return view('index', $data);
    }
}



