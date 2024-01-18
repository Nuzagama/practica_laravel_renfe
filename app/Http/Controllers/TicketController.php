<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\Train;
use DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();

        return view('tickets/index', ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticketTypes = TicketType::all();
        $trains = Train::all();
    
        return view('tickets/create', compact('ticketTypes', 'trains'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket -> date = $request -> input('fecha');
        $ticket -> price = $request -> input('precio');
        $ticket -> train_id = $request -> input('train_id');
        $ticket -> ticket_type_id = $request -> input('ticket_type_id');
        $ticket -> save();

        return redirect('tickets');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.show', ['ticket' => $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::find($id);
        $ticketTypes = TicketType::all();
        $trains = Train::all();
    
        return view('tickets/edit', compact('ticket', 'ticketTypes', 'trains'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);

        $ticket -> date = $request -> input('date');
        $ticket -> train_id = $request -> input('train_id');
        $ticket -> ticket_type_id = $request -> input('ticket_type_id');
        $ticket -> price = $request -> input('price');
        $ticket -> save();

        return redirect('tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tickets')->WHERE('id',"=",$id)->delete();
        return redirect('/tickets');
    }
}
