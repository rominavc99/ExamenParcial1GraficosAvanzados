<?php

namespace App\Http\Controllers;

use App\Funcion;

use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function index() {
        $funciones = Funcion::all();
        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('funciones.index',$argumentos);
    }

    public function create(){
        return view('funciones.create');
    }

    public function store(Request $request){
        $nuevaFuncion = new Funcion();
        $nuevaFuncion-> pelicula = $request->input('pelicula');
        $nuevaFuncion-> fecha = $request->input('fecha');
        $nuevaFuncion-> hora = $request->input('hora');

        if ($nuevaFuncion->save()){
            return redirect()->route('funciones.index')->with('exito','Pelicula creada con exito');
        }
        return redirect()->route('funciones.index')->with('error','No se pudo crear pelicula');

        }

    public function destroy($id){
        $funcion = Funcion::find($id);
        if($funcion){
            if($funcion->delete()){
                return redirect()->route('funciones.index')-> with('exito', 'Pelicula eliminada');
            }
            return redirect()->route('funciones.index')-> with ('error', 'no se pudo eliminar pelicula');
        }
        return redirect()->route('funciones.index')-> with('error','No se encontro pelicula para borrar');
    }
    
}
