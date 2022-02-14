<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ProductController;

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

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/products', [ProductController::class, 'products_field_filter']);

    Route::get('/error-page', function () {
        return view('main_public.error');
    })->name('error-page');

    Route::get('/', function () {
        return view('main_public.index');
    });
    Route::get('/contact', function () {
        return view('main_public.contact.index');
    });
    Route::get('/aboutus', function () {
        return view('main_public.aboutus.index');
    });
    Route::get('/blog', function () {
        return view('main_public.blog.index');
    });
    Route::get('/blog_page2', function () {
        return view('main_public.blog.page2_index');
    });
    Route::get('/blog_detail', function () {
        return view('main_public.blog.blog_detail1');
    });
