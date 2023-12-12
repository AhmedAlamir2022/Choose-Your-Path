<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universty extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'email',
        'short_desc',
        'long_desc',
        'contact',
        'address',
        'country',
        'city',
        'website',
        'image1',
        'image2',
        'facebook',
        'instgram',
        'twitter',
        'youtube',
    ];
}
