<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Users extends User
{
    use HasFactory;
    public $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'token'
    ];
    protected $hidden = [];
    public $timestamps = false;
}
