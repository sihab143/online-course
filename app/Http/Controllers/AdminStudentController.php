<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    private $students;
    private $message;

    public function manageStudent()
    {
//        $this->students = DB::select("SELECT * FROM students"); //Row Query
//        $this->students = DB::table('students')->get(); // Query Builder

        $this->students = Student::all(); //ORM
        return view('admin.student.manage', ['students' => $this->students]);
    }

    public function updateStatus($id)
    {
        $this->message = Student::updateStatus($id);
        return redirect()->back()->with('message', $this->message);
    }
}
