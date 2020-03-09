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
                'headerColor'=>'nullable',
                'headerTextColor'=>'nullable',
                'footerColor'=>'nullable',
                'footerTextColor'=>'nullable',
                'backColor'=>'nullable',
                'logo'=>'nullable',
                'bgImage'=>'nullable'
            ]);

            $template = new Template;

            $template->name = $request['name'];
            $template->headerColor = $request['headerColor'];
            $template->headerTextColor = $request['headerTextColor'];
            $template->footerColor = $request['footerColor'];
            $template->footerTextColor = $request['footerTextColor'];
            $template->backColor = $request['backColor'];
            $template->logo = $request['logo'];
            $template->bgImage = $request['bgImage'];

            $template->save();
            return back()->withErrors('Template Saved Successfully');
        }
        catch (BadQueryStringException $exception){
            return back()->withErrors($exception);
        }
    }
}
