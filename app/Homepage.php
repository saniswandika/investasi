<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Homepage extends Model
{
    use Sluggable;

    protected $primaryKey = 'Id';
    protected $table = 'homepage';

    protected $fillable = [
        'isBahasa', // Add the isBahasa property to the fillable array
        // other fillable properties...
    ];

    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // Define the getter method for the isBahasa property
    public function getIsBahasaAttribute()
    {
        return $this->attributes['isBahasa'];
    }
}
