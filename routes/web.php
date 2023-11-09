<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user.home');
});

Route::get('/index', function () {
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/blog-single', function () {
    return view('front.blog-single');
});

Route::get('/blog', function () {
    return view('front.blog');
});

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/gallery', function () {
    return view('front.gallery');
});


// Route::get('/login', function () {
//     return view('front.login');
// });

// Route::get('/main', function () {
//     return view('front.main');
// });

Route::get('/pricing', function () {
    return view('front.pricing');
});

Route::get('/services', function () {
    return view('front.services');
});

Route::get('/vet', function () {
    return view('front.vet');
});

// Route::get('/admin', function () {
//     return view('admin.admin');
// });


// Route::get('/logout', 'Auth\LoginController@logout');



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);


Route::get('/vet',[HomeController::class,'getItem'])->name('getItem');
