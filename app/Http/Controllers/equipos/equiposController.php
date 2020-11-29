<?php

namespace App\Http\Controllers\equipos;

use App\Http\Controllers\Controller;
use Faker\Provider\File;
use Illuminate\Http\Request;
use App\Models\equipos;
use App\Models\localidades;
use Illuminate\Support\Facades\Storage;

class equiposController extends Controller
{
    public function index()
    {
        $equipos = equipos::with('localidades')->get();
        return view('modules.equipos.index',compact('equipos'));;
    }
    public function create()
    {
        $localidades = localidades::all();
        return view('modules.equipos.create',compact('localidades'));
    }
    public function store(Request $request)
    {
        $file = $request->file('logo');
        $nombre = $file->getClientOriginalName();
        \Storage::disk('locales')->put($nombre, \File::get($file));
        $equipo = equipos::create([
            "nombre_equipo"=>$request->input('nombre_equipo'),
            "logo"=>$nombre,
            "localidades_id"=>$request->input('localidades_id')
        ]);
        return redirect()->route('equipos.index')->with([
            "message"=>"Equipo registrado exitosamente.",
            "color"=> "success"
        ]);
    }
    public function show($id)
    {
        $equipo = equipos::with('localidades')->findOrFail($id);
        return view('modules.equipos.show',compact('equipo'));
    }
    public function edit($id)
    {
        $equipo = equipos::with('localidades')->findOrFail($id);
        $localidades = localidades::all();
        return view('modules.equipos.edit',compact('equipo','localidades'));
    }
    public function update(Request $request, $id)
    {
        $file = $request->file('logo');
        if (empty($file)){
            $equipo = equipos::findOrFail($id);
            $equipo->nombre_equipo = $request->input('nombre_equipo');
            $equipo->localidades_id = $request->input('localidades_id');
            $equipo->save();
            return redirect()->route('equipos.index')->with([
                "message"=>"Equipo actualizado exitosamente.",
                "color"=> "info"
            ]);
        }else{
            $nombre = $file->getClientOriginalName();
            \Storage::disk('locales')->put($nombre, \File::get($file));
            $equipo = equipos::findOrFail($id);
            $equipo->nombre_equipo = $request->input('nombre_equipo');
            $equipo->logo = $nombre;
            $equipo->localidades_id = $request->input('localidades_id');
            $equipo->save();
            return redirect()->route('equipos.index')->with([
                "message"=>"Equipo actualizado exitosamente.",
                "color"=> "info"
            ]);
        }

    }
    public function delete($id)
    {
        $equipo = equipos::find($id);
        return view('modules.equipos.delete',compact('equipo'));
    }
    public function destroy($id)
    {
        equipos::findOrFail($id)->delete();
        return redirect()->route('equipos.index')->with([
            "message"=>"Equipo eliminado exitosamente.",
            "color"=> "danger"
        ]);
    }
}
