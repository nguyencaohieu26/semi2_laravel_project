<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::limit(7)->get();
        $trending_products  = Product::with(['artists'])->where('status_id','=',1)->where('deleted_at','=',null)->skip(1)->limit(5)->get();
        $upcoming_products  = Product::where('status_id','=',2)->where('deleted_at','=',null)->limit(8)->get();
        $blogs = Blog::where('status','=',1)->limit(4)->get();

        return view('main_public.index',compact('categories','trending_products','upcoming_products','blogs'));
    }

}
