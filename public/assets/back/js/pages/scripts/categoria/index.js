$(document).ready(function () {
   var tabla = $('#data-table').DataTable();

    //Proceso nuevo registro
    $('#nuevo-registro').on('click', function (event) {
        event.preventDefault();
        const data = {
            _token: $('input[name=_token]').val()
        };
        ajaxRequest($(this).attr('href'), data, 'crear');
    });

    //proceso Editar
    $('#data-table').on('click', '.editar-registro', function (event) {
        event.preventDefault();
        const data = {
            _method: 'PUT',
            _token: $('input[name=_token]').val()
        };
        ajaxRequest($(this).attr('href'), data, 'editar');
    });

    //proceso eliminar registro
    $('#data-table').on('submit', '.eliminar-registro', function (event) {
        event.preventDefault();
        const data = {
            _method: 'PUT',
            _token: $('input[name=_token]').val();
        }
    });

    //proceso Guardar o Actualizar
    $('#accion-categoria').on('submit', '#form-general', function (event) {
        event.preventDefault();
        const form = $(this);
        ajaxRequest(form.attr('accion'), form.serialize(), 'guardar');
    });

    function ajaxRequest(url, data, accion, form) {
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (respuesta) {
                if (accion == 'crear' || accion == 'editar') {
                    $('#accion-categoria .modal-body').html(respuesta);
                    APP.validacionGeneral('form-general');
                    $('#accion-categoria').modal('show');
                } else if (accion == 'guardar' || accion == 'actualizar') {
                    APP.notificacion('Categoria creada y/o actualizada con exito', 'Tuto-blog', 'success');
                    tablaData(respuesta);
                } else if (accion == 'eliminar') {
                    if (respuesta.mensaje == 'ok') {
                        tabla.row(form.parents('tr')).remove().draw(false);
                        APP.notificacion('El registro se elimino correctamente', 'Tuto-blog', 'success');
                    } else {
                        APP.notificacion('El registro no pudo ser eliminado, lo mas seguro es que este siendo utilizado en otra tabla', 'Tuto-blog', 'success');
                    }
                }
            },
            error: function (error) {
                var errors = error.responseJSON.errors;
                $.each(errors, function (key, val) {
                    $.each(val, function (key, mensaje) {
                        APP.notificacion(mensaje, 'Tuto-blog', 'error');
                    });
                    return false;
                });
            },
        });
    }

    function tablaData(respuesta) {
        tabla.destroy();
        $('#data-table').html(respuesta);
        tabla = $('#data-table').DataTable();
        $('#accion-categoria').modal('hide');
    }
});