<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animales;

class Animal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['animales']=Animales::paginate(5);
        return view('home', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('registroAnimal');
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
        //
        $datoAnimal=request()->except('_token');
        Animales::insert($datoAnimal);  
        return redirect('home');  
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
    public function edit($idAnimal)
    {
        //
        $animal=Animales::findOrFail($idAnimal);
        return view ('editaAnimal',compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idAnimal)
    {
        //
        $datoAnimal=request()->except(['_token','_method']);
        Animales::where('idAnimal','=',$idAnimal)->update($datoAnimal);

        $datos['animales']=Animales::paginate(5);
    return view('home', $datos);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idAnimal)
    {
        //
        Animales::destroy($idAnimal);
        return redirect('home');
    }
}
