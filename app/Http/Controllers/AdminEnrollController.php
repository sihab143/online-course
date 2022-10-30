<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class AdminEnrollController extends Controller
{
    private $enrolls;

    public function manageEnroll()
    {
        $this->enrolls = Enroll::orderBy('id', 'desc')->get();
        return view('admin.enroll.manage', ['enrolls' => $this->enrolls]);
    }

    public function updateStatus($id)
    {
        Enroll::updateStatus($id);
        return redirect()->back()->with('message', 'Enroll Status Complete Successfully');
    }
}
