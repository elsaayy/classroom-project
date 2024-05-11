<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($id)
    {
        $students = User::with('classes')->where('class_id', $id)->get();
        // return $students;

        return view('students.index', ['students' => $students]);
    }
}
