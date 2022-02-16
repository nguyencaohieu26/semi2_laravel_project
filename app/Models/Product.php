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

//    protected $with = ['categories'];

    public function categories(){
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id','category_id');
    }

    public function artists(){
        return $this->hasOne(Artist::class,'id','artist_id');
    }

    public function product_status(){
        return $this->hasOne(ProductStatus::class,'id','status_id');
    }
}
