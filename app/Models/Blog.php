<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- MAKE SURE THIS IS HERE
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'author', 'image', 'post_date'];
}