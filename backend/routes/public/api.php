<?php

use App\Http\Controllers\PublicApiController;
use Illuminate\Support\Facades\Route;

//Student Portfolios Pagination
Route::get('/paginate/student-portfolios', [PublicApiController::class, 'portfolioPaginate']);

//Filtering 
Route::get('/student-portfolios/filter/{roleString}', [PublicApiController::class, 'filterPortfolio']);