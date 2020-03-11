<?php
namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DownloadController extends Controller
{
    public function download($file)
    {
	return response()->download('public/Papers/'.$file);
    }
}
