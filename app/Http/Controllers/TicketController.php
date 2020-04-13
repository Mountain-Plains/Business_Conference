<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $data['data']= DB::table('tickets')->get();
        return view('Ticket.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ticket.create');
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
            'URL'=>'required',
        ]);
        $Ticket= new Ticket();
        $Ticket->URL= $request['URL'];
        $newticket= array("URL"=>$Ticket->URL);
        $created= DB::table('tickets')->insert($newticket);
        if ($created){
            return "Sucessful";
        }
        else{
            return 'Not Sucessful';
        }
        $Ticket->save();

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
        $Ticket=Ticket::find($id);
        return view('Ticket.Edit', compact('Ticket', 'id'));
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
        $update_Ticket= Ticket::find($id);
        $request->validate([
            'URL'=>'required',

        ]);
        $update_Ticket->URL=$request->get('URL');
        $update_Ticket->save();

        return redirect()->action('TicketController@index')->with('message','Update ticket Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
