<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Models\Optional;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

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

        return view('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $optionals = Optional::all();
        return view('cars.create',compact('optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {

        $form_data = $request->validated();
        $newCar = new Car();
        $newCar->fill($form_data);
        $newCar->save();

        if($request->has('optionals')){
            $newCar->optionals()->attach($request->optionals);
        }

        return redirect()->route('cars.show', ['car'=>$newCar->id])->with('status', 'Car creato con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {

        $optionals = Optional::all();
        return view('cars.edit', compact('car', 'optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {

        $form_data = $request->validated();
        $car->optionals()->sync($request->optionals);

        $car->update($form_data);



        return redirect()->route('cars.show', ['car'=>$car->id])->with('status', 'Car modificata con successo!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {


        $car->delete();
        return redirect()->route('cars.index');


    }
}
