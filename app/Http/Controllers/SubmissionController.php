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
use App\Rules\Captcha;
class SubmissionController extends Controller
{
    public function fileUpload()
    {
        return view('Submission.Upload');
    }


    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'firstName'=>'required',
            'lastName'=>'required',
            'isReviewed'=>'required',
            'paper' => 'required|mimes:doc,pdf,docx,zip|max:2048',
            'g-recaptcha-response' => ['required', new Captcha()],
        ]);

        $Submission= new Submission;
        $Submission->title= $request['title'];
        $Submission->first_name= $request['firstName'];
        $Submission->last_name= $request['lastName'];
        $Submission->isReviewed= $request['isReviewed'];

        $extension= $request->file("paper")->getClientOriginalExtension();
        $stringPaperFormat=str_replace(" ", "", $request->input('title'));

        $fileName= $stringPaperFormat.".".$extension;
        $FileEnconded=  File::get($request->paper);
        Storage::disk('local')->put('public/Paper/'.$fileName, $FileEnconded);
        $newsubmission= array("title"=>$Submission->title, "first_name"=>$Submission->first_name, "last_name"=> $Submission->last_name,"isReviewed"=>$Submission->isReviewed, "paper"=>$fileName);
        $created= DB::table('submissions')->insert($newsubmission);
        if($created){
            return redirect()->action('IndexController@index')->with('success','Paper Submitted Successfully!');
        }else{
            return "Not Sucessful";
        }
        $Submission->save();

    }
}
