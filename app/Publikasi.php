<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Publikasi extends Model
{
    use Sluggable;
    protected $primaryKey = 'pub_id';
    protected $table = 'publikasi';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
