<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function __construct(){
        helper('form');
    }
   
    public function index()
    {
        $data = [];
        if($this->request->getMethod() == 'post'){
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]|max_length[16]',
            ];
            if($this->validate($rules)){

            }
            else{
                $data['validation'] = $this->validator; 
            }
        }
        return view('login',$data);
    }
}
?>
