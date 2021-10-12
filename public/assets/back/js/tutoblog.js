//const { toSafeInteger } = require("lodash");

var APP = function(){
    return {
        validacionGeneral: function(id, reglas, mensajes){
            const formulario = $('#'+ id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'div',//Contenedor por default de mensaje de error
                errorClass: 'invalid-feedback',//Mensaje de error en el input por default
                focusInvalid: false,
                ignore: "",
                highlight: function(element, errorClass, validCass){
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element){
                    $(element).removeClass('is-invalid');
                },
                success: function(element){
                    $(element).removeClass('is-invalid');
                },
                errorPlacement: function(error, element){
                    if(element.closest('.bootstrap-select').length > 0){
                        element.closest('.bootstrap-select').find('.bs-placeholder').after(error);
                    }else if($(element).is('select')&& element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    }else{
                        error.insertAfter(element);
                    }
                },
                invalidHandler: function(event, validator){

                },
                submitHandler: function(form){
                    return true;
                }
            });
        },
        notificacion: function(mensaje, titulo, tipo) {
            switch(tipo){
                case 'error':
                    toastr.error(mensaje, titulo);
                    break;
                case 'success':
                    toastr.success(mensaje, titulo);
                    break;
                case 'warning':
                    toastr.warning(mensaje, titulo);
                    break;
                case 'info':
                    toastr.info(mensaje, titulo);
                    break;
                default:
                    break;
            }
        }
    }
}();