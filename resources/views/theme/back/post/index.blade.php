@extends('theme.back.app')
@section('titulo')
    Posts
@endsection

@section('scripts')
    <script src="{{asset("assets/back/js/pages/scripts/post/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @if ($mensaje = session("mensaje"))
                <x-alert tipo="success" :mensaje="$mensaje"/>
            @endif
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white float-left">Post</h5>
                    <a href="{{route('post.crear')}}" class="btn btn-outline-light btn-sm float-rigth d-inline">Crear post</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Slug</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->titulo}}</td>
                                    <td>{{$post->slug}}</td>
                                    <td>
                                        <a href="{{route("post.editar",$post->id)}}" data-toggle="tooltip" title="Editar este registro"><i class="fas fa-edit"></i></a>
                                        <form action="{{route("post.eliminar",$post->id)}}" method="post" class="form-eliminar d-inline">
                                            @csrf @method('delete')
                                            <button type="button" class="boton-eliminar" data-toggle="tooltip" title="Eliminar este registro"><i class="text-danger fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection