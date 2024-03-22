<?php

use App\Http\Controllers\starter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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




Route::get('/login', [AuthenticatedSessionController::class, 'create']);
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::get('/logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/dashboard', [starter::class, 'index'])->name('dashboard_president')->middleware(['auth']);
Route::get('/user/{id}', [starter::class, 'show'])->name('user.show')->middleware(['auth']);


Route::get('/', function () {
    return view('welcome');
});

//new


Route::prefix('student')->group(function () {
    Route::get('/reg', function () {
        return 'hi';
        
    });
});

Route::get('/student/registration', [starter::class, 'std_reg'])->name('std_reg');
Route::post('/reg/submit', [starter::class, 'std_reg_store'])->name('reg_submit');
Route::get('/reg/successful', [starter::class, 'successfull'])->name('reg_successfull');



//routes
Route::get('/home', [starter::class, 'home'])->name('home');
Route::get('/admission', [starter::class, 'admission'])->name('admission');
Route::get('/about', [starter::class, 'about'])->name('about');
Route::get('/career', [starter::class, 'career'])->name('career');
Route::get('/contact', [starter::class, 'contact'])->name('contact');




