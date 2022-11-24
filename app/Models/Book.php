<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table="books";
    protected $guarded=[];
//    protected $with=['publisher'];

    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'book_category');
    }
}
