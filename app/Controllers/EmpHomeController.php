<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;
use CodeIgniter\Database;

class EmpHomeController extends BaseController
{
    private $employeeModel;
    protected $db;

    public function __construct()
    {
        // Load the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->employeeModel = new EmployeeModel();
        helper(['html', 'form']);
        // $this->email = $this->request->getPost('email');
    }

    public function index()
    {
        return view('emp-dashboard');
    }

    public function empAttendance()
    {
        return view('emp-attendance');
    }

    public function empLogin()
    {
        return view('emp-login');
    }

    public function empLoan()
    {
        return view('emp-loan');
    }

    public function empLeave()
    {
        return view('emp-leave');
    }

    public function handleLoginCredentials()
    {
        $request = $this->request;

        // Fetching login credentials
        $email = $request->getPost('email');
        $password = $request->getPost('password');

        // Retrieving employee details based on provided credentials
        $results = $this->employeeModel->where('email', $email)
            ->where('password', $password)
            ->first();

        if ($results) {
            // If credentials are valid, set session and handle login time insertion
            session()->set('email', $email);
            $this->insertLoginTime($results['employee_id']);

            // Redirect to dashboard
            // return redirect()->to(base_url('emp-dashboard'));
            return view('emp-dashboard',['results' => $results]);
        } else {
            // If credentials are invalid, redirect to login page with error message
            return redirect()->to(base_url('emp-login'))->with('error', 'Invalid email or password');
        }




        
    }

    // Function to insert login time
    private function insertLoginTime($employeeId)
    {
        // Fetch current time
        date_default_timezone_set('Africa/Kampala');
        $time = date('H:i', strtotime('+0 HOURS'));

        // Insert into attendance table
        $data = [
            'employee_id' => $employeeId,
            'clock_in_time' => $time
        ];
        $this->db->table('attendance_table')->insert($data);
    }

    public function insertTime()
    {
        $request = $this->request;
        $employeeId = $request->getPost('empid');
        $time = $request->getPost('time');
        var_dump($_POST);
        exit();
    
        return redirect()->to(base_url('emp-login'));
    }
    







    
}




