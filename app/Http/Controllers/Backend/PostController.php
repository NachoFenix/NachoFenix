<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ValidacionPost;
use App\Models\Backend\Post;
use App\Models\Backend\Categoria;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('theme.back.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $categorias = Categoria::orderBy('id')->pluck('nombre', 'id');
        $tags = Tag::orderBy('id')->pluck('nombre','id');
        return view('theme.back.post.crear', compact('categorias','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionPost $request)
    {
        $post = Post::create($request->validated());
        $categorias = $request->categoria;
        $post->categoria()->attach(array_values($categorias));
        $tags = $request->tag ? Tag::setTag($request->tag) : [];
        $post->tag()->attach($tags);
        return redirect()->route('post')->with('mensaje','Post creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function mostrar(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function editar(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Post $post)
    {
        //
    }
}
