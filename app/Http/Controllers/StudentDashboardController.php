<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentDashboardController extends Controller
{
    private $student;

    public function index()
    {
        $this->student = Student::where('id', Session::get('student_id'))->first();
        return view('student.home.home', ['student' => $this->student]);
    }


}
