@extends('theme.back.app')
@section('tutulo')
Menú Rol
@endsection

@section('scripts')
<script src="{{asset("assets/back/js/pages/scripts/menu-rol/index.js")}}" type="text/javascript"></script>    
@endsection

@section('contenido')
<div class="row">
    @csrf
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h5 class="text-white float-left">Menú rol</h5>
                <a href="{{route('menu.crear')}}" class="btn btn-outline-light btn-sm float-rigth d-inline">Crear menús</a>
            </div>
            <div class="card-body">
                <table class="table table-dark table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Menú</th>
                            @foreach ($roles as $rol)
                                <th class="text-center">{{$rol->nombre}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($menus as $key => $menu)
                                @if ($menu["menus_id"]!= null)
                                    @break
                                @endif
                                @include('theme.back.menu-rol.item-menu',['menu' =>$menu , 'hijo' => 'no'])
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection