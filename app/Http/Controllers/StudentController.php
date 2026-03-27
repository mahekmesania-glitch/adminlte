<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // Get all students with their ID cards
        $students = Student::with('idCard')->get();
        
        return view('students.index', compact('students'));
    }

    public function coursesIndex()
{
    // Get all students with their courses
    $students = Student::with('courses')->get();

    // Pass to Blade
    return view('students.courses_index', compact('students'));
}
}
