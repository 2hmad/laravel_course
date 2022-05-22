<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    public $table = 'schools';
    protected $fillable = [
        'id',
        'school',
    ];
    protected $hidden = [];
    public $timestamps = false;

    public function student()
    {
        return $this->hasMany(Students::class, 'school_id');
    }
}
