<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function register()
    {
       return view('frontend.employee.register');
    }
}
