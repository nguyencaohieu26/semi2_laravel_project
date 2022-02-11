<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bids extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
      'account_id',
      'product_id',
        'date_of_bid',
        'amount_of_bid'
    ];
}
