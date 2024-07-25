<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\MerkController;

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

Route::get("/", function () {
    return view("welcome");
});

// route::get('/hello', function(){
//     echo 'Hello World';
// });

// route::get("hello/{name}", function($nama) {
//     echo "Hello Nama Saya {$nama}, saya sedang belajar laravel";
// });

route::get("/hello", [HelloWorldController::class, "index"]);
route::get("/hello/{name}", [HelloWorldController::class, "perkenalan"]);

//untuk menampilkan dan menghapus data
route::get("/merk", [MerkController::class, "index"]);
route::delete("/merk/{id}", [MerkController::class, "destroy"]);

//untuk menambah data
route::get("/merk/create", [MerkController::class, "create"])->name("merk.create");
route::post("/merk", [MerkController::class, "store"])->name("merk.store");

route::get("/merk/{id}", [MerkController::class, "edit"]);
route::put("/merk/{id}", [MerkController::class, "update"])->name("merk.update");