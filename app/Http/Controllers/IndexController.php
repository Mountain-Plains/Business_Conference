<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['homeData']= DB::table('homes')->get();
	$data['sponsorData']= DB::table('sponsors')->get();
	$data['ticketData']= DB::table('tickets')->get();
	$data['scheduleData']= DB::table('schedules')->get();

        return view('Index.index', $data);
    }
    
}
