<?php

namespace App\Http\Controllers;

use App\Models\StudentProject;
use Illuminate\Http\Request;

class StudentProjectController extends Controller
{
    //1. Retrieve all student projects 
    public function index()
    {
        return StudentProject::all();
    }

    //2. Retrieve a single project
    public function show(StudentProject $studentProject)
    {
        return $studentProject;
    }

    //3. Create a new student project 
    public function store(Request $request) 
    {
        $validated = $request->validate([
            'title'         => 'required|string',
            'description'   => 'required|string',
            'course'        => 'required|string',
            'archived'      => 'nullable|booleann',
        ]);

        return StudentProject::create($validated);
    }

    //4. Update a student project 
    public function update(Request $request, StudentProject $studentProject)
    {
        $validated = $request->validate([
            'title'         => 'required|string',
            'description'   => 'required|string',
            'course'        => 'required|string',
            'archived'      => 'nullable|booleann',
        ]);

        return $studentProject->update($validated);
    }

    //5. Delete a student project 
    public function destroy(StudentProject $studentProject)
    {
        $studentProject->delete();

        return response()->json(['message' => 'The student project has been deleted']);
    }

}
