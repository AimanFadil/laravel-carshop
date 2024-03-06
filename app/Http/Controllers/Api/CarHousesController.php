<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarsHouse;
use Illuminate\Http\Request;

class CarHousesController extends Controller
{
    public function index()
    {
        $carHouse = CarsHouse::all();

        return response()->json([
            "success" => true,
            "results" => $carHouse
        ]);
    }
}
