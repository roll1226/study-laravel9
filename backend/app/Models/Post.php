<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $appends = [
        'nice_count',
        'category_name',
        'user_name'
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function niceCount(): Attribute
    {
        return Attribute::get(function () {
            return $this->nices->count();
        });
    }

    public function categoryName(): Attribute
    {
        return Attribute::get(function () {
            return $this->category->name;
        });
    }

    public function userName(): Attribute
    {
        return Attribute::get(function () {
            return $this->user->name;
        });
    }

    public function postImages(): Attribute
    {
        return Attribute::get(function () {
            return $this->images;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nices()
    {
        return $this->hasMany(Nice::class);
    }

    public function images()
    {
        return $this->hasMany(PostImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
