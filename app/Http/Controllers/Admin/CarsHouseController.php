<?php

namespace App\Http\Controllers\Admin;

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
        /* dd($form_data); */

        if ($request->hasFile('logo')) {
            $path = Storage::disk('public',)->put('images', $request->file('logo'));
        }

        $house = new CarsHouse();

        $house->nome = $form_data['nome'];
        $house->logo = $path;
        $house->indirizzo = $form_data['indirizzo'];
        $house->tel = $form_data['tel'];
        $house->tipologia = $form_data['tipologia'];
        $house->mail = $form_data['mail'];
        $house->social = $form_data['social'];

        $house->save();

        return redirect()->route('admin.carshouse.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function show(CarsHouse $carshouse)
    {


        return view('admin.carshouse.show', compact('carshouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(CarsHouse $carshouse)
    {


        return view('admin.carshouse.edit', compact('carshouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarsHouseRequest  $request
     * @param  \App\Models\CarsHouse  $carsHouse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarsHouseRequest $request, CarsHouse $carshouse)
    {
        $form_data = $request->all();

        $carsHouse = CarsHouse::find($carshouse->id);

        $carsHouse->nome = $form_data['nome'];
        $carsHouse->indirizzo = $form_data['indirizzo'];
        $carsHouse->tel = $form_data['tel'];
        $carsHouse->tipologia = $form_data['tipologia'];
        $carsHouse->mail = $form_data['mail'];
        $carsHouse->social = $form_data['social'];
        $carsHouse->logo = $form_data['logo'];

        $carsHouse->save();

        return redirect()->route('admin.carshouse.index');
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
