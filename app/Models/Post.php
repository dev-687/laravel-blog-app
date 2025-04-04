<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = ['title', 'body','publication_date'];
    protected $dates = ['publication_date'];
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
