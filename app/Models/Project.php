<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- MAKE SURE THIS IS HERE
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'image_path'];
}