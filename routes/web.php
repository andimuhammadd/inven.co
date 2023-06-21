<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\DataSupplierController;
use App\Http\Controllers\PerusahaanController;
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

//user controller

Route::get('/users/{id}/password', [UserController::class, 'updatepassword'])->name('users.change-password');

Route::get('/signup', [UserController::class, 'signuppage'])->name('signup');

Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

Route::post('/tambahuser', [UserController::class, 'tambahuser'])->name('tambahuser');

Route::post('/createuser', [UserController::class, 'createUser'])->name('createuser');

Route::put('/password/{user}', [UserController::class, 'updatePassword'])->name('updatePassword');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

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

//inventaris page
Route::get('/databarang', [InventarisController::class, 'pagedatabarang'])->name('databarang');

Route::get('/jenisbarang', [InventarisController::class, 'pagejenisbarang'])->name('jenisbarang');

Route::get('/satuanbarang', [InventarisController::class, 'pagesatuanbarang'])->name('satuanbarang');

Route::get('/satuanbarang', [InventarisController::class, 'pagesatuanbarang'])->name('satuanbarang');

Route::get('/datasupplier', [InventarisController::class, 'pagedatasupplier'])->name('datasupplier');

//data supplier controller
Route::post('/tambahsupplier', [DataSupplierController::class, 'store'])->name('tambah.supplier');
