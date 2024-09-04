<?php
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
Route::get('/intranet', [App\Http\Controllers\PrincipalController2::class, 'Principal'])->name('intranet.Principal');

Route::get('/intranetcSac', [App\Http\Controllers\SacControllers::class, 'sac'])->name('intranet.sac');