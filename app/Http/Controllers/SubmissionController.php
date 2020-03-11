<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Submission;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
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
            'paper' => 'required|mimes:doc,pdf,docx,zip|max:2048',
        ]);

        $Submission= new Submission;
        $Submission->title= $request['title'];
        $Submission->first_name= $request['firstName'];
        $Submission->last_name= $request['lastName'];
        $Submission->isReviewed= $request['isReviewed'];


//      $fileName= time().'.'.$request->paper->extension();
//        $old_path = $request->file('paper')->getPathName();
////        Storage::disk('local')->put($old_path, url('/storage/Paper'),$fileName);
//        Storage::disk('local')->put($old_path,'/Paper', $fileName);


//        $title= $request->input('title');
//        Validator::make($request->all(),['file'=>"required|string|paper|mimes:pdf,docx"])->validate();
        $extension= $request->file("paper")->getClientOriginalExtension();
        $stringPaperFormat=str_replace(" ", "", $request->input('title'));

        $fileName= $stringPaperFormat.".".$extension;
        $FileEnconded=  File::get($request->paper);
        Storage::disk('local')->put('public/Paper/'.$fileName, $FileEnconded);
        $newsubmission= array("title"=>$Submission->title, "first_name"=>$Submission->first_name, "last_name"=> $Submission->last_name,"isReviewed"=>$Submission->isReviewed, "paper"=>$fileName);
        $created= DB::table('submissions')->insert($newsubmission);
        if($created){
            return "Sucessful";
        }else{
            return "Not Sucessful";
        }
        $Submission->save();

    }
}
