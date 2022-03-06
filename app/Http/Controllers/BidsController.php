<?php

namespace App\Http\Controllers;

use App\Models\Bids;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidsController extends Controller
{
    /** */public function index(){}

    public function showBidUser(Request $request){
        $query = DB::table('bids')
            ->join('products','bids.product_id','=','products.id')
            ->select(DB::raw('max(amount_of_bid) as max_bid,product_id,bid_status_id,bids.created_at,products.name,products.image,products.date_end,products.current_price'))
            ->where('account_id','=',$request->account)
            ->whereNotIn('bids.bid_status_id',[2,4]);

        if(isset($request->bidStatus)){
            $query = $query->where('bids.bid_status_id','=',$request->bidStatus);
        }
        if(isset($request->productName)){
            $query = $query->where('products.name','like','%'.$request->productName.'%');
        }
        if(isset($request->timeEndBid)){
                $typeTimeEnd = 'DESC';
            if($request->timeEndBid == 0){
                $typeTimeEnd = 'ASC';
            }
            $query = $query->orderBy('products.date_end',$typeTimeEnd);
        }
        if(isset($request->timeBid)){
            $typeTimeBid = 'ASC';
            if($request->timeBid == 0){
                $typeTimeBid = 'DESC';
            }
            $query = $query->orderBy('bids.created_at',$typeTimeBid);
        }
        if(isset($request->highestPrice)){
            $typeHighestPrice = 'DESC';
            if($request->highestPrice == 0){
                $typeHighestPrice = 'ASC';
            }
            $query = $query->orderBy('products.current_price',$typeHighestPrice);
        }
        $result = $query->groupBy('product_id')->paginate(10);
        return [
            "data"=>$result,
            "total"=>$result->total(),
            "perPage"=>$result->perPage(),
            "currentPage"=>$result->currentPage()
        ];
    }

    public function getProductBids(Request $request){
        $subCondition = [];
        $maxBids = DB::table('bids')
            ->select(DB::raw('max(bids.amount_of_bid) as max_bid,product_id'))
            ->groupBy('bids.product_id')->paginate(12);
        foreach ($maxBids->items() as $ele){
            $test = DB::table('bids')
                ->join('products','products.id','=','bids.product_id')
                ->join('accounts','accounts.id','=','bids.account_id')
                ->join('users','users.id','=','accounts.user_id')
                ->select('products.name','bids.amount_of_bid as max_bid','bids.product_id','users.email','bids.created_at','products.date_end','bids.bid_status_id')
                ->where('product_id','=',$ele->product_id)
                ->where('amount_of_bid','=',$ele->max_bid)
                ->get();
            $subCondition[] = $test[0];
        }
       return [
           "data" =>$subCondition,
           "total"=>$maxBids->total(),
            "perPage"=>$maxBids->perPage(),
            "currentPage"=>$maxBids->currentPage()
       ];
    }

    public function getUserBidProduct(Request $request){
        return DB::table('bids')
            ->select('amount_of_bid')
            ->where('account_id','=',$request->account)
            ->where('product_id','=',$request->productID)
            ->orderBy('created_at','desc')->first();
    }

    public function userBidHistoryProduct(Request $request){
        $history = DB::table('bids')
            ->select('amount_of_bid','created_at')
            ->where('account_id','=',$request->account)
            ->where('product_id','=',$request->product)
            ->orderBy('created_at','desc')->paginate(10);
        return [
            "data"=>$history,
            "total"=>$history->total(),
            "perPage"=>$history->perPage(),
            "currentPage"=>$history->currentPage()
        ];
    }

    public function getHistoryBid(Request $request){
        $query  = DB::table('bids')
            ->join('products','products.id','=','bids.product_id')
            ->join('accounts','bids.account_id','=','accounts.id')
            ->join('users','users.id','=','accounts.user_id')
            ->select(DB::raw('bids.amount_of_bid,bids.created_at,users.email'))
            ->where('bids.product_id','=',$request->product);
        if(isset($request->emailSearch)){
            $query = $query->where('users.email','like','%'.$request->emailSearch.'%');
        }
        $result =$query->orderBy('bids.created_at','DESC')->paginate(12);
        return [
            "data"=>$result,
            "total"=>$result->total(),
            "perPage"=>$result->perPage(),
            "currentPage"=>$result->currentPage()
        ];
    }

    public function checkOutProductBid(Request  $request){
        $user = \App\Models\Users::with(['accounts'])->where('id', Auth::user()->user_id)->first();
        $product = Product::findOrFail($request->productID);
//        if($product->status_id != 3){
//            return redirect()->route('user-cart')->with('error-pay','The Auction is not end! Can\'t not payment');
//        }
        return view('user.checkout',compact('user','product'));

    }
    /** */
    public function create(){}

    /***/
    public function store(Request $request){}

    /** */
    public function show(Bids $bids){}

    /** */
    public function edit(Bids $bids){}

    /** */
    public function update(Request $request, Bids $bids){}

    /** */
    public function destroy(Bids $bids){}
}
