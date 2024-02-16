<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DisciplinaryModel;
use App\Helpers\FileUploader;

class Disciplinary extends BaseController
{
    private $disciplinaryData;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->disciplinaryData = new DisciplinaryModel();
    }
    public function index()
    {
        return view('displinary');
    }
    public function fetchDisplinary()
    {
        // Select employee table 
        $builder = $this->db->table('displinary_table');

        $builder->select('displinary_table.*');
                

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('displinary_case', $searchValue)
                ->orLike('victim', $searchValue)
                ->orLike('punishment', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('displinary_id', 'DESC');
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
                $row['displinary_case'],
                $row['victim'],
                $row['punishment'],
                '<span class="btn btn-sm btn-primary"  data-bs-toggle="modal" data-bs-target="#view".'.$row['displinary_id'].'.>View</span>',
                '<a href="#".'.$row['displinary_id'].'. style="text-decoration: none;">View Letter</a>',
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <button type="button" id="adminupdatebtn" class="dropdown-item" value="' . $row['employee_id'] . '">
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
    public function Insert_displinary(){
        $model = new DisciplinaryModel();

        $file = $this->request->getFile('letter'); // Assuming you're getting the file from a form submission

        $folder = 'Upload_warning_Letter'; // The desired folder within the public directory

        $uploadedFilePath = FileUploader::uploadFile($file, $folder);
     
        $disciplinaryData = [
            'displinary_case' => $this->request->getPost('displicary_case'),
            'victim' => $this->request->getPost('victim_name'),
            'punishment' => $this->request->getPost('punishment'),
            'description' => $this->request->getPost('description'),
            'warning_letter' => $uploadedFilePath
        ];
        
        
        $model->insert($disciplinaryData);
        return redirect()->to('disciplinary'); 
    }
}
