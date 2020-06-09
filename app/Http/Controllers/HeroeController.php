<?php

namespace App\Http\Controllers;

use App\heroe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\HeroeRequest;

class HeroeController extends Controller
{
public function __construct(){

$this->middleware('auth');

}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $heroes = heroe::all();
        return view('heroe.index')->with(['heroes'=>$heroes]);    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heroe.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeroeRequest $request)
    {
       //$heroe = heroe::create($request -> all());

        $request ->validated();
        $datos= $request-> all();

        if($request ->file('imagen')){
            $archivo = $request-> file('imagen');
            $nombrearchivo = $archivo -> getClientOriginalName();
            $archivo ->move(public_path('img'), $nombrearchivo);
            $datos['imagen'] = 'img/'. $nombrearchivo;
        }

            $heroe = heroe::create ($datos);

        return redirect()->route('heroes.index')
        ->withSuccess("El heroe con id {$heroe->id} se ha creado");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\heroe  $heroe
     * @return \Illuminate\Http\Response
     */
    public function show(heroe $heroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\heroe  $heroe
     * @return \Illuminate\Http\Response
     */
    public function edit(heroe $heroe)
    {
       return view('heroe.edit')->with(['heroe'=>$heroe]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\heroe  $heroe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, heroe $heroe)
    {
        //$heroe->update ($request->all());

        $datos =$request->all();

     if($request ->file('imagen'))
    {
            $archivo = ($request ->file('imagen'));
            $nombrearchivo = $archivo -> getClientOriginalName();
            $archivo ->move(public_path('img'), $nombrearchivo);
            $datos['imagen'] = 'img/'. $nombrearchivo;
            File::delete($heroe->imagen);
        }
        


        $heroe-> update($datos);

            
        return Redirect() ->route('heroes.index')
        ->withSuccess("El heroe con id {$heroe->id} se ha actualizado");



        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\heroe  $heroe
     * @return \Illuminate\Http\Response
     */
    public function destroy(heroe $heroe)
    {
       $heroe->delete();

        return Redirect() ->route('heroes.index')
        ->withSuccess("El heroe con id {$heroe->id} se ha eliminado");
        //
    }
}
