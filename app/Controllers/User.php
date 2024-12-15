<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UserModel;

class User extends BaseController
{
    public function login()
    {
        return view('login/v_login');
    }
    
    public function home()
    {
        return view('home');
    }

}
