<?php

namespace App\Http\Controllers;

use App\City;
use App\Template;
use Carbon\Carbon;
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
    public function index()
    {
        $templates = Template::orderByRaw('ifnull(updated_at,created_at) desc')->paginate(11);
        $current_template = Template::orderByRaw('ifnull(applied_at,created_at) desc')->first();
        return view('template.index')->with(compact('templates','current_template'));
    }

    public function create()
    {
        return view('template.create');
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'headerColor' => 'required',
                'headerTextColor' => 'required',
                'backColor' => 'required',
                'primaryTextColor' => 'required',
            ]);

            $template = new Template;

            $template->name = $request['name'];
            $template->headerColor = $request['headerColor'];
            $template->headerTextColor = $request['headerTextColor'];
            $template->backColor = $request['backColor'];
            $template->primaryTextColor = $request['primaryTextColor'];

            $template->save();
            return redirect()->action('TemplateController@index')->withErrors('Template Saved Successfully');
        } catch (BadQueryStringException $exception) {
            return redirect()->withErrors($exception);
        }
    }

    public function edit($id)
    {
        $template = Template::find($id);
        return view('template.edit')->with('template', $template);
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'headerColor' => 'required',
                'headerTextColor' => 'required',
                'backColor' => 'required',
                'primaryTextColor' => 'required',
            ]);

            $template = Template::find($id);
            //dd($template);
            $template->fill($validated);

            $template->save();

            return redirect()->action('TemplateController@index')->withErrors('Template Updated Successfully');
        } catch (BadQueryStringException $exception) {
            return back()->withErrors($exception);
        }
    }

    public function destroy($id){
        $templates = Template::get();
        if(count($templates)<=1){
            return redirect()->action('TemplateController@index')->withErrors('Cannot delete! Atleast one template is required in database.');
        }
        $template = Template::find($id);
        $template->delete();

        $error_msg = "\"".$template->name."\" template deleted successfully.";

        return redirect()->action('TemplateController@index')->withErrors($error_msg);
    }

    public function applyTemplate($id){
        $template = Template::find($id);
        $template->applied_at = Carbon::now();
        $template->save();

        $msg = "\"".$template->name."\" template applied.";

        return redirect()->action('IndexController@index')->withErrors($msg);
    }
}
