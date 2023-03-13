
document.addEventListener("DOMContentLoaded", function () {

    // código a ejecutar cuando la página se carga

    $("#btn-nuevo-rol").click(function () {

        $.ajax({
            type: "GET",
            url: URL_RUTA + '/roles/permisos',
            beforeSend: function () {
                // $(boton).prop('disabled', true).html(''
                //     +'<div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div>'
                // );
            },
            success: function (json) {
                console.log(json);
                let permisosHTML = '';
                for (let i = 0; i < json['datos'].length; i++) {
                    let permiso = json['datos'][i];
                    console.log(json);
                    permisosHTML += '<tr>' +
                                        '<td>' + permiso['name'] + '</td>' +
                                        '<td>'+
                                            '<div class="checkbox">'+
					                           '<input id="permiso-' + permiso['id'] + '" class="magic-checkbox" type="checkbox">'+
					                        '</div>' +
                                        '</td>' +
                                    '</tr>';
                                    
                }

                // var json = JSON.parse(json);  
                // estado = json.estado;
                $('#tabla-roles-permisos').html(permisosHTML);
                // $('#justificacion').summernote("code",json.justificacion);
                // $('#justificacion').summernote(json.estado?'enable':'disable');
                // $('#observaciones').summernote("code",json.observaciones);
                // $('#observaciones').summernote(json.estado?'enable':'disable');
                // $('#tipo_representante').val(json.tipo_representante).prop("disabled", !json.estado).trigger("change");
                // $('#tipo_permiso').val(json.tipo_permiso).prop("disabled", !json.estado).trigger("change");
                // $('#fecha_de_presentacion').val(json.fecha_presentacion);
                // $('#fecha_de_uso').val(json.fecha_uso).change();                                   
                // $('#hora_inicio').val(json.hora_inicio);
                // $('#hora_final').val(json.hora_final);
                // json.estado ? enableform('registroForm'):disableform('registroForm');
                // json.estado ? $('#guardar_registro').prop('disabled', !json.estado).show():$('#guardar_registro').prop('disabled', !json.estado).hide();
                $("#modal-roles").modal();
            },
            complete: function (json) {

                //$(boton).prop('disabled', false).html('<i class="fa '+(estado?'fa-edit':'fa-file-alt')+' font-16 py-1" aria-hidden="true"></i>');
            }
        });
    });




    datatable('t-roles');
});