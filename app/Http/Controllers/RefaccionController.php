<?php

namespace App\Http\Controllers;

use App\Refaccion;
use Illuminate\Http\Request;

class RefaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Refacciones = Refaccion::all();

        return view("muestraCatalogo")->with(compact('Refacciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("crearefaccion");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $refa = new Refaccion;
        $refa->nombre = $req->nombre;
        $refa->descripcion = $req->descripcion;
        $refa->num_piezas = $req->num_piezas;
        $refa->costo_pieza = $req->costo_pieza;

        $refa->save();

        return redirect('/refacciones');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Refaccion  $refaccion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $refaccion = Refaccion::find($id);

        return view('editarefaccion')->with(compact('refaccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Refaccion  $refaccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Refaccion $refaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Refaccion  $refaccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $refa = Refaccion::find($req->id);
        $refa->nombre = $req->nombre;
        $refa->descripcion = $req->descripcion;
        $refa->num_piezas = $req->num_piezas;
        $refa->costo_pieza = $req->costo_pieza;
        $refa->save();
        return redirect('/refacciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Refaccion  $refaccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $refa = Refaccion::find($id);
        $refa->delete();
        return redirect('/refacciones');
    }
}
