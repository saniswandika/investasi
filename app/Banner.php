<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Banner extends Model
{
    use Sluggable;

    protected $primaryKey = 'Id';
    protected $table = 'banner';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Use 'user_id' as the foreign key
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'menu'
            ]
        ];
    }
}
