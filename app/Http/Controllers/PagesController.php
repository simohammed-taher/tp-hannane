<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class PagesController extends Controller
{
    public function home()
    {
        return view('students.home');
    }

    public function student()
    {
        $students = Student::all();
        return view('students.student', compact('students'));
    }

    // public function contact()
    // {
    //     return view('contact');
    // }
}
