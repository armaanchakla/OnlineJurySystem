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

// Route::get('/', function () {
//     return view('index');
// });

//Route::get('/login','loginController@login');
//Route::get('/register','registerController@register');
//Route::get('/blog','blogController@blog');
//Route::get('/singleblog','singleblogController@singleblog');
//Route::get('/elements','elementsController@elements');


Route::get('/','homecontentController@homecontent');
Route::get('/about','aboutController@about');
Route::get('/contact','contactController@contact');
Route::get('/practicearea','practiceareaController@practicearea');
Route::get('/profile','profileController@profile');
Route::post('/profile','profileController@updateAvatar');

Auth::routes();

Route::get('/home','HomeController@index')->name('Home');

/*
	============================================================
							Case Routes
	============================================================
*/
			Route::get('/case/submit','caseController@caseSubmit');
			Route::post('/case/submit','caseController@caseSave');

Route::group(['middleware' => 'AuthenticateMiddleware'], function(){
		Route::prefix('case')->group(function(){
			Route::get('/show','caseController@caseShow');
			Route::get('/edit/{id}','caseController@caseEdit');
			Route::post('/edit','caseController@caseUpdate');
			Route::get('/delete/{id}','caseController@caseDelete');
	});

});



