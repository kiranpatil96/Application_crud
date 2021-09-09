<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    //create method for show data.
    public function index()
    {
      return view('front_end.create');
    }

    public function store(Request $request)
    {
        $student = new Employee;
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->email = $request->input('email');
        $student->gender = $request->input('gender');
        $student->mobile_number = $request->input('mobile_number');
        $student->address = $request->input('address');
        // var_dump($student);
        $student->save();
        // $student->image = $request->input('');
    }
}
