<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;
use View;
use DB;



class SmartphoneController extends Controller
{
    public function index($id){
        $smartphones = Smartphone::where('brand_id', $id)->get();
        return View::make('devices.smartphones.index', compact('smartphones'));
    }

    public function create()
    {
        $smartphones = Smartphone::all();
        return View::make('devices.smartphone.create', compact('smartphones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
