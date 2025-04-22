<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ContactUs extends Model
{
    use Sluggable;
    protected $primaryKey = 'Id';
    protected $table = 'contactus';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
