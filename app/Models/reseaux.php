<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reseaux extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'utilisateur', 'url', 'icon'];
}


