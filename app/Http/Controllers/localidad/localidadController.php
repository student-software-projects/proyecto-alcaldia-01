<?php

namespace App\Http\Controllers\localidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\localidades;
class localidadController extends Controller
{
    public function index()
    {
        $localidades = localidades::all();
        return view('modules.localidades.index',compact('localidades'));
    }
    public function create()
    {
        return view('modules.localidades.create');
    }
    public function store(Request $request)
    {
        $localidad = localidades::create($request->all());
        return redirect()->route('localidades.index')->with([
            "message"=>"Localidad registrada exitosamente.",
            "color"=>'success'
        ]);
    }
    public function show($id)
    {
        $localidad = localidades::find($id);
        return view('modules.localidades.show',compact('localidad'));
    }
    public function edit($id)
    {
        $localidad = localidades::find($id);
        return view('modules.localidades.edit',compact('localidad'));
    }
    public function update(Request $request, $id)
    {
        $localidad = localidades::findOrfail($id);
        $localidad->localidad = $request->input('localidad');
        $localidad->save();
        return redirect()->route('localidades.index')->with([
            "message"=>"Localidad actualizada exitosamente.",
            "color"=>'info'
        ]);

    }
    public function delete($id)
    {
        $localidad = localidades::find($id);
        return view('modules.localidades.delete',compact('localidad'));
    }
    public function destroy($id)
    {
        localidades::find($id)->delete();
        return redirect()->route('localidades.index')->with([
            "message"=>"Localidad eliminada exitosamente.",
            "color"=>'danger'
        ]);
    }
}
