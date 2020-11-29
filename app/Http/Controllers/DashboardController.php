<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class DashboardController extends Controller
{
    public function index()
    {
        return view('modules.dashboard.index');
    }
    public function perfil()
    {
        $user = User::findOrfail(session('USER')->id);
        return view('modules.dashboard.perfil',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);
        $user->names = $request->input('names');
        $user->lastnames = $request->input('lastnames');
        $user->save();
        return redirect()->route('dashboard.index')->with([
            "color"=>"success",
            "message"=>"Actualizado correctamente."
        ]);
    }
}
