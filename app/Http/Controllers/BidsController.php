<?php

namespace App\Http\Controllers;

use App\Models\AccountDeposit;
use App\Models\Accounts;
use App\Models\AuctionResult;
use App\Models\Bids;
use App\Models\Product;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidsController extends Controller
{
    /** */public function index(){}

    public function showBidUser(Request $request){
        $arr = [];
        $findBidUser = DB::table('bids')
            ->join('products','bids.product_id','=','products.id')
            ->select(DB::raw('max(amount_of_bid) as max_bid,bids.product_id'))
            ->where('account_id','=',$request->account);

        if(isset($request->bidStatus)){
            $findBidUser = $findBidUser->where('bids.bid_status_id','=',$request->bidStatus);
        }
        if(isset($request->productName)){
            $findBidUser = $findBidUser->where('products.name','like','%'.$request->productName.'%');
        }
        $findBidUser = $findBidUser->groupBy('product_id');
        if(isset($request->timeEndBid)){
                $typeTimeEnd = 'DESC';
            if($request->timeEndBid == 0){
                $typeTimeEnd = 'ASC';
            }
            $findBidUser = $findBidUser->orderBy('products.date_end',$typeTimeEnd);
        }
        if(isset($request->timeBid)){
            $typeTimeBid = 'asc';
            if($request->timeBid == 0){
                $typeTimeBid = 'desc';
            }
            $findBidUser = $findBidUser->orderBy('bids.created_at',$typeTimeBid);
        }
        if(isset($request->highestPrice)){
            $typeHighestPrice = 'DESC';
            if($request->highestPrice == 0){
                $typeHighestPrice = 'ASC';
            }
            $findBidUser = $findBidUser->orderBy('products.current_price',$typeHighestPrice);
        }
            $result = $findBidUser->paginate(10);
            foreach ($result->items() as $element){
                $test = DB::table('bids')
                    ->join('products','products.id','=','bids.product_id')
                    ->join('accounts','accounts.id','=','bids.account_id')
                    ->join('users','users.id','=','accounts.user_id')
                    ->select('products.name','bids.amount_of_bid as max_bid','bids.product_id','products.image','products.current_price','users.email','bids.created_at','products.date_end','bids.bid_status_id','bids.id')
                    ->where('bids.product_id','=',$element->product_id)
                    ->where('amount_of_bid','=',$element->max_bid)
                    ->get();
                $arr[] = $test[0];
            }
        return [
            "data"=>$arr,
            "total"=>$result->total(),
            "perPage"=>$result->perPage(),
            "currentPage"=>$result->currentPage()
        ];
    }

    public function getProductBids(Request $request){
        $subCondition = [];
        $maxBids = DB::table('bids')
            ->select(DB::raw('max(bids.amount_of_bid) as max_bid,product_id'))
            ->groupBy('bids.product_id')
            ->paginate(12);
        foreach ($maxBids->items() as $ele){
            $test = DB::table('bids')
                ->join('products','products.id','=','bids.product_id')
                ->join('accounts','accounts.id','=','bids.account_id')
                ->join('users','users.id','=','accounts.user_id')
                ->select('products.name','bids.amount_of_bid as max_bid','bids.product_id','users.email','bids.created_at','products.date_end','bids.bid_status_id','bids.id')
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
        $account = Accounts::where('user_id','=',$user->id)->first();
        $accountDeposit = AccountDeposit::where('product_id','=',$request->productID)
            ->where('account_id','=',$account->id)->first();
        $deposit = $accountDeposit->deposit_amount;
        if($product->status_id != 3){
            return redirect()->route('user-cart')->with('error-pay','The Auction is not end! Can\'t not payment');
        }
        return view('user.checkout',compact('user','product','deposit'));

    }

    public function checkOutAuction(Request $request){
        //validate info
        $validate = $request->validate([
            'email'         => 'bail|required|email',
            'firstname'     => 'bail|required',
            'lastname'      => 'bail|required',
            'date-delivery' => [
                'after: 6 day'
            ],
            'total-order'   => 'bail|required',
        ]);
        //change status bid -> success

        //create auction result
    }

    public function giveUpAuction(Request $request){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $product = Product::where('deleted_at','=',null)->where('id','=',$request->product)->get();
        //Time Auction End
        $timeBidStart   = date_create($product[0]->date_start)->format('Y-m-d H:i:s');
        $timeBidEnd     = date_create($product[0]->date_end)->format('Y-m-d H:i:s');
        $timeNow        = date("Y-m-d H:i:s");
        $diff1          = strtotime($timeBidEnd)  - strtotime($timeBidStart);
        $diff2          = strtotime($timeBidEnd)  - strtotime($timeNow);
        $dayPlus1       = round($diff1 / (60 * 60 * 24) / 2);
        $dayPlus2       = round($diff2 / (60 * 60 * 24));
        $highestBidProduct = Bids::where('deleted_at','=',null)->where('product_id','=',$request->product)->select(DB::raw('max(bids.amount_of_bid) as max_bid'))->get();
        $highestBidUser    = Bids::where('deleted_at','=',null)
            ->where('product_id','=',$request->product)
            ->where('amount_of_bid','=',$highestBidProduct[0]->max_bid)
            ->get();
        if($dayPlus1 >= $dayPlus2){
            //check isHighest Bidder -> lost deposit
            if($highestBidUser[0]->account_id === intval($request->account)){
                return [
                    "status"   => 1,
                    "message"  => "You are the highest bidder! If you want to giveup, you will lost the deposit"
                ];
            }
            //-> return deposit
            else{
                $this->returnDeposit(intval($request->account),$request->product);
                $this->changeStatusBid($request->account,$request->product,1);
                return [
                    "status" =>  2,
                    "message" => "You are successfully giveup bidding for ".$product[0]->name
                ];
            }
        }else{
            //lost deposit
            return [
                "status"   => 1,
                "message"  => "If you want to giveup before bidding end! You will lose the deposit"
            ];
        }
    }

    public function returnDeposit($accountID,$productID){
        $account = Accounts::where('deleted_at','=',null)->where('id','=',$accountID)->get();
        $depositAccountProduct = AccountDeposit::where("account_id",'=',$accountID)->where('product_id','=',$productID)->get();
        $deposit = $depositAccountProduct[0]->deposit_amount;
        $oldBalance = $account[0]->balance;
        $account->balance = $oldBalance + $deposit;
        $depositAccountProduct->delete();
    }
    public function paymentAuctionProduct($accountID,$productID){

    }

    public function changeStatusBid(Request $request){
        $bid = Bids::where('deleted_at','=',null)->where('id','=',$request->bidID)->get();
        $user = DB::table('users')
        ->join('accounts','accounts.user_id','=','users.id')
            ->where('accounts.id','=',$bid[0]->account_id)
            ->get();
        if($request->bidStatus == 3){
            $product= Product::findOrFail($request->productID);
            $product->status_id = 3;
            $product->save();
            $bid[0]->bid_status_id = 3;
            $bid[0]->save();
            return [
                "status" => 1,
                "message" =>"Send email confirm payment successes! For account: ".$user[0]->firstname.' '.$user[0]->lastname
            ];
        }else if($request->bidStatus == 2){
            $bid[0]->bid_status_id = 2;
            $bid[0]->save();
        }else{
            $bid[0]->bid_status_id = 4;
            $bid[0]->save();
        }
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
