<?php

namespace App\Http\Controllers;

use App\Egresados;
use Illuminate\Http\Request;

class EgresadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egresados = Egresados::get();
        echo json_encode($egresados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $egresados = new Egresados();
        $egresados->name = $request->input('name');
        $egresados->description = $request->input('description');
        $egresados->year = $request->input('year');
        $egresados->genre = $request->input('genre');
        $egresados->duration = $request->input('duration');
        $egresados->save();
        echo json_encode($egresados);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Egresados  $egresados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Egresados $egresados)
    {
        echo "Hello from update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Egresados  $egresados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Egresados $egresados)
    {
        echo 'Hello from destroy';
    }
}
