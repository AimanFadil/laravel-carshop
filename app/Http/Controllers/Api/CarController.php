<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        foreach($cars as $car){
            $car['slug'] = Str::slug($car->modello, '-');
        }
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
