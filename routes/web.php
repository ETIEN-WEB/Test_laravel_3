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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('test', 'AdminController@test');
Route::post('subcategory', 'AdminController@subcategory');

Route::get('prodview', 'TestController@prodfunct');
Route::get('findProductName', 'TestController@findProductName');
Route::get('findPrice', 'TestController@findPrice');

/* upploader plusieurs images avec whashes
Route::get('image-view', 'ImageController@index');
Route::post('image-submit', 'ImageController@store'); */

// upploader plusieurs images avec whashes 2
Route::get('image-view', 'ImageController@index');
Route::post('image-submit', 'ImageController@store');

// upploader plusieurs images avec codecheif
Route::get('/dropzone','ImageController@index');
Route::post('/dropzone/store','ImageController@store')->name('dropzone.store');

// upploader plusieurs images avec codecheif
Route::get('/dropzon','ImageController@inde');
Route::post('/dropzon/store','ImageController@stora')->name('dropzon.stor');

// upploader plusieurs images sur swhotck
Route::get('addimagview', 'ImageController@addimagview');
Route::post('addimage_submit', 'ImageController@addimage_submit');

// upploader plusieurs images avec plugin jquery
Route::get('addimagjquer', 'ImageController@addimagjquer');
Route::post('addimage_jquer', 'ImageController@addimage_jquer');

// upploader plusieurs images avec plugin jquery en json
Route::get('jsonimagjquer', 'AdminController@jsonimagjquer');
Route::post('jsonimage_jquer', 'AdminController@jsonimage_jquer');
Route::get('jsonajquer', 'AdminController@jsonajquer');



// cat produit
Route::get('affiche', 'TestController@affiche');
Route::post('traite', 'TestController@traite');

// TRecherche
Route::get('search1', 'TestController@search1');
Route::get('search', 'TestController@search')->name('products.search');

// date de creation
Route::get('creation', 'TestController@creation');
Route::post('creation1', 'TestController@creation1');

// css media query
Route::get('mediaqu', 'TestController@mediaqu');

// validation de formulaire en ajax 
Route::get('ajax-form', 'FormController@index');
Route::post('save_*/*/*/', 'FormController@store');

// validation de formulaire en ajax
Route::get('add-new', 'StudentController@index');
Route::post('save', 'StudentController@save')->name('student.save');

// Navbar responsive
Route::get('navbarresp', 'StudentController@navbarresp');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::get('/admin/home', 'AdmirController@index');