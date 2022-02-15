<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionResultProcess extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id',
        'auction_result_id',
        'status'
    ];
}
