<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function comments() {
//        return $this->hasMany("App\Comment");
        return $this->hasMany("App\Models\Comment");
    }

//    public function latest($column = 'created_at')
//    {
//        return $this->orderBy($column, 'desc');
//    }
}
