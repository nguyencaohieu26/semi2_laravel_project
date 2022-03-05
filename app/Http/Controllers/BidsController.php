<?php

namespace App\Http\Controllers;

use App\Models\Bids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BidsController extends Controller
{
    /** */public function index(){}

    public function showBidUser(Request $request){
        return DB::table('bids')
            ->join('products','bids.product_id','=','products.id')
            ->select(DB::raw('max(amount_of_bid) as max_bid,product_id,bid_status_id,bids.created_at,products.name,products.image,products.date_end,products.current_price'))
            ->where('account_id','=',$request->account)
            ->groupBy('product_id')
            ->paginate(10);
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
