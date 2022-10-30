<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class EnrollController extends Controller
{
    private $student;
    private $enroll;
    private $data = [];

    public function index($id)
    {
        if(Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
            $this->data = [
                'name' => $this->student->name,
                'email' => $this->student->email,
                'mobile' => $this->student->mobile,
            ];
        }
        return view('website.enroll.enroll', ['id' => $id, 'data' => $this->data]);
    }

    public function createEnroll(Request $request, $id)
    {
        if(Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        else
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:students,email',
                'mobile' => 'required',
            ]);

            $this->student = Student::newStudent($request);

            Session::put('student_id', $this->student->id);
            Session::put('student_name', $this->student->name);
        }

        $this->enroll = Enroll::newEnroll($request, $this->student->id, $id);

        /* ======Email send====== */

        Mail::to($this->student->email)->send(new EnrollConfirmationMail([
            'name' => $this->student->name,
            'user_name' => $this->student->email,
            'password'=>$this->student->mobile,
            'login_url'=>'http://localhost/sihab_batch_5/ssms-batch-five/public/login-registration'
        ]));

        /* ======Email send====== */

        return redirect('/course-registration-detail/'.$this->enroll->id);
    }
}
