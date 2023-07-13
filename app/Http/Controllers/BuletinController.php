<?php

namespace App\Http\Controllers;

use App\Models\Buletin;
use App\Http\Requests\StoreBuletinRequest;
use App\Http\Requests\UpdateBuletinRequest;

class BuletinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all the sharks
        $dataBuletin = buletin::all();

        // load the view and pass the sharks
        //return View::make('buletin.index')->with('buletin', $buletin);
        return view('admin.buletin.index', compact('dataBuletin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buletin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuletinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Buletin $buletin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buletin $buletin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuletinRequest $request, Buletin $buletin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buletin $buletin)
    {
        //
    }
}
