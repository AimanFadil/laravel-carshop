<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return response()->json([
            "success" => true,
            "results" => $cars
        ]);
    }

    public function show($id)
    {
        $car = Car::all()->where('id', $id)->first();

        return response()->json([
            "success" => true,
            "results" => $car
        ]);
    }
}
