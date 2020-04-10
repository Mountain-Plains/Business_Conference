<?php
namespace App\Http\Controllers;

use App\Template;
use http\Exception\BadQueryStringException;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;


class TemplateController extends Controller
{
    public function index(){
        return $this->create();
    }

    public function create(){
        return view('template.create');
    }

    public function store(Request $request){
        try {
            $this->validate($request, [
                'name' => 'required',
                'headerColor'=>'required',
                'headerTextColor'=>'required',
                'backColor'=>'required',
                'primaryTextColor'=>'required',
            ]);

            $template = new Template;

            $template->name = $request['name'];
            $template->headerColor = $request['headerColor'];
            $template->headerTextColor = $request['headerTextColor'];
            $template->backColor = $request['backColor'];
            $template->primaryTextColor = $request['primaryTextColor'];

            $template->save();
            return back()->withErrors('Template Saved Successfully');
        }
        catch (BadQueryStringException $exception){
            return back()->withErrors($exception);
        }
    }
}
