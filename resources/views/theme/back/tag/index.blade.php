@extends('theme.back.app')
@section('titulo')
    Tags
@endsection

@section('scripts')
    <script src="{{asset("assets/back/js/pages/scripts/tag/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @if ($mensaje = session("mensaje"))
                <x-alert tipo="success" :mensaje="$mensaje"/>
            @endif
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white float-left">tags</h5>
                    <a href="{{route('tag.crear')}}" class="btn btn-outline-light btn-sm float-rigth d-inline">Crear tags</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->nombre}}</td>
                                    <td>{{$tag->slug}}</td>
                                    <td>
                                        <a href="{{route("tag.editar",$tag->id)}}" data-toggle="tooltip" title="Editar este registro"><i class="fas fa-edit"></i></a>
                                        <form action="{{route("tag.eliminar",$tag->id)}}" method="post" class="form-eliminar d-inline">
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