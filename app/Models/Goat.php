<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goat extends Model
{
    use HasFactory;
    protected $table='goat';
    protected $fillable=['name','price','image'];
}
