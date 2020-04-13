<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']= DB::table('sponsors')->get();
        return view('Sponsor.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sponsor.create');
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
            'Name'=>'required',
            'Image' => 'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);
      $Sponsor= new Sponsor();
      $Sponsor->Name= $request['Name'];
      if($request->hasFile('Image')){
          $file=$request->file('Image');
          $extension= $file->getClientOriginalExtension();
          $stringImageFormat=str_replace(" ", "", $request->input('Name'));
          $fileName= $stringImageFormat.".".$extension;
          $file->move('Uploads/sponosr',$fileName);
          $Sponsor->Image=$fileName;

      }
        $Sponsor->save();
      return "Sucessful";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor=Sponsor::find($id);
        return view('Sponsor.Edit', compact('sponsor', 'id'));
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
        $update_Image= Sponsor::find($id);
        $request->validate([
            'Name'=>'required',
            'Image' => 'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);
        $update_Image->Name=$request->get('Name');
        if($request->hasFile('Image')){
            $file=$request->file('Image');
            $extension= $file->getClientOriginalExtension();
            $stringImageFormat=str_replace(" ", "", $request->input('Name'));
            $fileName= $stringImageFormat.".".$extension;
            if(file_exists('Uploads/sponosr'.$update_Image->Image)){
                unlink('Uploads/sponosr'.$update_Image->Image);
            }
            $file->move('Uploads/sponosr',$fileName);
            $update_Image->Image=$fileName;
        }


        $update_Image->save();
        return redirect()->action('SponsorController@index')->with('message','Update Sponsor Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete= Sponsor::findorFail($id);
        $delete->delete();
        return redirect()->action('SponsorController@index')->with('message','Deleted sponsor Successfully!');
    }
}
