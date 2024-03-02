<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Device;

class QueueController extends Controller
{
    public function create($id)
    {
        $device = Device::where('device_id', $id)->get();
        $device_services = DB::table('devicesservices')->get();
        return View::make('ticket.create', compact('brands','devices'));
    }
}
