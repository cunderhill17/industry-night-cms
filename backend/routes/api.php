<?php

use App\Http\Controllers\PortfolioRoleController;
use App\Http\Controllers\PublicApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPortfolioController;
use App\Http\Controllers\StudentProjectController;
use App\Http\Controllers\StudentProjectExampleController;

/* ---Student Portfolio Roles--- */

Route::get('/student-portfolios', [StudentPortfolioController::class, 'index']);
Route::post('/student-portfolios', [StudentPortfolioController::class, 'store']);

Route::prefix('/student-portfolios')->group(function () {
    Route::scopeBindings()->group(function () {
        Route::get('/{studentPortfolio}', [StudentPortfolioController::class, 'show']);
        Route::put('/{studentPortfolio}', [StudentPortfolioController::class, 'update']);
        Route::delete('/{studentPortfolio}', [StudentPortfolioController::class, 'destroy']);
    });

    Route::get('/{studentPortfolio}/portfolio-roles', [PortfolioRoleController::class, 'index']);
    Route::post('/{studentPortfolio}/portfolio-roles', [PortfolioRoleController::class, 'store']);

    Route::scopeBindings()->group(function() {
        Route::delete('/{studentPortfolio}/portfolio-roles/{portfolioRole}', [PortfolioRoleController::class, 'destroy']);
    });

    Route::put('/{studentPortfolio}/archive', [StudentPortfolioController::class, 'archive']);
    Route::put('/{studentPortfolio}/unarchive', [StudentPortfolioController::class, 'unarchive']);

});

/* ---Student Project Routes--- */

Route::get('/student-projects', [StudentProjectController::class, 'index']);
Route::post('/student-projects', [StudentProjectController::class, 'store']);

Route::prefix('/student-projects')->group(function () {
    Route::scopeBindings()->group(function () {
        Route::get('/{studentProject}', [StudentProjectController::class, 'show']);
        Route::put('/{studentProject}', [StudentProjectController::class, 'update']);
        Route::delete('/{studentProject}', [StudentProjectController::class, 'destroy']);
    });

    Route::get('/{studentProject}/student-project-examples', [StudentProjectExampleController::class, 'index']);
    Route::post('/{studentProject}/student-project-examples', [StudentProjectExampleController::class, 'store']);

    Route::scopeBindings()->group(function () {
        Route::delete('/{studentProject}/student-project-examples/{studentProjectExample}', [StudentProjectExampleController::class, 'destroy']);
    });

    Route::put('/{studentProject}/archive', [StudentProjectController::class, 'archive']);
    Route::put('/{studentProject}/unarchive', [StudentProjectController::class, 'unarchive']);
});



