<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('site.editCar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->id)){
            $car = Car::find($request->id);
            $car->models = $request->model;
            $car->year = $request->year;
            $car->color = $request->color;
            $car->save();
        } else {
            $car = new Car;
            $car->models = $request->model;
            $car->year = $request->year;
            $car->color = $request->color;
            $car->save();
        }
        return redirect()->route('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $car = Car::find($id);
       return view('site.editCar')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
        return redirect()->route('main');
    }
}
