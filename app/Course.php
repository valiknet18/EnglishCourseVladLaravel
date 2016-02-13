<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Jenssegers\Mongodb\Model;
use App\Lesson;

class Course extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function lessons()
    {
        return $this->embedsMany(Lesson::class);
    }
}
