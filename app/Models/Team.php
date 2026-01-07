<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- MAKE SURE THIS IS HERE
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'role', 'image', 'bio'];
}