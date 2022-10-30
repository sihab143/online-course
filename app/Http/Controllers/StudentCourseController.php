<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentCourseController extends Controller
{
    private $course;
    private $enrollCourses;
    private $student;
    private $result;
    private $enroll;
    private $email;
    private $students;

    public function detail($id)
    {
        $this->enroll = Enroll::find($id);
        $this->course = Course::find($this->enroll->course_id);
        $this->result = [
          'title' => $this->course->title,
          'teacher_name' => $this->course->teacher->name,
          'start_date' => $this->course->start_date,
          'fee' => $this->course->fee,
          'enroll_status' => $this->enroll->enroll_status,
        ];
        return view('student.course.detail',['result' => $this->result]);
    }

    public function studentCourses()
    {
        $this->enrollCourses = Enroll::where('student_id', Session::get('student_id'))->orderBy('id', 'desc')->get();

        return view('student.studentCourses.courses', [
            'enrollCourses' => $this->enrollCourses,
        ]);
    }

    public function checkEmail()
    {
        $this->email = $_GET['email'];
        $this->students = Student::Where('email', $this->email)->first();
        
        // return response()->json($this->students->email);

        if($this->students)
        {
            return response()->json([
                'success' => false,
                'message' => "This email already exist"
            ]);
        }
        else
        {
            return response()->json([
                'success' => true,
                'message' => "this email availabe"
            ]);
        }
    }
}
