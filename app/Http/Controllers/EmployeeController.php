<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('layouts.employees', compact('employees'));
    }

    public function show(Employee $employee) {
        return view('layouts.employee-edit', compact('employee'));
    }
}
