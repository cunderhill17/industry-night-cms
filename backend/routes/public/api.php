<?php

use App\Http\Controllers\PublicApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPortfolioController;

//Student Portfolios Pagination
Route::get('/paginate/student-portfolios', [StudentPortfolioController::class, 'portfolioPaginate']);

//Filtering 
Route::get('/student-portfolios/filter/{roleString}', [PublicApiController::class, 'filterPortfolio']);