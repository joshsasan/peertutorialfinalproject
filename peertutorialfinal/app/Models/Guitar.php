<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    use HasFactory;

    // public function guitar() {
    //     return $this->belongsTo(Guitar::class);
    // }

    // public function courses() {
    //     return $this->hasMany(Courses::class);
    // }

    protected $fillable = [
       'brand',
       'model',
       'description',
       'price',

    ];
}
