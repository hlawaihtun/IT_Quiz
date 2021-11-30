<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use App\Level;


class LevelController extends Controller
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
        $levels = Level::all();
        return view('level.read',compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $levels = Level::all();
        return view('level.create',compact('levels'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            "name"=>'required|min:2|',
        ]);
        // end validate

        //create
        Level::create([
            "name" =>request('name'),
            
        ]);
        //end create

        //Redirect
        return redirect()->route('level.index');
        //end Redirect
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
         $level = Level::find($id);
        return view('level.edit',compact('level'));
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
        // validate
        $request->validate([
            "name"=>'required|min:2|',
        ]);
        // end validate
        
        //update
        $level = Level::find($id);
        $level->name = request('name');
        $level->save();
        //end update

        //return redirect
        return redirect()->route('level.index');

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
        $level = Level::Find($id);
        $level->delete();
        //Return Redirect
        return redirect()->route('level.index');
    }
}
