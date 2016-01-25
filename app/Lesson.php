<?php

namespace App;

use Jenssegers\Mongodb\Model;

class Lesson extends Model
{
    protected $fillable = [
        'name',
    ];
}
