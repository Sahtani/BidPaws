<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VilleController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [AnnonceController::class, 'recentAnnouncements'])->name('home');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/sign-up', [AuthController::class, 'showRegistrationForm'])->name('sign-up');
Route::get('/log-in', [AuthController::class, 'showLoginForm'])->name('log-in');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');



Route::middleware(['auth', 'user'])->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/create', [AnnonceController::class, 'create'])->name('create');
        Route::get('/annonces', [AnnonceController::class, 'index']);
        Route::get('/annonces/create', [AnnonceController::class, 'create']);
        Route::post('/annonces', [AnnonceController::class, 'store'])->name('store');
        Route::get('annonces/{id}/edit', [AnnonceController::class, 'edit'])->name('edit');
        Route::patch('user/annonces/update/{id}', [AnnonceController::class, 'update'])->name('annonces.update');
        Route::delete('annonces/{id}', [AnnonceController::class, 'destroy'])->name('annonces.destroy');


        Route::get('/my-listings', [AnnonceController::class, 'myListings'])->name('my-listings');

        Route::put('/annonces/{annonce}', [AnnonceController::class, 'confirm']);
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
        Route::get('/admindashboard', [AdminController::class, 'users'])->name('users');
        Route::patch('/toggleAccess/{user}', [AdminController::class, 'toggleAccess'])->name('toggleAccess');
        Route::post('/storecat', [CategoryController::class, 'store'])->name('storecat');
        Route::delete('/destroycat/{id}', [CategoryController::class, 'destroy'])->name('destroycat');
        Route::put('/update', [CategoryController::class, 'update'])->name('update');
        // stats
        // Route::get('/stats',[StatisticsController::class,'index'])->name('stats');
    });
});

Route::get('/annonces/search', [AnnonceController::class, 'searchByVille'])->name('annonces.search');

Route::get('/annonces/{category}', 'AnnonceController@filterByCategory')->name('annonces.category');



// Profile user

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
});


Route::get('/villes', [VilleController::class, 'getVilles']);