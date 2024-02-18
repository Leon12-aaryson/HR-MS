<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ManagepayrollModel;

class ManagepayrollController extends BaseController
{
    private $managepayroll;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->managepayroll = new ManagepayrollModel();
    }

    public function fetchmanagepayroll()
    {
        $query = $this->db->table('payroll_table');
        $query->select('employee_table.first_name, employee_table.last_name, net_pay, pay_date, total_allowance,total_deduction, payroll_id');
        $query->join('employee_table', 'payroll_table.employee_id = employee_table.employee_id', 'inner');

        // Check if date search is enabled
        if ($this->request->getPost('is_date_search') == 'yes') {
            $query->where('YEAR(payroll_table.pay_date)', $this->request->getPost('year'));
            if (!empty($this->request->getPost('month'))) {
                $query->where('MONTH(payroll_table.pay_date)', $this->request->getPost('month'));
            }
        }

        // Check if there is a search value
        if ($this->request->getPost("search")["value"]) {
            $searchValue = $this->request->getPost("search")["value"];
            $query->groupStart();
            $query->like('payroll_table.payroll_id', $searchValue);
            $query->orLike('first_name', $searchValue);
            $query->orLike('last_name', $searchValue);
            $query->orLike('net_pay', $searchValue);
            $query->orLike('pay_date', $searchValue);
            $query->groupEnd();
        }

        // Set order
        if ($this->request->getPost("order")) {
            $orderColumn = $this->request->getPost('order')[0]['column'];
            $orderDirection = $this->request->getPost('order')[0]['dir'];
            $query->orderBy($orderColumn, $orderDirection);
        } else {
            $query->orderBy('payroll_table.payroll_id', 'DESC');
        }

        // Set limit
        if ($this->request->getPost("length")) {
            $query->limit($this->request->getPost('length'), $this->request->getPost('start'));
        }

        // Get total records count without filters
        $totalFilteredRecords = $query->countAllResults(false);

        $result = $query->get()->getResultArray();
        $data = [];

        foreach ($result as $row) {
            $sub_array = [
                $row['first_name'] . ' ' . $row['last_name'],
                $row['net_pay'],
                $row['total_allowance'],
                $row['total_deduction'],
                date('Y', strtotime($row['pay_date'])),
                date('F', strtotime($row['pay_date'])),
                'PAID',
                '
                <div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="' . base_url('update_payroll') . '/' . $row['payroll_id'] . '" type="button" id="adminupdatebtn" class="dropdown-item">
                                <i class="bi bi-pencil" style="color:dodgerblue"></i> Edit
                            </a>
                        </li>
                        <li>
                            <button type="button" id="admindeletebtn" class="dropdown-item" value="' . $row['payroll_id'] . '">
                                <i class="bi bi-trash" style="color:red"></i> Delete
                            </button>
                        </li>
                        <li>
                            <button type="button" id="adminupdatebtn" class="dropdown-item" value="' . $row['payroll_id'] . '">
                                <i class="bi bi-eye" style="color:green"></i> Download payslip
                            </button>
                        </li>
                    </ul>
                </div>
                '
            
            ];

            $data[] = $sub_array;
        }

        $output = [
            "draw" => intval($this->request->getPost('draw')),
            "recordsTotal" => $totalFilteredRecords, // Count all results without filters
            "recordsFiltered" => $totalFilteredRecords,
            "data" => $data,
        ];

        return $this->response->setJSON($output);
    }
}
