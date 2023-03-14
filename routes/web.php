<?php

use Illuminate\Support\Facades\Route;

//Importazione Controllers
use App\Http\Controllers\Admin\TrainController;

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

//Richiamo funzione creata in TrainController
Route::get('/', [TrainController::class, 'index']);
