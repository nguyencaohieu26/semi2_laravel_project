<?php

namespace App\Http\Controllers;

use App\Models\Bids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BidsController extends Controller
{
    /** */
    public function index(){}

    public function showBidUser(Request $request){
            $userCart = DB::table('bids')
                ->join('products','bids.product_id','=','products.id')
                ->select(DB::raw('max(amount_of_bid) as max_bid,product_id,bid_status_id,bids.created_at,products.name,products.image,products.current_price'))
                ->where('account_id','=',$request->account)
                ->groupBy('product_id')
                ->get();
        return $userCart;
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
