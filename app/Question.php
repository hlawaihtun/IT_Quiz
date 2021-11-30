<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
    	 'question_name', 'categorylevel_id','answer1', 'answer2', 'answer3', 'rightanswer',
    ];



    public function category($value='')
    {
    	return $this->belongsTo('App\Category', 'category_level');
    }

}
