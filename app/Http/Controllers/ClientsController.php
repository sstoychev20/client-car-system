<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
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
        $client =Client::all();

        return view('clients.index',[
            'clients'=> $client
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client=Client::create([
            'make'=>$request->input('make'),
            'model'=>$request->input('model'),
            'client_name'=>$request->input('client_name'),
            'license_number'=>$request->input('license_number'),
            'year'=>$request->input('year'),
            'telephone'=>$request->input('telephone'),
            'reg_data'=>$request->input('reg_data'),
            'email'=>$request->input('email'),
            'user_id'=>auth()->user()->id,
        ]);

        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('clients.show')->with('client',$client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit')->with('client',$client);
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
        $client=Client::where('id',$id)
            ->update([
            'make'=>$request->input('make'),
            'model'=>$request->input('model'),
            'client_name'=>$request->input('client_name'),
            'license_number'=>$request->input('license_number'),
            'year'=>$request->input('year'),
            'telephone'=>$request->input('telephone'),
            'reg_data'=>$request->input('reg_data'),
            'email'=>$request->input('email'),
        ]);

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client )
    {
        $client->delete();

        return redirect("/clients");
    }
}
