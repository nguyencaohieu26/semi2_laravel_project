<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

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

    public function scopegetbyid($query,$id){
        $query->where('id','=',$id);
    }
    public function scopegetbyname($query,$name){
        $query->where('name','like','%'.$name.'%');
    }
    public function scopegetbycategory($query,$cate){
         $query->whereHas('categories', function ($q) use ($cate){
             $q->where('category_id', '=', $cate);
         });
    }
    public function scopegetbystatus($query,$status){
        $query->where('status_id','=',$status);
    }
    public function scopegetbyartist($query,$artist){
        $query->where('artist_id','=',$artist);
    }
}
