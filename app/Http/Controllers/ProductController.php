<?php

namespace App\Http\Controllers;

use App\Models\AccountDeposit;
use App\Models\Accounts;
use App\Models\Artist;
use App\Models\Bids;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductStatus;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /** Display a listing of the resource. */
    public function index(Request $request)
    {
        $query = Product::with(['categories','bids', 'artists', 'product_status'])->where('deleted_at', '=', null);
        if (isset($request->name)) {
            $query = $query->getbyname($request->name);
        }
        if (isset($request->id)) {
            $query = $query->getbyid($request->id);
        }
        if (isset($request->category)) {
            if(is_array($request->category)){
                $query = $query->getbylistcategory($request->category);
            }else{
                $query = $query->getbycategory($request->category);
            }
        }
        if (isset($request->status)) {
            if(is_array($request->status)){
                $query = $query->getliststatus($request->status);
            }else{
                $query = $query->getbystatus($request->status);
            }
        }
        if(isset($request->sortType)){
            switch ($request->sortType){
                case 0:
                    $query = $query->orderBy('start_price','DESC');
                    break;
                case 1:
                    $query = $query->orderBy('start_price','ASC');
                    break;
                case 2:
                    $query = $query->orderBy('name','ASC');
                    break;
                case 3:
                    $query = $query->orderBy('name','DESC');
                    break;
                default: echo 'error';
            }
        }
        if (isset($request->artist)) {
            if(is_array($request->artist)){
                $query = $query->getbylistartist($request->artist);
            }else{
                $query = $query->getbyartist($request->artist);
            }
        }
        if(isset($request->priceMin) && isset($request->priceMax)){
            $query = $query->where('start_price','>=',$request->priceMin)->where('start_price','<=',$request->priceMax);
        }
        return $query->paginate(10);
    }

    public function products_field_filter(Request $request)
    {
        $categories = Category::all();
        $artists = Artist::all();
        $categoryID = $request->categoryID;
        $productStatus = ProductStatus::all();
        return view('main_public.products', compact('categories', 'artists', 'categoryID','productStatus'));
    }

    public function search_product_main_nav(Request $request){
        $query = Product::with(['artists', 'product_status'])->where('deleted_at','=',null);
        if(isset($request->title)){
            return $query->getbyname($request->title)->get();
        }else{
            return [];
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();
        $product_status = ProductStatus::all();
        $sizes = Size::where('status','=',1)->get();
        $categories = Category::all();
        return view('admin.products.create', compact('artists', 'product_status', 'categories','sizes'));
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
            "size" => "required|numeric",
            "product_artist" => "required",
            "product_status" => "required",
            "price" => "bail|gt:1|numeric",
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
        $product->size_id = $request->size;
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
        return Product::with(['categories', 'artists', 'product_status','sizes'])->where('id', $id)->first();
        //
    }

    public function showDetailProductPage($id)
    {
        $product = Product::with(['categories', 'artists', 'product_status','sizes'])->where('id', $id)->first();
        $relatedProduct = Product::where('artist_id','=',$product->artists->id)
            ->where('deleted_at','=',null)
            ->where('status_id','=',1)
            ->limit(4)->get();
        return view('main_public.product-detail',compact('product','relatedProduct'));
    }

    public function getCurrentPrice(Request $request){
        return Product::where('id','=',$request->id)->get();
    }

    public function bidProduct(Request $request){
        $bidItem = array(
           "account_id"=> $request->account_id,
            "product_id"=>$request->product_id,
            "bid" =>$request->bid,
        );

        if(!$this->createDeposit($bidItem)){
            return $result = array(
                "status" => 0,
                "message"=>"Balance is not enough to deposit!",
            );
        };
        $isValidTimeBid = $this->checkCurrentBid($bidItem);
        if($isValidTimeBid){
            $bid = new Bids();
            $bid->account_id    = $request->account_id;
            $bid->product_id    = $request->product_id;
            $bid->amount_of_bid = $request->bid;
            $bid->save();

            //
            $product = Product::find($request->product_id);
            $product->current_price = $request->bid;
            $product->save();
            return $result = array(
                "status" => 1,
                "message"=>"Bidding successfully! You can bidding after 15 minutes",
            );
        }else{
            return $result = array(
              "status" => 0,
              "message" => "Please continues bidding in 15 minutes",
            );
        }
    }

    public function createDeposit($bidItem){
        $depositExist = AccountDeposit::where('account_id','=',$bidItem['account_id'])->where('product_id','=',$bidItem['product_id'])->get();
        $balance = Accounts::where('id','=',$bidItem['account_id'])->get();
        $depositCount = $depositExist->count();
        if($depositCount == 0){
            $amountDeposit = floatval($bidItem['bid']) * 0.2;
            if(($balance[0]->balance - $amountDeposit) > 0 ){
                $bidAccountDeposit = new AccountDeposit();
                $bidAccountDeposit->account_id     = $bidItem['account_id'];
                $bidAccountDeposit->product_id     = $bidItem['product_id'];
                $bidAccountDeposit->deposit_amount = $amountDeposit;
                $bidAccountDeposit->save();
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }
    public function checkCurrentBid($bidItem){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $bid = Bids::where('account_id','=',$bidItem['account_id'])->where('product_id','=',$bidItem['product_id'])->get()->last();
        if(isset($bid)){
            $timeValidBid =date_create($bid->created_at)->format('Y-m-d H:i:s');//current time bid + 15 minutes
            $dateNow = date("Y-m-d H:i:s");
            $newTime = date("Y-m-d H:i:s",strtotime("+15 minutes", strtotime($timeValidBid)));
            if(strtotime($dateNow) >= strtotime($newTime)){
                return true;
            }else{ return false;}
        }
        return  true;
    }
    /** Show the form for editing the specified resource. */
    public function edit($id)
    {
        $product = Product::with(['categories', 'artists', 'product_status'])->where('id', $id)->first();
        $listArtists = Artist::where('status','=',1)->get();
        $sizes = Size::where('status','=',1)->get();
        $product_status = ProductStatus::all();
        $categories = Category::where('status','=',1)->get();
//        $product = Product::query()->where('id', $id)->first();

        return view('admin.products.edit', compact('product','listArtists','sizes','product_status','categories'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if(isset($request->image)){
            $validate = $request->validate([
                'name'  => ['bail','required', Rule::unique('products')->ignore($id)],
                'product_artist' => 'bail|required',
                'size'  => 'bail|required',
                'price' => 'bail|gt:1|numeric',
                'product_status' =>'bail|required',
                "product_date_start" => 'bail|required',
                "product_date_end" => [
                    "after:product_date-start"
                ],
                'categories' => 'bail|required',
                'description' => 'bail|required',
                'image' => 'bail|required|mimes:jpg,png,jpeg',
            ]);

            $newImageName = time().'-'.$request->name.'.'.$request->image->extension();

            $request->image->move(public_path('images_store/products'),$newImageName);

            $productFound =  Product::findOrFail($id);
            $productFound->name         = $request->name;
            $productFound->description  = $request->description;
            $productFound->size_id      = $request->size;
            $productFound->image        = $newImageName;
            $productFound->status_id    = $request->product_status;
            $productFound->artist_id    = $request->product_artist;
            $productFound->start_price  = $request->price;
            $productFound->date_start   = $request->product_date_start;
            $productFound->date_end     = $request->product_date_end;
            $productFound->save();
            ProductCategory::where('product_id',$id)->delete();

            foreach ($request->categories as $cate) {
                $product_category = new ProductCategory;
                $product_category->product_id = $id;
                $product_category->category_id = $cate;
                $product_category->save();
            }

            return redirect()->route('admin-products')->with('edit-product','Edit product successfully');
        }else{
            $validate = $request->validate([
                'name'  => ['bail','required', Rule::unique('products')->ignore($id)],
                'product_artist' => 'bail|required',
                'size'  => 'bail|required',
                'price' => 'bail|gt:1|numeric',
                'product_status' =>'bail|required',
                "product_date_start" => 'bail|required',
                "product_date_end" => [
                    "after:product_date-start"
                ],
                'categories' => 'bail|required',
                'description' => 'bail|required',
            ]);
            $productFound =  Product::findOrFail($id);
            $productFound->name         = $request->name;
            $productFound->description  = $request->description;
            $productFound->size_id      = $request->size;
            $productFound->status_id    = $request->product_status;
            $productFound->artist_id    = $request->product_artist;
            $productFound->start_price  = $request->price;
            $productFound->date_start   = $request->product_date_start;
            $productFound->date_end     = $request->product_date_end;

            $productFound->save();
            ProductCategory::where('product_id',$id)->delete();
            foreach ($request->categories as $cate) {
                $product_category = new ProductCategory;
                $product_category->product_id = $id;
                $product_category->category_id = $cate;
                $product_category->save();
            }
            return redirect()->route('admin-products')->with('edit-product','Edit product successfully');
        }

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
