<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form', function () {
    //var_dump($_GET);
    echo  "<h1>" . "Sveiki" . "</h1>" . $_GET['name'] ;
    echo "<p>" . $_GET['feedback'] . "</p>";
});