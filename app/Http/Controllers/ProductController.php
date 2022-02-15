<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductStatus;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        if(isset($request->name)){
//            echo 'in';
//        }
//        if(isset($request->id)){
//            echo 'in';
//        }
//        if(isset($request->status)){
//            echo 'in';
//        }
//        if(isset($request->price)){
//            echo 'in';
//        }
//        if(isset($request->artist)){
//            echo 'in';
//        }
//        if(isset($request->size)){
//            echo 'in';
//        }

        return Product::paginate(10);
    }

    public function products_field_filter(){
        $categories = Category::all();
        $artists = Artist::all();
        return view('main_public.products',compact('categories','artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists        = Artist::all();
        $product_status = ProductStatus::all();
        $categories     = Category::all();
        return view('admin.products.create',compact('artists','product_status','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "categories"            => "required",
            "description"           => "required",
            "name"                  => "required|unique:products,name",
            "size"                  => "required",
            "product_artist"        => "required",
            "product_status"        => "required",
            "price"                 => "gt:1",
            "image"                 => "bail|required",
            "product_date_start"    =>[
                "after:now"
            ],
            "product_date_end"      =>[
                "after:product_date-start"
            ]
        ]);
        //
        $newImageName = time().'-'.$request->name.'.'.$request->image->extension();

        $request->image->move(public_path('images_store/products'),$newImageName);

        $product = new Product();
        $product->name          = $request->name;
        $product->description   = $request->description;
        $product->size          = $request->size;
        $product->image         = $newImageName;
        $product->status_id     = $request->product_status;
        $product->artist_id     = $request->product_artist;
        $product->start_price   = $request->price;
        $product->date_start    = $request->product_date_start;
        $product->date_end      = $request->product_date_end;

        $product->save();

        foreach ($request->categories as $cate){
            $product_category = new ProductCategory;
            $product_category->product_id = $product->id;
            $product_category->category_id = $cate;
            $product_category->save();
        }
        return redirect()->route('admin-products')->with('create-product','Create product successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return 'hello';
    }
}
