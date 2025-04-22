<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class WhyInvest extends Model
{
    //
    use Sluggable;
    protected $primaryKey = 'Id';
    protected $table = 'whyInvest';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
