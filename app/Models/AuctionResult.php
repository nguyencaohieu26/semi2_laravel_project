<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionResult extends Model
{
    use HasFactory;
    protected $fillable =[
        'final_auction_price',
        'product_id',
        'account_id',
    ];
}
