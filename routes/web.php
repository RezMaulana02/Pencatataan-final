<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
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
    return view('home');
})->name('home');

Route::get('/about', [UserController::class, 'about'])->name('about');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
Route::get('/userprofile', [UserController::class, 'userprofile'])->name('profile');
Route::post('/userprofile', [UserController::class, 'saveProfile'])->name('profile.save');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::post('/profile/save', [ProfileController::class, 'save'])->name('profile.save');

});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
    smilify('success', 'You are successfully reconnected');

    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/datauser', [DataUserController::class, 'index'])->name('admin/datauser');
    Route::get('/admin/data_pembayaraan', [DataUserController::class, 'index'])->name('admin/data_pembayaraan');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');
    Route::get('/search', [ProductController::class, 'search'])->name('search');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::resource('datausers', DataUserController::class);
    Route::get('/datausers', [DataUserController::class, 'index'])->name('datausers.index');
    Route::get('/admin/payments', [PaymentController::class, 'index'])->name('admin.payments.index');
    Route::get('/admin/payments/create', [PaymentController::class, 'create'])->name('admin.payments.create');
    Route::post('/admin/payments/store', [PaymentController::class, 'store'])->name('admin.payments.store');
    Route::get('/admin/payments/{id}', [PaymentController::class, 'show'])->name('admin.payments.show');
    Route::get('/admin/payments/{id}/edit', [PaymentController::class, 'edit'])->name('admin.payments.edit');
    Route::put('/admin/payments/{id}', [PaymentController::class, 'update'])->name('admin.payments.update');
    Route::delete('/admin/payments/{id}', [PaymentController::class, 'destroy'])->name('admin.payments.destroy');

Route::get('/datausers/{id}', [DataUserController::class, 'show'])->name('datausers.show');
Route::get('/datausers/{id}/edit', [DataUserController::class, 'edit'])->name('datausers.edit');
Route::put('/datausers/{id}', [DataUserController::class, 'update'])->name('datausers.update');
Route::delete('/datausers/{id}', [DataUserController::class, 'destroy'])->name('datausers.destroy');
Route::get('/admin/datauser/create', [DataUserController::class, 'create'])->name('admin.datauser.create');
Route::get('admin/datausers/edit/{id}', [DataUserController::class, 'edit'])->name('datausers.edit');
Route::delete('admin/datausers/destroy/{id}', [DataUserController::class, 'destroy'])->name('datausers.destroy');
Route::get('admin/datausers/edit/{datauser}', [DataUserController::class, 'edit'])->name('datausers.edit');








});
Route::middleware(['auth'])->group(function () {
    Route::get('/userprofile', [UserController::class, 'userprofile'])->name('userprofile');
    Route::post('/userprofile', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/about', [UserController::class, 'about'])->name('about');
});
