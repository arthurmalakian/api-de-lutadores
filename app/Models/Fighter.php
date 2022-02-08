<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    use HasFactory;

    protected $table = 'fighters';

    protected $fillable = [
        'name',
        'weight',
        'pow',
        'agi',
        'int',
        'most_liked_twitter_post',
    ];
}
