<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [DashboardController::class, 'index'])->name('/')
    ->name('/')
    ->middleware('auth')
    ->middleware('verified');

Route::get('/welcome', function () {
    return view('pages.welcome');
})->name('welcome');

Route::get('/signup', [UserController::class, 'signuppage'])->name('signup');

Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

Route::put('/password/{user}', [UserController::class, 'updatePassword'])->name('updatePassword');

Route::get('/resetpassword', [UserController::class, 'showResetPasswordForm'])->name('resetpassword');

Route::get('/sendResetPasswordLink', [UserController::class, 'showResetPasswordForm'])->name('sendResetPasswordLink');

Route::get('/loginpage', [UserController::class, 'loginpage'])->name('loginpage');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/loginpage'); // Ganti dengan rute yang sesuai setelah logout
})->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/datauser', [DatauserController::class, 'index'])->name('datauser');

Route::post('/perusahaan', [PerusahaanController::class, 'store'])->name('perusahaan.store');

Route::post('/createuser', [CreateUserController::class, 'create'])->name('createuser');

Route::get('/databarang', [InventarisController::class, 'pagedatabarang'])->name('databarang');

Route::get('/jenisbarang', [InventarisController::class, 'pagejenisbarang'])->name('jenisbarang');

Route::get('/satuanbarang', [InventarisController::class, 'pagesatuanbarang'])->name('satuanbarang');

Route::get('/satuanbarang', [InventarisController::class, 'pagesatuanbarang'])->name('satuanbarang');

Route::get('/datasupplier', [InventarisController::class, 'pagedatasupplier'])->name('datasupplier');

Route::post('/createuser', [UserController::class, 'createUser'])->name('createuser');
