<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainType;
use DB;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainTypes = TrainType::all();

        return view('trenes_tipos/index', ['trainTypes' => $trainTypes]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainTypes = TrainType::all();

        return view('trenes_tipos/create', ['trainTypes' => $trainTypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainType = new TrainType;
        $trainType -> type = $request -> input('type');
        $trainType -> save();

        return redirect('trenes_tipos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainType = TrainType::find($id);
        return view('trenes_tipos/show', ['trainType' => $trainType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trenes_tipo = TrainType::find($id);
        return view('trenes_tipos/edit', compact('trenes_tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainType = TrainType::find($id);

        $trainType -> type = $request -> input('type');
        $trainType -> save();

        return redirect('trenes_tipos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('train_types')->WHERE('id',"=",$id)->delete();
        return redirect('/trenes_tipos');
    }
}
