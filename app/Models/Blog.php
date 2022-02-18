<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'title',
        'content_post',
        'image',
        'author',
        'tag'
    ];

    public function scopegetbyid($query,$id){
        $query->where('id','=',$id);
    }
    public function scopegetbytitle($query,$title){
        $query->where('title','like','%'.$title.'%');
    }
    public function scopegetbystatus($query,$status){
        $query->where('status','=',$status);
    }
    public function scopegetbydatestart($query,$date){
        $query->where('created_at','>=',$date);
    }
    public function scopegetbydateend($query,$date){
        $query->where('created_at','<=',$date);
    }
}
