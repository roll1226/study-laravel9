<?php

namespace App\Models;

use App\Enums\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => Categories::class
    ];
}
