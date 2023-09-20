<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    // IS NOT NECESSARY
    // LARAVEL AUTOMATICALLY LINKS 'Tweet' with 'tweets'
    protected $table = 'tweets';

    protected $guarded = [];

}
