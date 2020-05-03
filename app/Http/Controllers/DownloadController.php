<?php
namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;


use Illuminate\Support\Facades\DB;



class DownloadController extends Controller
{
    public function download($file)
    {
#	return response()->download('public/Papers/'.$file);
	return Storage::download('public/Paper/'.$file);
    }

    public function  list(){

        $data['data']= DB::table('submissions')->get();

        return view('admin.Paper.List', $data);
    }
}
