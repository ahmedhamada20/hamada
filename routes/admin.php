<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\QuizController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->middleware('auth')->group(function (){
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::prefix('quiz')->group(function (){
      Route::get('index', [QuizController::class, 'index'])->name('quiz');
      Route::get('create', [QuizController::class, 'create'])->name('create_quiz');
      Route::post('store', [QuizController::class, 'store'])->name('store_quiz');
      Route::post('update/{id}', [QuizController::class, 'update'])->name('update_quiz');
      Route::get('edit/{id}', [QuizController::class, 'edit'])->name('edit_quiz');
      Route::get('delete/{id}', [QuizController::class, 'destroy'])->name('delete_quiz');
   });
    Route::prefix('setting')->group(function (){
        Route::get('index', [SettingController::class, 'index'])->name('setting');
        Route::post('update/{id}', [SettingController::class, 'update'])->name('update_setting');
    });
});

require __DIR__.'/auth.php';
