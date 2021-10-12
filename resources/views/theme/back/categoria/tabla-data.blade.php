@foreach ($categorias as $categoria)
    <tr>
        <td>{{$categoria->nombre}}</td>
        <td>{{$categoria->slug}}</td>
        <td>
            <a href="{{route("categoria.editar",$categoria->id)}}" class="editar-registro" data-toggle="tooltip" title="Editar este registro"><i class="fas fa-edit"></i></a>
            <form action="{{route("categoria.eliminar",$categoria->id)}}" method="post" class="eliminar-registro d-inline">
                @csrf @method('delete')
                <button type="button" class="btn-accion-tabla boton-eliminar" data-toggle="tooltip" title="Eliminar este registro"><i class="text-danger fas fa-trash"></i></button>
            </form>
        </td>
    </tr>
@endforeach