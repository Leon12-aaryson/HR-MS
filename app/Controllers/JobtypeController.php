<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobtypeModel;

class JobtypeController extends BaseController
{
    private $job;
    protected $db;

    public function __construct()
    {
        // Loading the database service via dependency injection
        $this->db = \Config\Database::connect();
        $this->job = new JobtypeModel();
    }

    public function fetchjobtypes()
    {
        // Select Job table 
        $builder = $this->db->table('job_type_table');

        $builder->select('job_type_table.*');

        // Handle search value
        $searchData = $this->request->getPost('search');
        if (isset($searchData['value']) && !empty($searchData['value'])) {
            $searchValue = $searchData['value'];
            $builder->groupStart()
                ->like('job_type', $searchValue)
                ->groupEnd();
        }

        // Handle sorting
        $order = $this->request->getPost('order');
        if ($order) {
            $column = $order[0]['column'];
            $dir = $order[0]['dir'];
            $builder->orderBy($column, $dir);
        } else {
            $builder->orderBy('job_type_id', 'DESC');
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
                $row['job_type_id'],
                $row['job_type'],
                '<div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="jobtypeupdatebtn" class="dropdown-item" value="' . $row['job_type_id'] . '">
                                    <i class="bi bi-pencil" style="color:green"></i> Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" id="jobtypedeletebtn" class="dropdown-item" value="' . $row['job_type_id'] . '">
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


    // Fetch Job type
    public function fetchjobtype()
    {
        $id = $this->request->getPost('jobtypeid');

        $jobtype = $this->job->find($id);

        if ($jobtype) {
            return $this->response->setJSON($jobtype);
        } else {
            // Prepare sweet alert response data
            $data = [
                'status' => 'error',
                'message' => 'Contract type not found'
            ];

            return $this->response->setJSON($data);
        }
    }

    // Add Job type
    public function addjobtype()
    {

        // Prepare Job type data
        $jobtypeData = [
            'job_type' => $this->request->getPost('jobtype')
        ];

        // Insert the Job type data into the database
        $this->job->insert($jobtypeData);

        // Prepare sweet alert response data
        $response = [
            'status' => 'success',
            'message' => 'Job type added successfully'
        ];

        return $this->response->setJSON($response);
    }

    // Update Job type
    public function updatejobtype()
    {

        $id = $this->request->getPost('jobtypeid');

        $data = [
            'job_type' => $this->request->getPost('jobtype'),
        ];

        $this->job->update($id, $data);

        $data = [
            'status' => 'success',
            'message' => 'Job type updated successfully'
        ];
        return $this->response->setJSON($data);
    }

    // Delete Job type
    public function deletejobtype()
    {
        $data = [
            'id' => $this->request->getPost('jobtypeid'),
        ];
        $this->job->delete($data);
        $data = [
            'status' => 'success',
            'message' => 'Job type deleted successfully'
        ];
        return $this->response->setJSON($data);
    }
}
