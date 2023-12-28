<?php

namespace App\Http\Controllers;

use App\Http\Resources\VehicleResource;
use Illuminate\Http\Request;
use App\Models\Vehicle; // Import the Vehicle class

class vehicleController extends Controller
{
    //Return All Vehicles

    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'All Vehicles',
            'data' => VehicleResource::collection(vehicle::all()) // Use the Vehicle class
        ], 200);
    }
}
