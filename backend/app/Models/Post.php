<?php

namespace App\Models;

use App\Enums\PostState;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $appends = [
        'path'
    ];

    protected $casts = [
        'state' => PostState::class
    ];

    public function path(): Attribute
    {
        return new Attribute(fn () => route('posts.show', $this));
        // return Attribute::get(fn () => route('posts.show', $this));
    }
}
