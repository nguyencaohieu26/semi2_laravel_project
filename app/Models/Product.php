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
        'size_id',
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

    public function sizes(){
        return $this->hasOne(Size::class,'id','size_id');
    }
    public function product_status(){
        return $this->hasOne(ProductStatus::class,'id','status_id');
    }
    public function bids(){
        return $this->hasMany(Bids::class);
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
    public function scopegetliststatus($query,$liststatus){
        $query->whereIn('status_id',$liststatus);
    }
    public function scopegetbylistartist($query,$listaritsts){
        $query->whereIn('artist_id',$listaritsts);
    }
    public function scopegetbylistcategory($query,$listcategory){
        $query->whereHas('categories', function ($q) use ($listcategory){
            $q->whereIn('category_id', $listcategory);
        });
    }
}
