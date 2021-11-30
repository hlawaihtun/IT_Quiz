<?php

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

// Welcome
Route::get('/welcome', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('template.dashboard');
});

// Temlpate
Route::get('/template', function () {
    return view('template');
})->name('template');


// Controller

//FrontEnd Start





// Route::get('/', function () {
//     return view('front.homepage');
// })->name('home');

// Route::get('/', 'FrontendController@getCourses');




// Route::group(['middleware'=>['role:user']],function(){

// Route::get('/frontlevel','FrontendController@getlevels');

// Route::get('/frontcourse', function(){
// 	return view('level');
// })->name('frontcourse');

// });






Route::get('/', 'FrontendController@getCourses');
//FrontEnd End

Route::group(['middleware'=>['role:user']],function(){

	Route::get('/frontlevel','FrontendController@getlevels');

	Route::post('/getquestion', 'FrontendController@getquestions')->name('getquestion');

	Route::get('/frontcourse', function(){
	return view('level');
})->name('frontcourse');
});



Route::group(['middleware'=>['role:admin']],function(){

	

// Category 
Route::resource('/category','CategoryController');
// End Category

//Level View
Route::resource('/level','LevelController');
//End Level View

// Categorylevel
Route::resource('/categorylevel','CategoryLevelController');
// End Categorylevel

// Question
Route::resource('/question', 'QuestionController');
//End Question

});


//Route::post('/login','Auth.LoginController')->name('login');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
