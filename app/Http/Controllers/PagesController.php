<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        $contactos=App\Contacto::paginate(6);
        return view('welcome', compact('contactos'));
    } 
    public function fotos(){
        return view('fotos');
    } 
    public function blog(){
        return view('blog');
    }
    public function detalle($id){
        $contacto=App\Contacto::findOrFAil($id);
        return view('contactos.detalle',compact('contacto'));
    }
    public function for_agregar(){
        return view('contactos.agregar');
    }
    public function agregar(Request $request){
        //return $request->all();
        
        $request->validate([
            'nombre'=>'required',
            'telefono'=>'required',
            'correo'=>'required'
        ]);

        $contactoNuevo= new App\Contacto;
        $contactoNuevo->nombre=$request->nombre;
        $contactoNuevo->telefono=$request->telefono;
        $contactoNuevo->correo=$request->correo;

        $contactoNuevo->save();
        return back()->with('mensaje','Contacto Agregado');
    }

    public function editar($id){
        $contacto=App\Contacto::findOrFAil($id);
        return view('contactos.editar',compact('contacto'));
    }

    public function modificar(Request $request, $id){
        
        $request->validate([
            'nombre'=>'required',
            'telefono'=>'required',
            'correo'=>'required'
        ]);
        
        $contactoEditado=App\Contacto::findOrFAil($id);
        $contactoEditado->nombre=$request->nombre;
        $contactoEditado->telefono=$request->telefono;
        $contactoEditado->correo=$request->correo;

        $contactoEditado->save();
        return back()->with('mensaje','Contacto Editado');
        //return view('contactos.editar',compact('contacto'));
    }

    public function eliminar($id){
        $contactoEliminar=App\Contacto::findOrFAil($id);
        $contactoEliminar->delete();
        return back()->with('mensaje','Contacto Eliminado');
    }
}
