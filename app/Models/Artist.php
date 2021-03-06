<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'name',
        'date_of_birth',
        'description'
    ];

    public function products(){
        return $this->belongsToMany(Product::class,'products');
    }
    public function scopegetbyid($query,$id){
        $query->where('id','=',$id);
    }
    public function scopegetbyname($query,$name){
        $query->where('name','like','%'.$name.'%');
    }
    public function scopegetbystatus($query,$status){
        $query->where('status','=',$status);
    }
}
