<?php

namespace App\Http\Controllers;

use App\Models\studentM;
use Illuminate\Http\Request;
use App\Http\Requests\student;
use Illuminate\Support\Facades\Auth;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Support\Facades\Validator;

class starter extends Controller
{
  public function index()
  {
    $students = $student_count = studentM::all();
    $user =  Auth::User();
    $user->gravatar_url = $this->Gravatar($user->email);
    // dd($user);
    // $student_count = count($student);
    // For each student, generate the Gravatar URL and add it to the student object
    foreach ($students as $student) {
      $gravatar_url = $this->Gravatar($student->email); // Assuming 'full_name' is the attribute you want to use
      $student->gravatar_url = $gravatar_url;
    }
    return view('admin.index', ['student' => $students, 'user' => $user]);
  }

  public function std_reg()
  {
    return view('student.reg');
  }


  public function std_reg_store(Request $request)
  {
    // Validate the request
    $validator = Validator::make($request->all(), [
      'full_name' => 'required|string',
      'date_of_birth' => 'required|date',
      'email' => 'required|email',
      'mobile_number' => 'required|string',
      'gender' => 'required|string',
      'zip' => 'required|string',
      'level' => 'required|integer',
      'university' => 'required|string',
      'course' => 'required|string',
      'address_type' => 'required|string',
      'nationality' => 'required|string',
      'state' => 'required|string',
      'district' => 'required|string',
      'block_number' => 'required|integer',
      'Passport' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size as needed
      'guardian_name' => 'required|string',
      'guardian_phone_number' => 'required|string',
      'emergency' => 'required|string',
    ]);

    // Check if the validation fails
    if ($validator->fails()) {
      return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        // The '422' status code indicates unprocessable entity
  }

  $data = $request->all();

    // Handle file upload
    if ($request->hasFile('Passport')) {
      $path = $request->file('Passport')->store('passport_photos');
      // Update the data array with the file path
      $data['passport'] = $path;
    }

    

    $student = studentM::create($data);

    // You can perform additional actions if needed

    if ($student) {
      return $this->successfull();
      return response()->json(['message' => 'Student registered successfully'], 200);
    } else {
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



  public function Gravatar($email)
  {
    $gravatar_url = Gravatar::get($email, ['default' => 'mp', 'size' => 200]);
    return $gravatar_url;
  }


  public function Dashboard()
  {
  }
}
