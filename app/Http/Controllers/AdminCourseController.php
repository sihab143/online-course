<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    private $courses;
    private $course;
    private $message;

    public function manage()
    {
        $this->courses = Course::all();
        return view('admin.course.manage', ['courses' => $this->courses]);
    }

    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('admin.course.detail', ['course' => $this->course]);
    }

    public function status($id)
    {
       $this->message = Course::updateStatus($id);
        return redirect('/admin-manage-course')->with('message', $this->message);
    }
}
