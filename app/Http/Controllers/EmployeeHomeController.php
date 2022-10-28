<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeHomeController extends Controller
{
    public function index(){
        return view('employees_home');
    }
}
