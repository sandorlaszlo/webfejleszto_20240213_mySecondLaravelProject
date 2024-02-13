<?php

use App\Http\Controllers\PersonController;
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

// $route = new Route();  //példányosítás
// $route->get(); //meghívjuk az osztály egy metódusát
// Route::get(); //meghívjuk az osztály a get() statikus metódusát

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barmi', function () {
    $message = "Hello world";
    return $message;
});

Route::post('/barmi', function () { return "Hello barmi"; });

Route::get('/tombok', function () {
    $gyumolcsok = ['alma', 'körte', 'narancs'];
    // return $gyumolcsok;
    return $gyumolcsok[0];
});

Route::get('/asszociativtombok', function () {
    $gyumolcsok = [
        "alma" => 10,
        "körte" => 20,
        "narancs" => 30,
    ];
    //return $gyumolcsok;
    return $gyumolcsok["alma"];
});

/*
CRUD - Create, Read, Update, Delete
Read - GET - Route::get()
Create - POST - Route::post()
Update - PUT/PATCH - Route::put() vagy Route::patch()
Delete - DELETE - Route::delete()
*/

Route::get('/emberek', [PersonController::class, 'index']);
