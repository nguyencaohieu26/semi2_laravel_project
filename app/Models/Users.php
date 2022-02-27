<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'firstname',
        'lastname',
        'date_of_birth',
        'gender',
        'email',
        'avatar',
        'address',
        'phone'
    ];

    public function accounts(){
        return $this->belongsTo(Accounts::class);
    }
    public function scopegetbyid($query,$id){
        return $query->where('id','=',$id);
    }
    public function scopegetbyname($query,$name){
        return $query->where('lastname','like','%'.$name.'%');
    }
    public function scopegetbyemail($query,$email){
        return $query->where('email','like','%'.$email.'%');
    }
}
