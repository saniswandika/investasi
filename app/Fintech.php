<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Fintech extends Model
{
    protected $table = 'fintech';
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_fintech'
            ]
        ];
    }
}
