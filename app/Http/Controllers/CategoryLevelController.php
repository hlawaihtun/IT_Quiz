<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Level;


use Illuminate\Http\Request;

class CategoryLevelController extends Controller
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
        
       
        $category_level = DB::table('category_level', request('name'))->get();

        // var_dump($category_level);

        $categories = Category::all();
        return view('categorylevel.read', compact('category_level','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();
        $categories = Category::all();
        return view('categorylevel.create', compact('levels', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        //dd($request);
        $request->validate([
            "name" => 'required',
            "categoryid"=>'required',
            "levelid"=>'required',   
        ]);

        $category = Category::find(request('categoryid'));

        $level_id = request('levelid');
        $name = request('name');

        $category->levels()->attach($level_id,['name'=>$name]);
        return redirect()->route('categorylevel.index');

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
    }
}
