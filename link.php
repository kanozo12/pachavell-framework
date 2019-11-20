<?php
use src\App\Route;

// index page
Route::GET("/", "MainController@index");

Route::init();
?>