<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;

    private static $enroll;

    public static function newEnroll($request, $studentId, $courseId)
    {
        self::$enroll = new Enroll();
        self::$enroll->course_id = $courseId;
        self::$enroll->student_id = $studentId;
        self::$enroll->enroll_date = date('Y-m-d');
        self::$enroll->enroll_timestamp = strtotime(date('Y-m-d'));
        self::$enroll->payment_type = $request->payment_type;
        self::$enroll->save();
        return self::$enroll;
    }

    public static function updateStatus($id)
    {
        self::$enroll = Enroll::find($id);
        self::$enroll->enroll_status = "Complete";
        self::$enroll->payment_amount = self::$enroll->course->fee;
        self::$enroll->save();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
