<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/sign-up', [AuthController::class,'showRegistrationForm'])->name('sign-up');
Route::get('/log-in', [AuthController::class,'showloginForm'])->name('log-in');
Route::post('/register', [AuthController::class, 'register'])->name('regsiter');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::middleware(['auth'])->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/create', [UserController::class,'create'])->name('create');


    });
});