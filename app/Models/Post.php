<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const DRAFTED = 1;
    const PUBLISHED = 2;

    protected $fillable = [
        'title',
        'description',
        'users_id',
        'status',
    ];
}
