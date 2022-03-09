<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail(Request $request){

        $details = [
           'name'         => $request->name,
           'product_name' => $request->product_name,
           'current_price'=> $request->current_price,
        ];
        \Mail::to($request->email)->send(new NotifyMail($details));
        return "Send email successfully!";
    }
}
