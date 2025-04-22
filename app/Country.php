<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'country_code';

    public $incrementing = false;

    protected $table = 'countries';

    public $timestamps = false;

}
