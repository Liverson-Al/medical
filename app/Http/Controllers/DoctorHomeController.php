<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorHomeController extends Controller
{
    public function index(){
        return view('doctors_home');
    }
}
