<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Rol;
use App\Models\Backend\Permiso;
use Illuminate\Http\Request;

class PermisoRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::orderBy('id')->pluck('nombre','id');
        $permisos = Permiso::with('roles')->orderBy('id')->get();
        //dd($permisos);
        return view('theme.back.permiso-rol.index', compact('roles','permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        if ($request->ajax()) {
            $permiso = Permiso::findOrFail($request->permiso_id);
            if ($request->estado == 1) {
                $permiso->roles()->attach($request->rol_id);
                cache()->tags('Permiso')->flush();
                return response()->json(['respuesta' => 'El permiso se asigno correctamente']);
            }else{
                $permiso->roles()->detach($request->rol_id);
                cache()->tags('Permiso')->flush();
                return response()->json(['respuesta' => 'El permiso se elimino correctamente']);
            }
        }else{
            abort(404);
        }
    }

}