<?php

namespace App;

use Jenssegers\Mongodb\Model;
use App\Lesson;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function lessons()
    {
        return $this->embedsMany(Lesson::class);
    }
}
