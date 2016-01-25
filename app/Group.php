<?php

namespace App;

use Jenssegers\Mongodb\Model;
use App\Course;

class Group extends Model
{
    protected $fillable = [
        'name',
    ];

    public function courses()
    {
        return $this->embedsMany(Course::class);
    }
}
