<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\AccountsController;
    use App\Http\Controllers\ArtistController;
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\BidsController;
    use App\Http\Controllers\AuctionResultController;
    use App\Models\Blog;
    use App\Models\Artist;
    use App\Models\ProductStatus;
    use App\Models\Category;
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

//|--------------------------------------------------------------------------
//Manage Route Public

Route::group(['prefix'=>'/'],function(){
    Route::get('', [HomeController::class, 'index'])->name('home-index');

    Route::get('contact',function (){
       return view('main_public.contact.index');
    })->name('contact-page');

    Route::get('aboutus',function (){
            return view('main_public.aboutus.index');
    })->name('about-page');

    Route::get('products',[ProductController::class,'products_field_filter'])->name('products-page');

    Route::get('products/{id}',[ProductController::class,'showDetailProductPage'])->name('product-detail-page');

    Route::get('error-page', function () {
        return view('main_public.error');
    })->name('error-page');

    Route::get('blogs', function () {
        $relatedBlog = Blog::where('deleted_at','=',null)->where('status','=',1)->skip(10)->limit(5)->get();
        return view('main_public.blog.index',compact('relatedBlog'));
    })->name('blog-page');

    Route::get('blogs/{id}',[BlogController::class,'getDetailBlogPage'])->name('blog-detail-page');

    Route::get('blogs-list',[BlogController::class,'getBlogsList']);

    //Route For Login
    Route::get('login',[AccountsController::class,'getLogin'])->name('login-account');

    Route::post('loginCheck',[AccountsController::class,'checkLogin'])->name('login-validate');

    Route::get('logout',[AccountsController::class,'getLogout'])->name('logout-account');

    Route::get('signup',[AccountsController::class,'getSignup'])->name('signup-account');

    //Route Api Public
    Route::get('search/products',[ProductController::class,'search_product_main_nav']);

    Route::get('getCurrentPrice',[ProductController::class,'getCurrentPrice']);

    Route::get('bidProduct',[ProductController::class,'bidProduct']);

    Route::get('userCart',[BidsController::class,'showBidUser']);

    Route::get('userProductBidPrice',[BidsController::class,'getUserBidProduct']);

    Route::get('userProductHistoryBid',[BidsController::class,'userBidHistoryProduct']);

    Route::get('getUsersAuction',[AccountsController::class,'getUsers']);
    //Route Api Admin

    Route::get('getHistoryBid',[BidsController::class,'getHistoryBid']);

    Route::get('getProductBid',[BidsController::class,'getProductBids']);

    Route::get('changeArtistStatus',[ArtistController::class,'changeStatus']);

    Route::get('changeCategoryStatus',[CategoryController::class,'changeStatus']);
});

//|--------------------------------------------------------------------------
//Manage Dashboard Route Admin
Route::group(['prefix' => 'admin','middleware' => ['CheckLogedOut','CheckRoleAdmin']],function(){
    Route::get('dashboard',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('admin.index',compact('user'));
    })->name('admin-home-index');

    Route::get('products',function (){
        $artists       = Artist::all();
        $productStatus = ProductStatus::all();
        $categories    = Category::all();
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('admin.products.index',compact('artists','productStatus','categories','user'));
    })->name('admin-products');

    Route::get('artists',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('admin.artists.index',compact('user'));
    })->name('admin-artists');

    Route::get('categories',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('admin.categories.index',compact('user'));
    })->name('admin-categories');

    Route::get('users',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('admin.accounts.index',compact('user'));
    })->name('admin-users');

    Route::get('blogs',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('admin.blogs.index',compact('user'));
    })->name('admin-blogs');

    Route::get('bids',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('admin.bids.index',compact('user'));
    })->name('admin-bids');

    Route::get('auctions-result',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('admin.auction_results.index',compact('user'));
    })->name('admin-auction-result');
});

//Route Api Admin

Route::resource('/products_resource',ProductController::class);

Route::resource('/accounts_resource',AccountsController::class);

Route::resource('/categories_resource',CategoryController::class);

Route::resource('/bids_resource',BidsController::class);

Route::resource('/artists_resource',ArtistController::class);

Route::resource('/blogs_resource',BlogController::class);

Route::resource('/auction-result_resource',AuctionResultController::class);

Route::resource('/users_resource',\App\Http\Controllers\UsersController::class);
//|--------------------------------------------------------------------------
//Manage Dashboard Route User

Route::group(['prefix' => 'user','middleware' => ['CheckLogedOut','CheckRoleUser']],function(){
    Route::get('/',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('user.index',compact('user'));
    })->name('user-home-index');

    Route::get('cart',function (){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        return view('user.cart',compact('user'));
    })->name('user-cart');

    Route::post('changePassword',[AccountsController::class,''])->name('user-change-password');
});

