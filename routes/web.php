<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //$user = ['name' => 'Marco', 'surname' => 'Bianchi'];
    // $data = [
    //     'user' => ['name' => 'Marco', 'surname' => 'Bianchi']
    // ];
    $saluto =['name'=>'Welcome'];

    return view('home', compact('saluto'));
});
Route::get('/contatti', function () {
    $contact =['name'=>'Contatti'];

    return view('contact', compact('contact'));
});
