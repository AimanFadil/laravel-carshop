<?php

namespace App\Http\Controllers;

use App\Models\CarsHouse;
use App\Http\Requests\StoreCarsHouseRequest;
use App\Http\Requests\UpdateCarsHouseRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class CarsHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carshouses = CarsHouse::all();

        return view('admin.carshouse.index', compact('carshouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carshouses = CarsHouse::all();

        return view('admin.carshouse.create', compact('carshouses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarsHouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarsHouseRequest $request)
    {
        $form_data = $request->all();

        if($request->hasFile('logo')){
            $path = Storage::disk('public',)->put('images', $request->file('logo'));
        }

        $house = new CarsHouse();

        $house->name = $form_data['name'];
        $house->logo = $path;
        $house->address = $form_data['address'];
        $house->phone = $form_data['phone'];
        $house->type = $form_data['type'];
        $house->mail = $form_data['mail'];
        $house->social = $form_data['social'];

        $house->save();

        return redirect()->route('admin.carshouse.index', ['carhouse' => $house->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function show(CarsHouse $carsHouse)
    {
        $carsHouse = CarsHouse::find($carsHouse->id);

        return view('admin.carshouse.show', compact('carsHouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(CarsHouse $carsHouse)
    {
        $carsHouse = CarsHouse::find($carsHouse->id);

        return view('admin.carshouse.edit', compact('carsHouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarsHouseRequest  $request
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarsHouseRequest $request, CarsHouse $carsHouse)
    {
        $form_data = $request->all();

        $carsHouse = CarsHouse::find($carsHouse->id);

        $carsHouse->name = $form_data['name'];
        $carsHouse->address = $form_data['address'];
        $carsHouse->phone = $form_data['phone'];
        $carsHouse->type = $form_data['type'];
        $carsHouse->mail = $form_data['mail'];
        $carsHouse->social = $form_data['social'];
        $carsHouse->logo = $form_data['logo'];

        $carsHouse->save();

        return redirect()->route('admin.carshouse.index', ['carshouse' => $carsHouse->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarsHouse $carsHouse)
    {
        //
    }
}
