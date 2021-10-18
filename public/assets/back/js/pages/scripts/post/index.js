$(document).ready(function() {
    $('#example').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    
    $('.boton-eliminar').on('click', function (event) {
        event.preventDefault();
        form = $(this).parents('form:first');
        $('#confirmar-eliminar').modal('show');
    });

    $('#accion-eliminar').on('click', function(event){
        event.preventDefault();
        $('#confirmar-eliminar').modal('hide');
        form.submit();
    });
});