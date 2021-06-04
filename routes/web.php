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
//contact
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact/envoyer', 'ContactController@envoyer')->name('contact.envoyer');
// journal start

Route::get('actualite', 'JournalController@index')->name('journal.index');
Route::get('actualite/{id}', 'JournalController@detail')->name('journal.detail');

Route::post('journal/commentaire', 'JournalController@comment')->name('journal.comment');

// journal close
Route::get('/', function () {
    return view('home.index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
