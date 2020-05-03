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
    public function list()
    {
        $data['data']= DB::table('homes')->get();

        return view('admin.Home.List', $data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Home.Create');
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
            'description'=>'required',
            'Location'=>'required',
            'Time'=>'required',

        ]);

        $Home= new Home();
        $Home->description= $request['description'];
        $Home->Location= $request['Location'];
        $Home->Time= $request['Time'];

        $newHome= array("description"=>$Home->description, "Location"=>$Home->Location,"Time"=>$Home->Time);
        $created= DB::table('homes')->insert($newHome);
        if ($created){
            return redirect()->action('HomeController@list')->with('message','Created Home page content Successfully!');
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
        return view('admin.Home.Edit', compact('Home', 'id'));
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
            'description'=>'required',
            'Location'=>'required',
            'Time'=>'required',

        ]);
        $update_Home->description=$request->get('description');
        $update_Home->Location=$request->get('Location');
        $update_Home->Time=$request->get('Time');
        $update_Home->save();

        return redirect()->action('HomeController@list')->with('message','Update Home page content Successfully!');

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
