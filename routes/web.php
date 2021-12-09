<?php

use App\Http\Controllers\HomeController;
use App\Mail\ContactoMaileble;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

route::get('/', [HomeController::class, 'index'])->name('home');

route::get('/trabajos', [HomeController::class, 'about'])->name('about');

route::get('/contacto', [HomeController::class, 'contact'])->name('contact');

route::post('/contacto', [HomeController::class, 'mensaje'])->name('mensaje');

route::get('mensaje', function () {
    $correo = new ContactoMaileble;
    Mail::to('webtensooh@tensooh.com')->send($correo);

    return "mensaje enviado";

});

Auth::routes();
