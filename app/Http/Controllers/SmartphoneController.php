<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;
use App\Models\Brand;
use App\Models\Device;
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
        $brands = DB::table('brands')->get();
        $devices = DB::table('device_types')->get();
        return View::make('devices.smartphones.create', compact('brands','devices'));
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
