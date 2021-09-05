<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{


    public function __construct(){
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars =Car::all();

        return view('cars.index',[
            'cars'=> $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cars =Car::all();
        return view('cars.create',[
            'cars'=>$cars
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $car =new Car;
        // $car->licence_no=$request->input('licence_no');
        // $car->vin=$request->input('vin');
        // $car->model=$request->input('model');
        // $car->make=$request->input('make');
        // $car->date=$request->input('date');
        // $car->save();

        $car=Car::create([
            'client_id'=>$request->input('client_id'),
            'licence_no'=>$request->input('licence_no'),
            'vin'=>$request->input('vin'),
            'model'=>$request->input('model'),
            'make'=>$request->input('make'),
            'date'=>$request->input('date'),
        ]);

        return redirect('/cars');
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
    public function edit(Car $car)
    {
        return view('cars.edit')->with('car',$car);
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
        $car=Car::where('id',$id)
            ->update([
            'client_id'=>$request->input('client_id'),
            'licence_no'=>$request->input('licence_no'),
            'vin'=>$request->input('vin'),
            'model'=>$request->input('model'),
            'make'=>$request->input('make'),
            'date'=>$request->input('date'),
        ]);

        return redirect('/cars');
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

        return redirect("/cars");
    }
}
