<?php

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

//Home
Route::any('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

//Exercice
Route::group(['prefix' => 'exercice'], function(){
    Route::get('/', 'App\Http\Controllers\ExerciceController@index')->name('exercice.index');
    Route::post('/ajouter', 'App\Http\Controllers\ExerciceController@store')->name('exercice.ajouter');
    Route::post('/delete', 'App\Http\Controllers\ExerciceController@deleteExercice')->name('exercice.delete');
    Route::post('/get', 'App\Http\Controllers\ExerciceController@getExercice')->name('exercice.get');
});

//Routine
Route::group(['prefix' => 'routine'], function(){
    Route::get('/', 'App\Http\Controllers\RoutineController@index')->name('routine.index');
    Route::post('/ajouter', 'App\Http\Controllers\RoutineController@store')->name('routine.ajouter');
    Route::post('/delete', 'App\Http\Controllers\RoutineController@deleteRoutine')->name('routine.delete');
    Route::post('/get', 'App\Http\Controllers\RoutineController@getRoutine')->name('routine.get');
    Route::post('/get-form', 'App\Http\Controllers\RoutineController@getFormRoutine')->name('routine.get-form');
    Route::post('/save-routine', 'App\Http\Controllers\RoutineController@saveRoutine')->name('routine.save-routine');
});

//Seance
Route::group(['prefix' => 'seance'], function(){
    Route::get('/', 'App\Http\Controllers\SeanceController@index')->name('seance.index');
    Route::get('/recap/{volume}', 'App\Http\Controllers\SeanceController@recap')->name('seance.recap');
    Route::post('/start-seance', 'App\Http\Controllers\SeanceController@startSeance')->name('seance.start-seance');
    Route::post('/store-seance', 'App\Http\Controllers\SeanceController@storeSeance')->name('seance.store-seance');
});

//Mon compte
Route::group(['prefix' => 'mon-compte'], function(){
    Route::get('/', 'App\Http\Controllers\MonCompteController@index')->name('mon-compte.index');
    Route::post('/delete-pdp', 'App\Http\Controllers\MonCompteController@deletePdp')->name('mon-compte.delete-pdp');
    Route::post('/change-pdp', 'App\Http\Controllers\MonCompteController@changePdp')->name('mon-compte.change-pdp');
    Route::post('/change-infos', 'App\Http\Controllers\MonCompteController@changeInfos')->name('mon-compte.change-infos');
    Route::post('/change-pdp-custom', 'App\Http\Controllers\MonCompteController@changePdpCustom')->name('mon-compte.change-pdp-custom');
});

//ENtrainement
Route::group(['prefix' => 'plan-entrainement'], function(){
    Route::get('/', 'App\Http\Controllers\PlanEntrainementController@index')->name('plan-entrainement.index');
    Route::post('/assign-routine', 'App\Http\Controllers\PlanEntrainementController@assignRoutine')->name('plan-entrainement.assign-routine');
});

//Mes Amis
Route::group(['prefix' => 'mes-amis'], function(){
    Route::get('/', 'App\Http\Controllers\MesAmisController@index')->name('mes-amis.index');
    Route::post('/demande-ami', 'App\Http\Controllers\MesAmisController@demandeAmi')->name('mes-amis.demande-ami');
    Route::post('/accept-demande', 'App\Http\Controllers\MesAmisController@acceptDemande')->name('mes-amis.accept-demande');
    Route::post('/retirer-ami', 'App\Http\Controllers\MesAmisController@retirerAmi')->name('mes-amis.retirer-ami');
});

//Tableau Scores
Route::group(['prefix' => 'tableau-score'], function(){
    Route::get('/', 'App\Http\Controllers\TableauScoreController@index')->name('tableau-score.index');
});

//Auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
