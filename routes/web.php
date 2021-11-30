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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('logout', 'Auth\LoginController@logout', function () {
    return view('login');
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


// <!-- Page Liste des utilisateurs -->

    Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function() {
        Route::resource('users', 'UsersController');
    });

// <!-- End: Page Liste des utilisateurs -->

// <!-- Profil utilisateur -->

    Route::namespace('Profile')->prefix('profile')->name('profile.')->group(function() {
        Route::resource('user', 'UsersProfileController');
    });

    Route::namespace('Profile')->prefix('editor')->name('editor.')->group(function() {
        Route::resource('user', 'EditorProfileController');
    });


// <!-- End: Profil utilisateur -->

// <!-- Character -->

Route::namespace('Character')->prefix('character')->name('character.')->group(function() {
    Route::resource('user', 'CharacterController');
});

// <!-- End: Character -->

// <!-- Les Chapitres -->

/*    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('introduction', 'EditableChapitreIntroductionController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('un', 'EditableChapitreUnController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('deux', 'EditableChapitreDeuxController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('trois', 'EditableChapitreTroisController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('quatre', 'EditableChapitreQuatreController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('cinq', 'EditableChapitreCinqController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('six', 'EditableChapitreSixController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('sept', 'EditableChapitreSeptController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('huit', 'EditableChapitreHuitController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('bestaire', 'EditableChapitreBestaireController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('reglesAvancees', 'EditableChapitreReglesAvanceesController');
    });

    Route::namespace('Editable\chapitre')->prefix('chapitre')->name('chapitre.')->group(function() {
        Route::resource('version3', 'EditableChapitreVersion3Controller');
    });
*/
// <!-- >End: Les Chapitres -->



// <!-- Chapitre 7 Les Cités -->

    Route::namespace('Editable')->prefix('editable')->name('ville.')->group(function() {
        Route::resource('city', 'EditableCityController');
    });

    Route::namespace('Editable\Chapitre\Sept')->prefix('chapitre/sept')->name('sept.')->group(function() {
        Route::resource('cites', 'EditableCitesController');
    });

    Route::namespace('Editable\Chapitre\Sept')->prefix('chapitre/sept')->name('sept.')->group(function() {
        Route::resource('commercialProduct', 'EditableCommercialProductController');
    });

    Route::namespace('Editable\Chapitre\Sept')->prefix('chapitre/sept')->name('sept.')->group(function() {
        Route::resource('offertDemand', 'EditableOffertDemandController');
    });

    Route::namespace('Editable\Chapitre\Sept')->prefix('chapitre/sept')->name('sept.')->group(function() {
        Route::resource('tax', 'EditableTaxController');
    });

    Route::namespace('Editable\Chapitre\Sept')->prefix('chapitre/sept')->name('sept.')->group(function() {
        Route::resource('timetravel', 'EditableTimeTravelController');
    });

// <!-- end: Chapitre 7 Les Cités -->






