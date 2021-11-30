<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use App\Level;
use Illuminate\Support\Facades\DB;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct($value='')
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        //
        $questions = Question::all();
        $category_level = DB::table('category_level', request('id'))->get();
        // var_dump($category_level);
        return view('question.read', compact('questions','category_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        
        $sql = 'SELECT * FROM category_level';

        $categorylevels = DB::select($sql);

       
        $questions = Question::all();


        return view('question.create', compact('categorylevels','questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validation
        // dd($request);
        $request->validate([
            "question_name" => 'required',
            "categorylevel"=>'required',
            "answer1" => 'required',
            "answer2" => 'required',
            "answer3" => 'required',
            "rightanswer" => 'required',
            
        ]);

            if(request('rightanswer')==1){
               $rightanswer=request('answer1');
            }else if(request('rightanswer')==2){
                $rightanswer=request('answer2');
            }else(request('rightanswer')==3){
                $rightanswer=request('answer3')
            };
        //Create
        // dd($request);
        Question::create([
            "question_name" =>request('question_name'),
            "categorylevel_id"=>request('categorylevel'),
            "answer1" =>request('answer1'),
            "answer2" =>request('answer2'),
            "answer3" =>request('answer3'),
            "rightanswer" => $rightanswer,
            
        ]);

        return redirect()->route('question.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $question = Question::find($id);
        return view('question.detail', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question = Question::find($id);
        return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            "question_name" => 'required',
            "answer1" => 'required',
            "answer2" => 'required',
            "answer3" => 'required',
            "rightanswer" => '',
            // "category_id"=>'',
            // "level_id"=>'',
        ]);

        if(request('rightanswer')==1){
               $rightanswer=request('answer1');
            }else if(request('rightanswer')==2){
                $rightanswer=request('answer2');
            }else(request('rightanswer')==3){
                $rightanswer=request('answer3')
            };
        //update

        $question = Question::find($id);
        $question->question_name = request('question_name');
        $question->answer1 = request('answer1');
        $question->answer2 = request('answer2');
        $question->answer3 = request('answer3');
        $question->rightanswer = $rightanswer;
        
        $question->save();
        //Redirect
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $question = Question::find($id);

        $question->delete();

        //Return Redirect

        return redirect()->route('question.index');
    }
}
