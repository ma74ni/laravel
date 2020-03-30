<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::all();
        return view('index', ['tareas' => $tareas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(), 
          [
            'nombre' => 'required|max:255',
          ]
        );

        if($validador->fails())
        {
          return redirect('/')->withInput()->withErrors($validador);
        }

        $tarea = new Tarea;
        $tarea->nombre = $request->nombre;
        $tarea->completado = 0;
        $tarea->save();

        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $tarea = Tarea::findOrFail($id);
      $tarea->completado = 1;
      $tarea->save();
    
      return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tarea = Tarea::findOrFail($id);
      $tarea->delete();
      
      return redirect('/');
    }
}