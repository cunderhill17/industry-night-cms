<?php

namespace App\Http\Controllers;

use App\Models\StudentPortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentPortfolioController extends Controller
{
    //1. View all student portfolios
    public function index()
    {
        return StudentPortfolio::all();
    }

    //2. View a single student portfolio
    public function show(StudentPortfolio $studentPortfolio)
    {
        return $studentPortfolio;
    }

    //3. Create a student portfolio entry
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|string',
            'portfolio_url' => 'required|string',
            'student_image' => 'nullable|image|max:4096',
            'archived' => 'nullable|boolean',
        ]);

        if ($request->hasFile('student_image')) {
            $validated['student_image'] = $request->file('student_image')
                ->store('portfolioImages', 'public');
        }

        return StudentPortfolio::create($validated);
    }

    //4. Update a student portfolio entry
    public function update(Request $request, StudentPortfolio $studentPortfolio)
    {
        $validated = $request->validate([
            'student_name' => 'required|string',
            'portfolio_url' => 'required|string',
            'student_image' => 'nullable|image|max:4096',
            'archived' => 'nullable|boolean',
        ]);
    
        if ($request->hasFile('student_image')) {
            if ($studentPortfolio->student_image) {
                Storage::disk('public')->delete($studentPortfolio->student_image);
            }

            $validated['image'] = $request->file('image')
                ->store('portfolioImages', 'public');
        }

        $studentPortfolio->update($validated);

        return $studentPortfolio->fresh();
    }

    //5. Delete a student portfolio entry
    public function destroy(StudentPortfolio $studentPortfolio)
    {
        if ($studentPortfolio->student_image) {
            Storage::disk('public')->delete($studentPortfolio->student_image);
        }

        $studentPortfolio->delete();

        return response()->json(['message' => 'Student Portfolio Entry Deleted']);
    }
}
