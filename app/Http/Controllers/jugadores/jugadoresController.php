<?php

namespace App\Http\Controllers\jugadores;

use App\Http\Controllers\Controller;
use App\Models\equipos;
use Illuminate\Http\Request;
use App\Models\jugadores;

class jugadoresController extends Controller
{
    public function index()
    {
        $jugadores = jugadores::with('equipos')->get();
        return view('modules.jugadores.index',compact('jugadores'));
    }
    public function create()
    {
        $equipos = equipos::with('localidades')->get();
        return view('modules.jugadores.create',compact('equipos'));
    }
    public function store(Request $request)
    {
        $jugador = jugadores::create($request->all());
        return redirect()->route('jugadores.index')->with([
            "message"=>"Jugador registrado exitosamente.",
            "color"=>"success"
        ]);
    }
    public function show($id)
    {
        $jugador = jugadores::with('equipos')->findOrFail($id);
        return view('modules.jugadores.show',compact('jugador'));
    }
    public function edit($id)
    {
        $jugador = jugadores::with('equipos')->findOrFail($id);
        $equipos = equipos::with('localidades')->get();
        return view('modules.jugadores.edit',compact('jugador','equipos'));
    }
    public function update(Request $request,$id)
    {
        $jugador = jugadores::findOrFail($id);
        $jugador->nombres = $request->input('nombres');
        $jugador->apellidos = $request->input('apellidos');
        $jugador->numero_camisa = $request->input('numero_camisa');
        $jugador->apodo = $request->input('apodo');
        $jugador->equipo_id = $request->input('equipo_id');
        $jugador->save();
        return redirect()->route('jugadores.index')->with([
            "message"=>"Jugador actualizado exitosamente.",
            "color"=>"info"
        ]);

    }
    public function delete($id)
    {
        $jugador = jugadores::findOrFail($id);
        return view('modules.jugadores.delete',compact('jugador'));
    }
    public function destroy($id)
    {
        jugadores::findOrFail($id)->delete();
        return redirect()->route('jugadores.index')->with([
            "message"=>"Jugador eliminado exitosamente.",
            "color"=>"danger"
        ]);
    }

}
