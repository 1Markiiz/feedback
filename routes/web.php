<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form-recieve', function () {
     return view('form',["name" => $_GET['name'],
      "feedback" => $_GET['feedback']]);

});