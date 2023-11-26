<?php

namespace App\Http\Controllers;

use App\Models\studentM;
use Illuminate\Http\Request;
use App\Http\Requests\student;

class starter extends Controller
{
    public function index()
    {
        $student = studentM::all();
        $student_count = count($student);
        // dd();
        return view('admin.index', ['student' => $student]);
    }

    public function std_reg()
    {
        return view('student.reg');
    }


    public function std_reg_store(student $student)
    {
        $data = $student->except('_token'); // Exclude the _token field
        // dd($data);
          // Validation has already been performed at this point
          $student = studentM::create($data);

          // You can perform additional actions if needed
  
          if ($student) {
            return response()->json(['message' => 'Student registered successfully'], 200);
          }else {
            return response()->json(['message' => false], 400);
          }
          // Redirect or respond as needed
        //   return redirect()->back()->with('success', 'Student registered successfully.');
    }

    public function successfull()
    {
        return view('student.successful');
    }


    public function show($id)
{
    $user = studentM::find($id);

    return response()->json(['user' => $user]);
}
  
}
