<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;
use App\Models\Brand;
use App\Models\Device;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Validator;
use Storage;



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
        $rules = [
            'image' => 'mimes:jpg,bmp,png',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $brand = Brand::findOrFail($request->brand_id);
        $smartphone = new Smartphone();
        $smartphone->device_name = $request->device_name;
        $smartphone->brand = $brand->brand_name;
        $smartphone->brand_id = $request->brand_id;
        $smartphone->release_date = $request->release_date;
        $smartphone->device_type_id = $request->device_type_id;

        $path = Storage::putFileAs(
            'public/images/smartphones',
            $request->file('image'),
            $request->file('image')->getClientOriginalName()
        );

        $smartphone->image = 'storage/images/smartphones/' . $request->file('image')->getClientOriginalName();
        $smartphone->save();
        // dd($request->file('img_path'));
        return redirect()->route('smartphone.index', ['id' => $request->brand_id]);
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
