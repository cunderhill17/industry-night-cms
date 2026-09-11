<?php

namespace App\Http\Controllers;

use App\Models\StudentProject;
use App\Models\StudentProjectExample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentProjectExampleController extends Controller
{
    //1. View all project examples for a single project 
    public function index(StudentProject $studentProject)
    {
        return $studentProject->studentProjectExamples()->get();
    }

    //2. Create a project example 
    public function store(Request $request, StudentProject $studentProject)
    {
        $validated = $request->validate([
            'project_type'  => 'required|string',
            'video_url'     => 'nullable|mimes:mp4,mov,avi,webm|max:512000',
            'image_url'     => 'nullable|image|max:4096',
        ]);

        if ($request->hasFile('video_url')) {
            $validated['video_url'] = $request->file('video_url')
                ->store('ProjectVideos', 'public');
        }

        if ($request->hasFile('image_url')) {
            $validated['image_url'] = $request->file('image_url')
                ->store('ProjectImages', 'public');
        }

        return $studentProject->studentProjectExamples()->create($validated);
    }

    //3. Delete a project example
    public function destroy(StudentProject $studentProject, StudentProjectExample $studentProjectExample)
    {
        if ($studentProjectExample->image_url) {
            Storage::disk('public')->delete($studentProjectExample->image_url);
        }

        if ($studentProjectExample->video_url) {
            Storage::disk('public')->delete($studentProjectExample->video_url);
        }

        $studentProjectExample->delete();

        return response()->json(['message' => 'Project example has been deleted']);
    }
}
