<?php

use App\Http\Controllers\PortfolioRoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPortfolioController;
use App\Http\Controllers\StudentProjectController;

//Student Portfolio Routes

Route::get('/studentPortfolios', [StudentPortfolioController::class, 'index']);
Route::post('/studentPortfolios', [StudentPortfolioController::class, 'store']);

Route::scopeBindings()->group(function () {
    Route::get('/studentPortfolios/{studentPortfolio}', [StudentPortfolioController::class, 'show']);
    Route::put('/studentPortfolios/{studentPortfolio}', [StudentPortfolioController::class, 'update']);
    Route::delete('/studentPortfolios/{studentPortfolio}', [StudentPortfolioController::class, 'destroy']);
});


//Portfolio Role Routes

Route::get('/studentPortfolios/{studentPortfolio}/portfolioRoles', [PortfolioRoleController::class, 'index']);
Route::post('/studentPortfolios/{studentPortfolio}/portfolioRoles', [PortfolioRoleController::class, 'store']);

Route::scopeBindings()->group(function() {
    Route::delete('/studentPortfolios/{studentPortfolio}/portfolioRoles/{portfolioRole}', [PortfolioRoleController::class, 'destroy']);
});


//Student Project Routes

Route::get('/studentProjects', [StudentProjectController::class, 'index']);
Route::post('/studentProjects', [StudentProjectController::class, 'store']);

Route::scopeBindings()->group(function () {
    Route::get('/studentProjects/{studentProject}', [StudentProjectController::class, 'show']);
    Route::put('/studentProjects/{studentProject}', [StudentProjectController::class, 'update']);
    Route::delete('/studentProjects/{studentProject}', [StudentProjectController::class, 'destroy']);
});
