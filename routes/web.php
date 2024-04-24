<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\Site\FaroController;

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

Route::get('login', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('elfaro', function () {
    return view('welcome');
});

Route::get('deportes', function () {
    return view('layouts.deportes');
});
/*Route::get('deportestest', function () {
return view('layouts.sports-news');
});*/
Route::get('negocios', function () {
    return view('layouts.negocios');
});

Route::get('documentales', function () {
    return view('layouts.documentales');
});

Route::get('politica', function () {
    return view('layouts.politica');
});

Route::get('saludBienestar', function () {
    return view('layouts.saludBienestar');
});

Route::get('ultimasNoticias', function () {
    return view('layouts.ultimasNoticias');
});

Route::get('enviaremail', function () {
    return view('noticias.enviaremail');
});

Route::get('app', function () {
    return view('layouts.app');
});



Auth::routes();

Route::resource('noticias', NoticiaController::class);

Route::resource('noticias', App\Http\Controllers\NoticiaController::class)->middleware('auth');

Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('deportes', [App\Http\Controllers\FaroController::class, 'index'])->name('index');

Route::get('negocios', [App\Http\Controllers\FaroController::class, 'negocios'])->name('negocios');

Route::get('documentales', [App\Http\Controllers\FaroController::class, 'documentales'])->name('documentales');

Route::get('politica', [App\Http\Controllers\FaroController::class, 'politica'])->name('politica');

Route::get('saludBienestar', [App\Http\Controllers\FaroController::class, 'saludBienestar'])->name('saludBienestar');

Route::get('ultimasNoticias', [App\Http\Controllers\FaroController::class, 'ultimasNoticias'])->name('ultimasNoticias');



// Route::post('publicar', [NoticiaController::class, 'store']);
// Route::get('noticias/create', [NoticiaController::class, 'create']);
// Route::get('noticias', [NoticiaController::class, 'index']);
// Route::get('noticias/{id}', [NoticiaController::class, 'show']);


//Route::get('/noticias', [App\Http\Controllers\HomeController::class, 'noticias'])->name('noticias');

// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::resource('/noticias', NoticiaController::class);
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
