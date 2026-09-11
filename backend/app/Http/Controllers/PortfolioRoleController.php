<?php

namespace App\Http\Controllers;

use App\Models\PortfolioRole;
use App\Models\StudentPortfolio;
use Illuminate\Http\Request;

class PortfolioRoleController extends Controller
{
    //1. Retrieve all Roles for a particular portfolio 
    public function index(StudentPortfolio $studentPortfolio)
    {
        return $studentPortfolio->portfolioRoles()->get();
    }

    //2. Add a new role for a particular portfolio 
    public function store(Request $request, StudentPortfolio $studentPortfolio)
    {
        $validated = $request->validate([
            'role' => 'required|string'
        ]);

        return $studentPortfolio->portfolioRoles()->create($validated);
    }

    //3. Delete a role for a particular portfolio 
    public function destroy(StudentPortfolio $studentPortfolio, PortfolioRole $portfolioRole)
    {
        $portfolioRole->delete();

        return response()->json(['message' => 'The portfolio role has been deleted']);
    }
}
