<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;
class EmployeeDataInsert extends BaseController
{
    
    public function index()
    {
        $modal = new EmployeeModel(); 

        $userdata = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),	
            'date_of_birth'  => $this->request->getPost('dob')	,
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
            // 'permission',	
            'position'  => $this->request->getPost('position'),	
            'hire_date',	
            'termination_date',	
            'bank_name'  => $this->request->getPost('bank_name'),	
            'account_holder_name'  => $this->request->getPost('account_holder_name'),	
            'bank_branch'  => $this->request->getPost('bank_branch'),	
            'account_number'  => $this->request->getPost('account_number'),	
            'bank_identifier_code'  => $this->request->getPost('bank_identifier_code'),	
            'tax_payer_id'  => $this->request->getPost('tax_payer_id')
        ];

        $modal->insert($userdata);
        return redirect()->to('branch-master');
    }
}
