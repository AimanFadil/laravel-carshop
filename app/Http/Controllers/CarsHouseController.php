<?php

namespace App\Http\Controllers;

use App\Models\CarsHouse;
use App\Http\Requests\StoreCarsHouseRequest;
use App\Http\Requests\UpdateCarsHouseRequest;

class CarsHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarsHouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarsHouseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function show(CarsHouse $carsHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(CarsHouse $carsHouse)
    {
        //
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
        //
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
