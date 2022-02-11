<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account_Deposit extends Model
{
    use HasFactory;
    protected $fillable=[
        'account_id',
        'product_id',
        'deposit_amount',
    ];
}
