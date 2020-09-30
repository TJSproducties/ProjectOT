<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Book;

class Category extends Model
{
    protected $fillable = ['name'];
    public function book() {
        return $this->hasMany(Book::class);
    }

    public function Books()
    {
        return $this->hasMany(Book::class);
    }

}


