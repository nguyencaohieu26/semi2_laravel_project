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
        'amount_of_bid',
        'current-bid'
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
