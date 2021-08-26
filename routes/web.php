
<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\ModalRoleUserCreate;
use App\Http\Livewire\RoleUser;
use App\Http\Livewire\Show;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth', 'checkAdmin'])->group(function () {

// });

Route::middleware('auth')->group(function () {
    Route::middleware('checkAdmin')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::resource('product', ProductController::class);
        Route::resource('category', CategoryController::class);
        Route::get('profile-show', Show::class)->name('p.show');
        Route::get('/role', [RoleUser::class, 'index'])->name('RoleUser.show');
        Route::get('/role_user', [ModalRoleUserCreate::class, 'index'])->name('RoleUser.create');
    });
});

// Route::get('/dashboard',Show::class )->name('dashboard');
