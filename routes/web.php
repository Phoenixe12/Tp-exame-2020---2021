<?php

use App\Http\Controllers\ArrondissementController;
use App\Http\Controllers\ClusterController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\VillageController;
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

Route::resource('clusters',ClusterController::class);
Route::resource('filieres', FiliereController::class);
Route::resource('departements', DepartementController::class);
Route::resource('communes', CommuneController::class);
Route::resource('arrondissements', ArrondissementController::class);
Route::resource('villages', VillageController::class);

