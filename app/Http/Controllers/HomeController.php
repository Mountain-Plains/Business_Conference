<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']= DB::table('homes')->get();

        return view('Home.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title'=>'required',
            'body'=>'required',

        ]);

        $Home= new Home();
        $Home->Title= $request['Title'];
        $Home->body= $request['body'];
        $newHome= array("Title"=>$Home->Title, "body"=>$Home->body);
        $created= DB::table('homes')->insert($newHome);
        if ($created){
            return "Sucessful";
        }
        else{
            return 'Not Sucessful';
        }
        $Home->save();
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
        $Home=Home::find($id);
        return view('Home.Edit', compact('Home', 'id'));
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
        $update_Home= Home::find($id);
        $request->validate([
            'Title'=>'required',
            'body'=>'required',

        ]);
        $update_Home->Title=$request->get('Title');
        $update_Home->body=$request->get('body');
        $update_Home->save();

        return redirect()->action('HomeController@index')->with('message','Update Products Successfully!');

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
