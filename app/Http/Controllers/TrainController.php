<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\TrainType;
use DB;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trenes = Train::all();

        return view('trenes/index', ['trenes' => $trenes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trenesTypes = TrainType::all();
        $trenes = Train::all();

        return view('trenes/create', compact('trenesTypes', 'trenes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trene = new Train;
        $trene -> name = $request -> input('name');
        $trene -> passengers = $request -> input('passengers');
        $trene -> year = $request -> input('year');
        $trene -> train_type_id = $request -> input('train_type_id');
        $trene -> save();

        return redirect('trenes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trene = Train::find($id);
        return view('trenes.show', ['trene' => $trene]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trene = Train::find($id);
        $trenesTypes = TrainType::all();
    
        return view('trenes/edit', compact('trene', 'trenesTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trene = Train::find($id);

        $trene -> name = $request -> input('name');
        $trene -> passengers = $request -> input('passengers');
        $trene -> year = $request -> input('year');
        $trene -> train_type_id = $request -> input('train_type_id');
        $trene -> save();

        return redirect('trenes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('trains')->WHERE('id',"=",$id)->delete();
        return redirect('/trenes');
    }
}
