<?php

use App\Http\Controllers\ImportExportController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
 

Route::get('export', [ImportExportController::class,'export'])->name('export');
Route::get('/', [ImportExportController::class,'importExportView'])->name('users.index');
Route::post('import', [ImportExportController::class,'import'])->name('import');