<?php

use App\Http\Controllers\PortfolioRoleController;
use App\Http\Controllers\PublicApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPortfolioController;
use App\Http\Controllers\StudentProjectController;
use App\Http\Controllers\StudentProjectExampleController;

//Student Portfolio Routes

Route::get('/student-portfolios', [StudentPortfolioController::class, 'index']);
Route::post('/student-portfolios', [StudentPortfolioController::class, 'store']);

Route::scopeBindings()->group(function () {
    Route::get('/student-portfolios/{studentPortfolio}', [StudentPortfolioController::class, 'show']);
    Route::put('/student-portfolios/{studentPortfolio}', [StudentPortfolioController::class, 'update']);
    Route::delete('/student-portfolios/{studentPortfolio}', [StudentPortfolioController::class, 'destroy']);
});


//Portfolio Role Routes

Route::get('/student-portfolios/{studentPortfolio}/portfolio-roles', [PortfolioRoleController::class, 'index']);
Route::post('/student-portfolios/{studentPortfolio}/portfolio-roles', [PortfolioRoleController::class, 'store']);

Route::scopeBindings()->group(function() {
    Route::delete('/student-portfolios/{studentPortfolio}/portfolio-roles/{portfolioRole}', [PortfolioRoleController::class, 'destroy']);
});


//Student Project Routes

Route::get('/student-projects', [StudentProjectController::class, 'index']);
Route::post('/student-projects', [StudentProjectController::class, 'store']);

Route::scopeBindings()->group(function () {
    Route::get('/student-projects/{studentProject}', [StudentProjectController::class, 'show']);
    Route::put('/student-projects/{studentProject}', [StudentProjectController::class, 'update']);
    Route::delete('/student-projects/{studentProject}', [StudentProjectController::class, 'destroy']);
});

//Student Project Example Routes 

Route::get('/student-projects/{studentProject}/student-project-examples', [StudentProjectExampleController::class, 'index']);
Route::post('/student-projects/{studentProject}/student-project-examples', [StudentProjectExampleController::class, 'store']);

Route::scopeBindings()->group(function () {
    Route::delete('/student-projects/{studentProject}/student-project-examples/{studentProjectExample}', [StudentProjectExampleController::class, 'destroy']);
});


//Student Portfolios Pagination
Route::get('/paginate/student-portfolios', [StudentPortfolioController::class, 'portfolioPaginate']);

//Archive Routes
Route::put('/student-portfolios/{studentPortfolio}/archive', [StudentPortfolioController::class, 'archive']);
Route::put('/student-portfolios/{studentPortfolio}/unarchive', [StudentPortfolioController::class, 'unarchive']);

Route::put('/student-projects/{studentProject}/archive', [StudentProjectController::class, 'archive']);
Route::put('/student-projects/{studentProject}/unarchive', [StudentProjectController::class, 'unarchive']);

//Filtering 
Route::get('/student-portfolios/filter/{roleString}', [PublicApiController::class, 'filterPortfolio']);