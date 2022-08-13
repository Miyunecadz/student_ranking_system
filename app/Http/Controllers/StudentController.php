<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('score', 'desc')->get();
        return view('student.index', ['students' => $students]);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:students',
            'score' => 'required|numeric'
        ]);

        Student::create($request->except('_token'));

        return redirect(route('student.index'))->with('success', true);
    }
}
