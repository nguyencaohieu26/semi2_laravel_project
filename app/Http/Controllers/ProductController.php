<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::with(['categories', 'artists', 'product_status'])->where('deleted_at', '=', null);
        if (isset($request->name)) {
            $query = $query->getbyname($request->name);
        }
        if (isset($request->id)) {
            $query = $query->getbyid($request->id);
        }
        if (isset($request->category)) {
            $query = $query->getbycategory($request->category);
        }
        if (isset($request->status)) {
            $query = $query->getbystatus($request->status);
        }
        if (isset($request->artist)) {
            $query = $query->getbyartist($request->artist);
        }
//        if(isset($request->price)){
//            echo 'in';
//        }

        return $query->paginate(10);
    }

    public function products_field_filter(Request $request)
    {
        $categories = Category::all();
        $artists = Artist::all();
        $categoryID = $request->categoryID;

        return view('main_public.products', compact('categories', 'artists', 'categoryID'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();
        $product_status = ProductStatus::all();
        $categories = Category::all();
        return view('admin.products.create', compact('artists', 'product_status', 'categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "categories" => "required",
            "description" => "required",
            "name" => "required|unique:products,name",
            "size" => "required",
            "product_artist" => "required",
            "product_status" => "required",
            "price" => "gt:1",
            "image" => "bail|required",
            "product_date_start" => [
                "after:now"
            ],
            "product_date_end" => [
                "after:product_date-start"
            ]
        ]);
        //
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();

        $request->image->move(public_path('images_store/products'), $newImageName);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->image = $newImageName;
        $product->status_id = $request->product_status;
        $product->artist_id = $request->product_artist;
        $product->start_price = $request->price;
        $product->date_start = $request->product_date_start;
        $product->date_end = $request->product_date_end;

        $product->save();

        foreach ($request->categories as $cate) {
            $product_category = new ProductCategory;
            $product_category->product_id = $product->id;
            $product_category->category_id = $cate;
            $product_category->save();
        }
        return redirect()->route('admin-products')->with('create-product', 'Create product successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Product::with(['categories', 'artists', 'product_status'])->where('id', $id)->first();
        //
    }

    public function showDetailProductPage($id)
    {
        $product = Product::with(['categories', 'artists', 'product_status'])->where('id', $id)->first();
        return view('main_public.product-detail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::with(['categories', 'artists', 'product_status'])->where('id', $id)->first();
//        $product = Product::query()->where('id', $id)->first();

        return view('admin.products.edit', compact('product'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::findOrFail($id);
        $res = Product::destroy($id);
        DB::table('product_categories')->where('product_id', $id)->delete();
        return "Delete Product Successfully";
    }
}
