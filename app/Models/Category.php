<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'category_code',
        'image',
        'name',
    ];
    public function products(){
        return $this->belongsToMany(Product::class, 'product_categories', 'category_id','product_id');
    }
    public function scopegetbyid($query,$id){
        $query->where('id','=',$id);
    }
    public function scopegetbycategorycode($query,$code){
        $query->where('category_code','like','%'.$code.'%');
    }
    public function scopegetbystatus($query,$status){
        $query->where('status','=',$status);
    }
    public function scopegetbyname($query,$name){
        $query->where('name','like','%'.$name.'%');
    }
}
