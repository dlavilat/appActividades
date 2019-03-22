<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Categorias;

class Actividades extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //echo "hola";
      //$actividades=Actividades::orderBy('id','DESC')->paginate(3);
      //$actividades = Actividades::orderBy('id','ASC')->paginate(3);
      $actividades = Actividad::all();
      //return view('Actividades.index')->with('actividades',$actividades);
      //$actividades = "hola";
      //return view('actividades.index', ['actividades' =>  $actividades]);
      return view('actividades.index', compact('actividades'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lista_categoria = Categorias::all();
         //enviamos los datos a la vista
         return view('actividades.create', compact('lista_categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,
      [
      'categoria_id'=>'required',
      'ac_titulo'=>'required',
      'ac_descripcion'=>'required',
      'ac_fecha_programada'=>'required']);

      /*Actividad::create($request->all());*/

        $actividad = new Actividad();
        $actividad->ac_titulo = $request->get('ac_titulo');
        $actividad->ac_fecha_programada = date("H:i:s", strtotime(request('ac_fecha_programada')));
        //$actividad->ac_fecha_programada = date("H:i:s", strtotime(request('ac_fecha_programada')));
        $actividad->ac_descripcion = $request->get('ac_descripcion');
        $actividad->categoria_id = $request->get('categoria_id');
        $actividad->estados_id = 1; //estado = pendiente

        $actividad->save();


      return redirect()->route('actividades.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $actividades = "hola";
      return view('actividades.show', ['actividades' =>  $actividades]);
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
        //
    }
}
