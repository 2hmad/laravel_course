<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public $table = 'students';
    protected $fillable = [
        'id',
        'name',
        'phone',
        'school_id'
    ];
    protected $hidden = [];
    public $timestamps = false;
}
