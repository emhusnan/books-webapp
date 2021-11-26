<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ["title", "isbn13", "book_author_id"];
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}
