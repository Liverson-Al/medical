<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(){
        return view('employees.create');
    }
}
