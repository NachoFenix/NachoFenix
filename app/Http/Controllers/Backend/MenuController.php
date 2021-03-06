<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ValidacionMenu;
use App\Models\Backend\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::getMenu();
        return view('theme.back.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('theme.back.menu.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionMenu $request)
    {
        $validado = $request->validated();
        Menu::create($validado);
        cache()->tags('Menu')->flush();
        return redirect()->route('menu.crear')->with('mensaje','Menú creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = Menu::findOrFail($id);
        return view('theme.back.menu.editar',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionMenu $request, $id)
    {
        Menu::findOrFail($id)->update($request->validated());
        cache()->tags('Menu')->flush();
        return redirect()->route('menu')->with('mensaje', 'Menu actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        Menu::destroy($id);
        cache()->tags('Menu')->flush();
        return redirect()->route('menu')->with('mensaje','Menu eliminado con exito');
    }

    public function guardarOrden(Request $request)
    {
        if($request->ajax()){
            Menu::guardarOrden($request->menu);
            cache()->tags('Menu')->flush();
            return response()->json(['respuesta'=> 'ok']);
        }else{
            abort(404);
        }
    }
}
