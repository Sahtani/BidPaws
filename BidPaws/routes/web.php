<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;
use Pusher\Pusher;










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

Route::get('/allannonces', [AnnonceController::class, 'index'])->name('allannoces');


Route::get('/', [AnnonceController::class, 'recentAnnouncements'])->name('home');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

// Route::get('/chat', function () {
//     return view('chat');
// })->name('chat');

// Route::get('/profile', function () {
//     return view('user.user-profil');
// })->name('profile');

// Message
Route::get('/chat', [ConversationController::class, 'index'])->name('chat');
Route::post('/ReadMessages', [MessageController::class , 'readMessages']);
Route::post('/messages/send', [MessageController::class ,'store']);
Route::get('/user/conversations', [ConversationController::class, 'getUserConversations'])->name('user.conversations');





Route::get('/sign-up', [AuthController::class, 'showRegistrationForm'])->name('sign-up');
Route::get('/log-in', [AuthController::class, 'showLoginForm'])->name('log-in');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'user'])->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        // profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

        Route::get('/create', [AnnonceController::class, 'create'])->name('create');
        Route::get('/annonces', [AnnonceController::class, 'index']);
        Route::get('/annonces/create', [AnnonceController::class, 'create']);
        Route::post('/annonces', [AnnonceController::class, 'store'])->name('store');
        Route::get('annonces/{id}/edit', [AnnonceController::class, 'edit'])->name('edit');
        Route::patch('user/annonces/update/{id}', [AnnonceController::class, 'update'])->name('update');
        Route::delete('annonces/{id}', [AnnonceController::class, 'destroy'])->name('delete');
        Route::post('/addToFavorites/{id}', [FavoriteController::class, 'addToFavorites'])->name('addToFavorites');
 

        Route::get('/my-listings', [AnnonceController::class, 'myListings'])->name('my-listings');

        Route::put('/annonces/{annonce}', [AnnonceController::class, 'confirm']);
    });
});

Route::get('annonces/show/{id}', [AnnonceController::class, 'show'])->name('show');
Route::post('/annonces/search', [AnnonceController::class, 'search'])->name('annonces.search');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
        Route::get('/admindashboard', [AdminController::class, 'users'])->name('users');
        Route::patch('/toggleAccess/{user}', [AdminController::class, 'toggleAccess'])->name('toggleAccess');
        Route::post('/storecat', [CategoryController::class, 'store'])->name('storecat');
        Route::delete('/destroycat/{id}', [CategoryController::class, 'destroy'])->name('destroycat');
        Route::put('/update', [CategoryController::class, 'update'])->name('update');
        
        Route::get('/annonces',[AdminController::class,'annonces'])->name('annonces');
        Route::patch('/validateAnnonce/{annonce}',[AdminController::class,'acceptAnnoces'])->name('validateAnnonce');
        Route::patch('/rejectAnnoces/{annonce}',[AdminController::class,'rejectAnnoces'])->name('rejectAnnoces');
        // stats
        Route::get('/stats', [AdminController::class, 'stats'])->name('stats');

   
    });
});

// Route::get('/annonces/search', [AnnonceController::class, 'searchByVille'])->name('annonces.search');

Route::get('/annonces/{category}', 'AnnonceController@filterByCategory')->name('annonces.category');




// Profile user

// Route::middleware(['auth', 'user'])->group(function () {
//     
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     Route::put('password', [PasswordController::class, 'update'])->name('password.update');
// });


Route::get('/villes', [VilleController::class, 'getVilles']);