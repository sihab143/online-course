<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;


class TeacherAuthController extends Controller
{
    private $email;
    private $password;
    private $teacher;

    public function login()
    {
        return view('teacher.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $this->teacher = Teacher::where('email', $request->email)->first();
        if($this->teacher)
        {
            if(password_verify($request->password, $this->teacher->password))
            {
                Session::put('teacher_id', $this->teacher->id);
                Session::put('teacher_name', $this->teacher->name);
                Session::put('teacher_image', $this->teacher->image);

                return redirect('/teacher-dashboard');
            }
            else
            {
                return redirect()->back()->with('message', 'Your Password is Invalid.');
            }
        }
        else
        {
            return redirect()->back()->with('message', 'Your Email is Invalid.');

        }
    }

    public  function logout()
    {
        Session::forget('teacher_id');
        Session::forget('teacher_name');
        Session::forget('teacher_image');

        return redirect('/teacher-login');
    }
}
