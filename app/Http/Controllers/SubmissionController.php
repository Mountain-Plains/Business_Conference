<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Submission;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Response;
use Illuminate\Http\File;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
{
    public function fileUpload()
    {
        return view('Upload');
    }


    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'isReviewed'=>'required',
            'paper' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $Submission= new Submission;
        $Submission->title= $request['title'];
        $Submission->first_name= $request['firstName'];
        $Submission->last_name= $request['lastName'];
        $Submission->isReviewed= $request['isReviewed'];


      $fileName= time().'.'.$request->paper->extension();
        $old_path = $request->file('paper')->getPathName();
        Storage::disk('local')->move($old_path, url('/storage/Paper'),$fileName);
        $Submission->save();
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);

    }
}
