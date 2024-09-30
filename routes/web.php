<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PelangganController;
use App\Models\Pelanggan;
use App\Models\Pembelian;
use Illuminate\Routing\Route as RoutingRoute;
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

    return view('home',[
        'title'=> "home"
    ]);
});
Route::get('/items', function () {
    return view("items",[
        'title' => "items"
    ]);
});
Route::get('/about', function () {
    return view("about",[
        'title' => "About Us"
    ]);
});
Route::get('/developer', function () {
    return view("developer",[
        'title' => "Developer"
    ]);
});
Route::get('/', [ItemController::class, 'index']);
Route::get('/items/plus/{param}', [ItemController::class, 'plus']);
// Route::get("/loop",[ItemController::class,'gg']);
Route::get('/loop', function () {
    return view("teslopp",[
        "pelanggan" => Pelanggan::with(['pembelian'])->get(),
        "pembelian"=> Pembelian::with(['pelanggan'])->get(),
        "title" => "Testing loop"
    ]);
})->name('loop');
Route::get('/crude', function () {
    return view("teslopp",[
        "pelanggan" => Pelanggan::with(['pembelian'])->get(),
        "pembelian"=> Pembelian::with(['pelanggan'])->get(),
        "title" => "CRUD"
    ]);

});

Route::get('/Pelanggan/create',[PelangganController::class,"create"])->name('Pelanggan.create');

Route::post('/Pelanggan/insert',[PelangganController::class,'insert'])->name('Pelanggan.insert');
Route::get('/Pelanggan/update',[PelangganController::class,'toUpdate'])->name('Pelanggan.update');
Route::post('/Pelanggan/update',[PelangganController::class,'kirim'])->name('Pelanggan.update');
