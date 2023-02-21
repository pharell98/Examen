<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferentielController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LoginController;
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


/* ACCUEIL Site route*/


Route::get('/', [CandidatController::class, 'home']);
 

/* User route */
Route::get('/home', [CandidatController::class, 'accueil']);
Route::get('/profil', [CandidatController::class, 'candidat']);
Route::get('/mesformations/{id}', [CandidatController::class, 'mesformations']);
Route::get('/update/{id}', [CandidatController::class, 'update']);
Route::post('/update/modifier', [CandidatController::class, 'user']);
Route::get('/all/{id}', [CandidatController::class, 'all']);
Route::get('/integrer/{candidat_id}/{formation_id}', [CandidatController::class, 'integrer']);

/* Login user route*/

Route::get('/connecter', [LoginController::class, 'connecter']);
Route::get('/inscrire', [LoginController::class, 'inscrire']);
Route::post('/inscrire', [LoginController::class, 'registration']);
Route::post('/connecter', [LoginController::class, 'login']);
Route::get('/logoutuser', [LoginController::class, 'logout']);


/* login Admin route*/
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/loginadmin', [AdminController::class, 'login']);
Route::post('/loginadmin', [AdminController::class, 'connect']);
Route::get('/logout', [AdminController::class, 'logout']);

Route::get('/ajoutertype', [TypeController::class, 'showType']);
Route::post('/sauvertype', [TypeController::class, 'sauvertype']);
Route::get('/types', [TypeController::class, 'tabType']);


Route::get('/ajoutreferentiel', [ReferentielController::class, 'showRef']);
Route::post('/sauverreferentiel', [ReferentielController::class, 'sauverreferentiel']);
Route::get('/referentiels', [ReferentielController::class, 'tabRef']);
Route::get('/edit_referentiel/{id}', [ReferentielController::class, 'editSelect']);
Route::post('/edit_referentiel/modifier', [ReferentielController::class, 'editer']);
Route::get('/supprimerref/{id}', [ReferentielController::class, 'supprimerRef']);
Route::get('/activer_ref/{id}', [ReferentielController::class, 'activer_ref']);



Route::get('/ajouterformation', [FormationController::class, 'ShowForm']);
Route::post('/sauverformation', [FormationController::class, 'sauverformation']);
Route::get('/formations', [FormationController::class, 'tabForm']);
Route::get('/edit_formation/{id}', [FormationController::class, 'editSelect']);
Route::post('/edit_formation/modifier', [FormationController::class, 'editer']);
Route::get('/supprimerform/{id}', [FormationController::class, 'supprimerForm']);
Route::get('/activer_form/{id}', [FormationController::class, 'activer_form']);



Route::get('/ajouterslider', [SliderController::class, 'ShowSlider']);
Route::post('/sauverslider', [SliderController::class, 'sauverslider']);
Route::get('/sliders', [SliderController::class, 'tabSlider']);

