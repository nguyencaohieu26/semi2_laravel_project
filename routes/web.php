<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ProductController;


//|--------------------------------------------------------------------------
//Manage Route Public
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

Route::get('/', [HomeController::class, 'index'])->name('home-index');

Route::get('/contact',function (){
   return view('main_public.contact.index');
})->name('contact-page');

Route::get('/aboutus',function (){
        return view('main_public.aboutus.index');
})->name('about-page');

Route::get('/products',[ProductController::class,'products_field_filter'])->name('products-page');

Route::get('/error-page', function () {
    return view('main_public.error');
})->name('error-page');

Route::get('/blog', function () {
    return view('main_public.blog.index');
})->name('blog-page');

Route::get('/blog_page2', function () {
    return view('main_public.blog.page2_index');
});

Route::get('/blog_detail', function () {
    return view('main_public.blog.blog_detail1');
});
//|--------------------------------------------------------------------------
//Manage Dashboard Route Admin

Route::get('/admin/dashboard',function (){
   return view('admin.index');
})->name('admin-home-index');

Route::get('/admin/products',function (){
    return view('admin.products.index');
})->name('admin-products');

Route::get('/admin/artists',function (){
    return view('admin.artists.index');
})->name('admin-artists');

Route::get('/admin/categories',function (){
    return view('admin.categories.index');
})->name('admin-categories');

Route::get('/admin/users',function (){
    return view('admin.accounts.index');
})->name('admin-users');

Route::get('/admin/blogs',function (){
    return view('admin.blogs.index');
})->name('admin-blogs');

Route::get('/admin/bids',function (){
    return view('admin.bids.index');
})->name('admin-bids');

Route::get('/admin/auctions-result',function (){
    return view('admin.auction_results.index');
})->name('admin-auction-result');

Route::resource('/products_resource',ProductController::class);

Route::resource('accounts_resource',\App\Http\Controllers\AccountsController::class);

Route::resource('/categories_resource',\App\Http\Controllers\CategoryController::class);

Route::resource('/bids_resource',\App\Http\Controllers\BidsController::class);

Route::resource('/artists_resource',\App\Http\Controllers\ArtistController::class);

Route::resource('/blogs_resource',\App\Http\Controllers\BlogController::class);

Route::resource('/auction-result_resource',\App\Http\Controllers\AuctionResultController::class);

//|--------------------------------------------------------------------------
//Manage Dashboard Route User

Route::get('/user/dashboard',function (){
    return view('user.index');
})->name('user-home-index');

Route::get('/user/user-cart',function (){
    return view('user.cart');
})->name('user-cart');

