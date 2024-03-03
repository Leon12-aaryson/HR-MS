<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\VacancyModel;

class VacancyController extends BaseController
{
    public function index()
    {


        $model = new VacancyModel();
        $vacancy = [
            'position' => $this->request->getPost('position'),
            'salary' => $this->request->getPost('salary'),
            'job_nature' => $this->request->getPost('job_nature'),
            'number_of_vacancy' => $this->request->getPost('number_of_vacancy'),
            'publish_date' => $this->request->getPost('publish_date'),
            'deadline_date' => $this->request->getPost('deadline_date'),
            'status' => $this->request->getPost('status'),
            'address' => $this->request->getPost('address'),
            'responsibility' => $this->request->getPost('responsibility'),
            'qualifications' => $this->request->getPost('qualifications'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status'),
        ];

        $model->insert($vacancy);
        if ( $model->affectedRows() > 0) {
            session()->setFlashdata('success', 'The job Vacancy is added successfully');
            return redirect()->to('vacancy');
        } else {
            session()->setFlashdata('error', 'Failed to add job vacancy, please try again');
            return redirect()->to('vacancy');
        }


    }
    
}
