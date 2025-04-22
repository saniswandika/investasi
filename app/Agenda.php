<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Agenda extends Model
{
    use Sluggable;
    protected $primaryKey = 'Id';
    protected $table = 'agenda';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
{
    return $this->belongsTo(User::class, 'users_id');
}
}
