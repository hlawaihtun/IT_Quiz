<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    protected $fillable = [
        'name',
    ];


    public function categories($value='')
    {
    	return $this->belongsToMany('App\Category');
    }

}
