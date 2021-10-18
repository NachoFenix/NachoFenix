$(document).ready(function () {
    APP.validacionGeneral('form-general');
    $("#categoria").select2({
        language: "es"
    });
    $("#tag").select2({
        language: "es",
        tags: true,
        tokenSeparators: [',']
    });
    $('#titulo').on("change", function () {
        const str= removeAccensts($(this).val());
        $("#slug").val(str.toLowerCase().replace(/ /g, '-'));
    });
    $('#slug').on('cahnge', function () {
        $(this).val($(this).val().tiLowercase().replace(/ /g, '-'));
    });
    $('#imagen').fileinput({
        language: 'es',
        allowedFileExtensions: ['jpg', 'jpeg', 'png'],
        maxFileSize: 1000,
        showUpload: false,
        showUpload: false,
        showClose: false,
        dropZoneEnabled: false,
        showCapition: false,
        showCancel: false,
        initialPreviewAsData: true,
        theme: 'fas'
    });
    var quill = new Quill('#body',{
        theme: 'snow'
    });
    const removeAccensts = (str)=>{
        return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    };

});