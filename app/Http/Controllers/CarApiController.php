<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Car::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car;
        $car->models = $request->input('models', 'BMW x5');
        $car->color = $request->input('color', 'Red');
        $car->year = $request->input('year', '2017-01-01');
        $car->owner_id = $request->input('owner_id', 1);
        $car->save();
        return response('ok', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Car::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $car = Car::find($id);
        $car->models = $request->input('models', 'BMW x5');
        $car->color = $request->input('color', 'Red');
        $car->year = $request->input('year', '2017-01-01');
        $car->owner_id = $request->input('owner_id', 1);
        $car->save();
        return response('ok', 200);
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
       return response('ok', 200);
    }
}
