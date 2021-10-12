@extends('theme.back.app')
@section('titulo')
    Categoria
@endsection

@section('scripts')
    <script src="{{asset("assets/back/js/pages/scripts/categoria/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white float-left">Categorias</h5>
                    <a id="nuevo-registro" href="{{route('categoria.crear')}}"  class="btn btn-outline-light btn-sm float-rigth d-inline">Crear categoria</a>
                </div>
                <div class="card-body">
                    <table id="data-table" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                @include('theme.back.categoria.tabla-data')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="accion-categoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
@endsection