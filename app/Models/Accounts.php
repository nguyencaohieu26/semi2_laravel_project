<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Accounts extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    protected $guarded = ['id'];
//    protected $hidden = [
//        'password', 'remember_token',
//    ];

    protected $fillable =[
        'email',
        'password',
        'role'
    ];

    public function user(){
        return $this->hasOne(Users::class);
    }


}
