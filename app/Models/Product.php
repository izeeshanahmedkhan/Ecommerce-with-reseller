<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories(){

        return $this->belongsToMany(Category::class);
    }

    public function batches(){

        return $this->belongsToMany(Batch::class);
    }

    public function sizes(){

        return $this->belongsToMany(Size::class);
    }

    public function colours(){

        return $this->belongsToMany(Colour::class);
    }

}
