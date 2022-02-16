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
}
