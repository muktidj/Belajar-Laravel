<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    // Berfungsi untuk melakukan insert db banyak data di ticker, yg di define boleh diisi

    protected $guarded = ['id'];
    // Berfungsi untuk melakukan insert db banyak data di ticker, yg di define tidak boleh diisi, sisanya boleh
}
