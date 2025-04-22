<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $guarded = [];
    protected $fillable = ['id','inf_id','lat','long'];
}
