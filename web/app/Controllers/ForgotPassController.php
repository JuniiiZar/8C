<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ForgotPassController extends BaseController
{
    public function index()
    {
        return view("forgot-password/forgot-pass");
    }
}
