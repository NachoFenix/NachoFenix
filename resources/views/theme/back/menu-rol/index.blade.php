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
@endsection