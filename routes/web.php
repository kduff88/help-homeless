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

Route::get('/', function () {
    $data['homePageImage'] = Cache::rememberForever('homePageImage', function() {
        return 'images/homeless-pic.jpg';
    });
    
    return view('welcome', $data);
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/our-team', function () {
    return view('our-team');
});

Route::get('/what-we-do', function () {
    return view('what-we-do');
});

Route::get('/who-we-work-with', function () {
    return view('who-we-work-with');
});

Route::get('/donating', function () {
    return view('donating');
});

Route::get('/fundraising', function () {
    return view('fundraising');
});

Route::get('/partnerships', function () {
    return view('partnerships');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/accommodation', function () {
    return view('accommodation');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
