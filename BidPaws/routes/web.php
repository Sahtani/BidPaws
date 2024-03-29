<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::prefix('auth')->name('auth.')->group(function () {
        Route::get('/sign-up', [AuthController::class,'showRegistrationForm'])->name('sign-up');
        Route::post('/register', [AuthController::class, 'register'])->name('regsiter');

    });