<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use App\Models\AccountDeposit;
use App\Models\Bids;
use App\Models\Product;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $bid = Bids::findOrFail($request->bidID);
        $user = DB::table('users')
            ->join('accounts','accounts.user_id','=','users.id')
            ->select('users.firstname','users.lastname','users.email')
            ->where('accounts.id','=',$bid->account_id)->first();
        $accountDeposit = AccountDeposit::where('account_id','=',$bid->account_id)->where('product_id','=',$bid->product_id)->first();
        $maxBid = $request->maxBid - ($accountDeposit->deposit_amount);
        $product = Product::where('id','=',$bid->product_id)->first();
        $details = [
           'name'         => $user->firstname.' '.$user->lastname,
           'product_name' => $product->name,
           'current_price'=> $maxBid,
        ];
        \Mail::to($user->email)->send(new NotifyMail($details));
        return "Send email successfully!";
    }
}
