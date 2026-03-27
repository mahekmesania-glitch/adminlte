<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    // Show upload form
    public function create(Person $person)
    {
        return view('upload', compact('person'));
    }

    // Handle file upload
    public function store(Request $request, Person $person)
    {
        $request->validate([
            'passport_file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Save file in storage/app/public/passports
        $path = $request->file('passport_file')->store('passports', 'public');

        // Save path in database (update if already exists)
        $person->passport()->updateOrCreate(
            ['person_id' => $person->id],
            ['file_path' => $path]
        );

        return back()->with('success', 'Passport uploaded successfully!');
    }
}
