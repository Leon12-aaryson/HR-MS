<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PayrollModel;

class PayrollDataInsertController extends BaseController
{
    public function index()
    {
        $model = new PayrollModel();
        
        $allowances = $this->request->getPost('allowance');
        if (is_array($allowances)) {
            $allowances = implode(',', $allowances);
        } else {
        
            $allowances = ''; 
        }
        
        $deductions = $this->request->getPost('deduction');
        if (is_array($deductions)) {
            $deductions = implode(',', $deductions);
        } else {
          
            $deductions = ''; 
        }
        
        $payrollData = [
            'employee_id' => $this->request->getPost('employee'),
            'desigination_id' => $this->request->getPost('designation'),
            'allowances_id' => $allowances,
            'deductions_id' => $deductions,
            'net_pay' => $this->request->getPost('net_salary'),
            'total_deduction' => $this->request->getPost('total_deduct'),
            'total_allowance' => $this->request->getPost('total_allow'),
            'payment_type' => $this->request->getPost('payment_type'),
            'status' => $this->request->getPost('status')
        ];
        
        
        $model->insert($payrollData);
        return redirect()->to('payroll'); 
    }
    
    public function update(){
        return view('update_payroll');
    }
    
}
