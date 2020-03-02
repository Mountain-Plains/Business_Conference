<?php
namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(){
       return view('admin.login');
    }
}