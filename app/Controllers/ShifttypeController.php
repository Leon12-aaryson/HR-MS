<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ShifttypeModel;

class ShifttypeController extends BaseController
{
    private $shiftype;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->shiftype = new ShifttypeModel();
    }

    public function fetchshiftype()
    {
        // Select branch table 
        $builder = $this->db->table('shift_table');

        $builder->select('shift_table.*'); 

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('shift', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('shift_id', 'DESC');
        }

        // Handle pagination
        $length = $this->request->getPost('length');
        $start = $this->request->getPost('start');
        if ($length !== -1) {
            $builder->limit($length, $start);
        }

        // Get total records count without filters
        $totalFilteredRecords = $builder->countAllResults(false);

        // Execute the query
        $query = $builder->get();
        $result = $query->getResultArray();

        $data = [];

        foreach ($result as $row) {

            // Columns to be returned back in DataTable
            $sub_array = [
                $row['shift_id'],
                $row['shift'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <button type="button" id="adminupdatebtn" class="dropdown-item" value="' . $row['shift_id'] . '">
                                <i class="bi bi-pencil" style="color:dodgerblue"></i> Edit
                            </button>
                        </li>
                        <li>
                            <button type="button" id="admindeletebtn" class="dropdown-item" value="' . $row['shift_id'] . '">
                                <i class="bi bi-trash" style="color:red"></i> Delete
                            </button>
                        </li>
                        <li>
                            <button type="button" id="adminupdatebtn" class="dropdown-item" value="' . $row['shift_id'] . '">
                                <i class="bi bi-eye" style="color:green"></i> View
                            </button>
                        </li>
                    </ul>
                </div>',
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
