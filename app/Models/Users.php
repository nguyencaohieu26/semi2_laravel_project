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
        'address'
    ];

    public function accounts(){
        return $this->belongsTo(Accounts::class);
    }
}
