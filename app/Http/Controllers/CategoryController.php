<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use App\Level;

class CategoryController extends Controller
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
        $categories = Category::all();
       return view('category.read',compact('categories'));
        //return view('front.homepage',compact('categories'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
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
        $request->validate([
            "name" => 'required|min:2|max:20',
            "profile" => 'required|mimes:jpeg,png|max:250000',
            
    ]);
    if($request->hasfile('profile'))
        {
        $profile=$request->file('profile');
        $upload_path=public_path().'/img/';
        $name=$profile->getClientOriginalName();
        $profile->move($upload_path,$name);
        $path='/img/'.$name;
        }else
        {
            $path="";
        }

        Category::create([
            "name"=> request('name'),
            "profile"=> $path,
        ]);
       return redirect()->route('category.index');
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
        $category = Category::find($id);
        return view('category.detail',compact('category'));
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
        $category = Category::find($id);
        return view('category.edit',compact('category'));
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
            "name" => 'required|min:5|max:191',
            "profile" => 'mimes:jpeg,png',
    ]);

         if($request->hasfile('profile'))
            {
            $profile=$request->file('profile');
            $upload_path=public_path().'/img/';
            $name=$profile->getClientOriginalName();
            $profile->move($upload_path,$name);
            $path='/img/'.$name;
            }else
            {
                $path="";
            }

        //  update
        $category = Category::find($id);
        $category->name = request('name');
        $category->profile = $path;
        $category->save();

        //  return redirect
        return redirect()->route('category.index');
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
        $category = Category::find($id);
        $category->delete(); 
        return redirect()->route('category.index');
    }
}
