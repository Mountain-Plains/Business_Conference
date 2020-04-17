<?php

namespace App\Http\Controllers;
use App\schedule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Redirect;
use Illuminate\Http\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']= schedule::orderBy('EventDate', 'ASC')->get();
        return view('Schedule.index', $data);
    }
    public function list()
    {
        $data['data']= DB::table('schedules')->get();
        return view('admin.Schedule.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Day'=>'required',
            'EventDate'=>'required',
            'EventStartTime'=>'required',
            'EventEndTime'=>'required',
            'description'=>'required',

        ]);

        $schedule= new Schedule();
        $schedule->Day= $request['Day'];
        $schedule->EventDate= Carbon::parse($request['EventDate']);
        $schedule->EventStartTime=Carbon::parse( $request['EventStartTime']);
        $schedule->EventEndTime= Carbon::parse($request['EventEndTime']);
        $schedule->description= $request['description'];
        $newSchedule= array("Day"=>$schedule->Day,"EventDate"=>$schedule->EventDate, "EventStartTime"=>$schedule->EventStartTime,"EventEndTime"=>$schedule->EventEndTime,"description"=>$schedule->description);
        $created= DB::table('schedules')->insert($newSchedule);
        if ($created){
            return redirect()->action('ScheduleController@list')->with('message','Created schedule Successfully!');
        }
        else{
            return 'Not Sucessful';
        }
        $schedule->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule=schedule::find($id);
        return view('admin.Schedule.Edit', compact('schedule', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_schedule= schedule::find($id);
       $request->validate([
        'Day'=>'required',
        'EventDate'=>'required',
        'EventStartTime'=>'required',
        'EventEndTime'=>'required',
        'description'=>'required',

    ]);
        $update_schedule->Day=$request->get('Day');
        $update_schedule->EventDate=$request->get('EventDate');
        $update_schedule->EventStartTime=$request->get('EventStartTime');
        $update_schedule->EventEndTime=$request->get('EventEndTime');
        $update_schedule->description=$request->get('description');
        $update_schedule->save();
        return redirect()->action('ScheduleController@list')->with('message','Update schedule Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete= schedule::findorFail($id);
        $delete->delete();
        return redirect()->action('ScheduleController@list')->with('message','Deleted schedule Successfully!');
    }
}
