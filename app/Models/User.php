<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function books(){
        return $this->belongsToMany(Book::class, 'orders', 'user_id', 'book_id');

    }


}
