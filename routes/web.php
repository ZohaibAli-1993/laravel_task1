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
//home router
Route::get('/', function () {
    return view('pages.home',array('title' =>  'Home', 'content'=> 'This is home page.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '));
});
//home url bu using anonymous function by passing titile and contents
Route::get('/home',function(){   

    return view('pages.home',array('title' =>  'Home', 'content'=> 'This is home page.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  '));
});  
//about us url bu using anonymous function by passing titile and contents
Route::get('/about-us',function(){   

    return view('pages.page',array('title' =>  'About us', 'content'=> 'This is about  us page.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '));
});  
//contact us url bu using anonymous function by passing titile and contents
Route::get('/contact-us',function(){   

    return view('pages.page',array('title' =>  'Contact us', 'content'=> 'This is contact  page.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '));
});  
//birds url which redirect through show functions 
Route::get('/birds','BirdsController@show');   
//birds detail url which redirect through detail functions 
Route::get('/{id}','BirdsController@details'); 