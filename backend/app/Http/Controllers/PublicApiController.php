<?php

namespace App\Http\Controllers;

use App\Models\StudentPortfolio;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
// use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class PublicApiController extends Controller
{
    //1. Filtering Portfolios based on role 
    public function filterPortfolio(string $roleString)
    {
        $queryString = $roleString;

        return StudentPortfolio::whereHas('portfolioRoles', function (EloquentBuilder $query) use ($queryString) {
            $query->where(['role' => $queryString]);
        })->with('portfolioRoles')
            ->where(['archived' => false])->get();
    }
}
