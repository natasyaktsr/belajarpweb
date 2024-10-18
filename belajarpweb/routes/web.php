<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('landing'); 
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login'); // View untuk halaman login
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Logika autentikasi login
})->name('login');



Route::get("/home", function () {
    $contacts = [];
    $faker = Faker::create();
    for( $i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'name'=> $faker->name,
            'email'=> $faker->unique()->safeEmail,
            'phone'=> $faker->phoneNumber,
            
        ];
    };
        
    return view("homepage", ['contacts' => $contacts]);
});
