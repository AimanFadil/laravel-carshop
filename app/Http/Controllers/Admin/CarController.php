<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\CarsHouse;
use App\Models\Optional;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();

        return view('admin.car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carsHouse = CarsHouse::all();
        $optionals = Optional::all();
        return view('admin.car.create', compact('carsHouse', 'optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $form_data = $request->all();

        $car = new Car();

        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('post_image', $form_data['image']);
            $form_data['image'] = $path;
        }

        $car->fill($form_data);

        $car->save();

        if ($request->has('optionals')) {
            $car->optionals()->attach($form_data['optionals']);
        }


        return redirect()->route('admin.cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('admin.car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $carsHouse = CarsHouse::all();
        $optionals = optional::all();
        return view('admin.car.edit', compact('car', 'carsHouse', 'optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $form_data = $request->all();

        if ($request->hasFile('image')) {

            if ($car->image != null) {
                Storage::delete($car->image);
            }

            $path = Storage::disk('public')->put('post_image', $form_data['image']);
            $form_data['image'] = $path;
        }

        $car->update($form_data);

        if ($request->has('optionals')) {
            $car->optionals()->sync($form_data['optionals']);
        }
        return redirect()->route('admin.cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.cars.index');
    }
}
