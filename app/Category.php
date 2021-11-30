<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Category
class Category extends Model
{
    //
    protected $fillable = [
        'name','profile',
    ];

    public function questions($value='')
    {
    	return $this->hasMany('App\Question');
    }

    public function levels($value='')
    {
    	return $this->belongsToMany('App\Level')	
                    ->withPivot('name')
                    ->withTimestamps();						
    }

}
// end Category
