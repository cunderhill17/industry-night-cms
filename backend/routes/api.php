<?php

    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPortfolioController;



Route::get('/studentPortfolios', [StudentPortfolioController::class, 'index']);
Route::post('/studentPortfolios', [StudentPortfolioController::class, 'store']);

Route::scopeBindings()->group(function () {
    Route::get('/studentPortfolios/{studentPortfolio}', [StudentPortfolioController::class, 'show']);
    Route::put('/studentPortfolios/{studentPortfolio}', [StudentPortfolioController::class, 'update']);
    Route::delete('/studentPortfolios/{studentPortfolio}', [StudentPortfolioController::class, 'destroy']);
});