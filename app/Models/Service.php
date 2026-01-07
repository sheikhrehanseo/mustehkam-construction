<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- MAKE SURE THIS IS HERE
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'icon'];
}