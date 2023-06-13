<?php
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\EducationController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and will be assigned to
| the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('user-detail', UserDetailController::class);
    Route::resource('education', EducationController::class)->except(['store']);
    Route::post('education', [EducationController::class, 'store'])->name('education.store');
});
