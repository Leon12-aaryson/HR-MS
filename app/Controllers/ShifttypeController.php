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

    public function fetchshiftypes()
    {
        // Select Shift table 
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
                                <button type="button" id="shiftupdatebtn" class="dropdown-item" value="' . $row['shift_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="shiftdeletebtn" class="dropdown-item" value="' . $row['shift_id'] . '">
                                    <i class="bi bi-trash" style="color:red"></i> Delete
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


    
    // Fetch shift
    public function fetchshiftype()
    {
        $id = $this->request->getPost('shiftid');

        $shiftype = $this->shiftype->find($id);

        if ($shiftype) {
            return $this->response->setJSON($shiftype);
        } else {
            // Prepare sweet alert response data
            $data = [
                'status' => 'error',
                'message' => 'Shift not found'
            ];

            return $this->response->setJSON($data);
        }
    }

    // Add Shift
    public function addshiftype()
    {

        // Prepare Shift data
        $shiftData = [
            'shift' => $this->request->getPost('shiftype')
        ];

        // Insert the Shift data into the database
        $this->shiftype->insert($shiftData);

        // Prepare sweet alert response data
        $response = [
            'status' => 'success',
            'message' => 'Shift added successfully'
        ];

        return $this->response->setJSON($response);
    }

    // Update Shift
    public function updateshiftype()
    {

        $id = $this->request->getPost('shiftid');

        $data = [
            'shift' => $this->request->getPost('shift'),
        ];

        $this->shiftype->update($id, $data);

        $data = [
            'status' => 'success',
            'message' => 'Shift updated successfully'
        ];
        return $this->response->setJSON($data);
    }

    // Delete Shift
    public function deleteshiftype()
    {
        $data = [
            'id' => $this->request->getPost('shiftid'),
        ];
        $this->shiftype->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Shift deleted successfully'
        ];
        return $this->response->setJSON($data);
    }


}
