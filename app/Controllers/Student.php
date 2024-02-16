<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Student extends BaseController
{
    public function index()
    {
        //
    }
    public function generatePdf(){
        $dompdf = new \Dompdf\Dompdf();
        // $html = "<h1>PDF Example</h1>";
        $dompdf->loadHtml(view('Student'));
        $dompdf->setPaper('A4','portrait');
        $dompdf->render();
        $dompdf->stream("Student List");
    }
}
