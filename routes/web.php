<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/play', function () {
    for ($i = 1; $i <= 15; $i++) {
        if ($i % 15 === 0) {
            echo 'FizzBuzz<br>';
        } else if ($i % 5 === 0) {
            echo 'Buzz<br>';
        } else if ($i % 3 === 0) {
            echo 'Fizz<br>';
        } else {
            echo $i . '<br>';
        }
    }
});
