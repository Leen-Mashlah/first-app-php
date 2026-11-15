<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/play', function () {
    function reverseArray(array $items): array
    {
        $basket = [];

        for ($i = count($items); $i > 0; $i--) {
            $basket[] = $items[$i - 1];
        }

        return $basket;
    }

    print_r(reverseArray([1, 2, 3, 4]));
});
