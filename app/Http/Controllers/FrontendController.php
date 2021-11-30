<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;
use Illuminate\Support\Facades\DB;
use App\Level;

class FrontendController extends Controller
{
    //
    
     public function getCourses()
    {
    	$categories = Category::all();
       // return view('category.read',compact('categories'));
        return view('front.homepage',compact('categories'));
    }


    public function getquestions(Request $request)
    {
        $id = request('id');
        // dd($id);
        // $question = DB::table('Question', request('id'))->get();
        $questions = DB::table('questions')
            ->join('category_level', 'category_level.id', '=', 'questions.categorylevel_id')
            ->where('category_id', $id)
            ->get();
            dd($questions);
    }

    public function getlevels()
    {
        $levels = Level::all();
       // return view('category.read',compact('categories'));
        return view('level2',compact('levels'));
    }

}
