<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ValidacionTag;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::get();
        return view('theme.back.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('theme.back.tag.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionTag $request)
    {
        Tag::create($request->validated());
        return redirect()->route('tag')->with('mensaje','Tag guardado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function editar(Tag $tag)
    {
        return view('theme.back.tag.editar',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionTag $request, Tag $tag)
    {
        $tag->update($request->validated());
        return redirect()->route('tag')->with('mensaje','Tag actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag')->with('mensaje','Tag eliminado con exito');
    }
}
