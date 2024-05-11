<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MengajarController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StudentController;

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
//   return view('main.index');
//});

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [loginController::class, 'login'])->name('login.store');

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/regist', [registerController::class, 'store'])->name('register.store');

// mahasiswa
Route::get('/data-mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/create-mahasiswas', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswas/{mahasiswa}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

//mengajar
Route::get('/mengajar', [MengajarController::class, 'index'])->name('mengajar.index');
Route::get('/mengajar/detail/{id}', [MengajarController::class, 'detail'])->name('mengajar.detail');
Route::get('/mengajar/create', [MengajarController::class, 'create'])->name('mengajar.create');
Route::post('/mengajar/store', [MengajarController::class, 'store'])->name('mengajar.store');

//settings
Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::get('/ubahprofile', [SettingsController::class, 'editprofile'])->name('settings.editprofile');
Route::get('/ubahpassword', [SettingsController::class, 'editpass'])->name('settings.editpass');

//students
Route::get('/students/{id}', [StudentController::class, 'index'])->name('students.index');


