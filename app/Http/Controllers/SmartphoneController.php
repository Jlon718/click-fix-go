<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;



class SmartphoneController extends Controller
{
    public function index(){
        $smartphones = DB::table('smartphones')->get();
        return View::make('devices.smartphones.index', compact('smartphones'));
    }
}
