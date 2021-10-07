@extends('theme.back.app')
@section('titulo')
Permiso Rol
@endsection

@section('scripts')
<script src="{{asset("assets/back/js/pages/scripts/permiso-rol/index.js")}}" type="text/javascript"></script>    
@endsection

@section('contenido')
<div class="row">
    @csrf
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h5 class="text-white float-left">Permiso rol</h5>
                <a href="{{route('permiso.crear')}}" class="btn btn-outline-light btn-sm float-rigth d-inline">Crear permiso</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Permiso</th>
                            @foreach ($roles as  $id => $nombre)
                                <th class="text-center">{{$nombre}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($permisos as $permiso)
                            <tr>
                                <td>
                                    {{$permiso->nombre}}
                                </td>
                                @foreach ($roles as $roles_id => $nombre)
                                   <td class="text-center">
                                        <input type="checkbox" 
                                        value="{{$roles_id}}" 
                                        class="permiso-rol" 
                                        data-url="{{route('permiso-rol.guardar')}}" 
                                        data-permiso="{{$permiso->id}}"
                                        {{in_array($roles_id, $permiso->roles->pluck('id')->toArray()) ? "checked" : ""}}>
                                    </td>  
                                @endforeach
                                 
                            </tr>
                            
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection