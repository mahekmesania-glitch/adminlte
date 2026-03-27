<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
     public function index()
    {
        // Fetch all teachers with their students
        $teachers = Teacher::with('students')->get();

        // Pass data to Blade
        return view('teachers.index', compact('teachers'));
    }
}
