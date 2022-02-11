<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'name',
        'size',
        'image',
        'artist_id',
        'start_price',
        'date_start',
        'status_id',
        'date_end',
        'description'
    ];
}
