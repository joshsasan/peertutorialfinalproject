<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Percussion extends Model
{
    use HasFactory;
    protected $fillable = [
       'brand',
       'model',
       'description',
       'price',

    ];
}
