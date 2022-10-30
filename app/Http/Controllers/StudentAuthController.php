<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentAuthController extends Controller
{
    private $student;

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
           'email' => 'email:rfc,dns|unique:students,email',
           'password' => 'required',
        ]);

        $this->student = Student::newStudent($request);
        Session::put('student_id', $this->student->id);
        Session::put('student_name', $this->student->name);
        return redirect('/student-dashboard');

    }

    public function login(Request $request)
    {
         $request->validate([
            'email' => 'required|email',
            'password' => 'required'
         ]);

         $this->student = Student::where('email', $request->email)->first();
         if($this->student)
         {
             if($this->student->status == 1)
             {
                 if(password_verify($request->password, $this->student->password))
                 {
                     Session::put('student_id', $this->student->id);
                     Session::put('student_name', $this->student->name);

                     return redirect('/student-dashboard');
                 }
                 else
                 {
                     return redirect()->back()->with('message', 'Your Password is Invalid.');
                 }
             }
             else
             {
                 return redirect()->back()->with('message', 'Your account is banned. please contact with Admin');
             }
         }
         else
         {
             return redirect()->back()->with('message', 'your email address is invalid');
         }
    }

    public function logout()
    {
        Session::forget('student_id');
        Session::forget('student_name');

        return redirect('/');
    }
}
