document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-rol").click(function () {
        //MUESTRO EL MODAL
        $("#modal-roles").modal("show");
    });

    cargarDatos("t-roles", "/roles/cargartabla");

    $("#form-roles").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: $(this).attr("url"),
            data: formData,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            beforeSend: function () {
                // $(boton).prop('disabled', true).html(''
                //     +'<div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div>'
                // );
            },
            success: function (json) {
                if (json["estado"]) {
                    cargarDatos("t-roles", "/roles/cargartabla");
                    $("#modal-roles").modal("hide");
                    $("#form-roles").trigger("reset");
                    toastr.success(json["msg"], json["titulo"]);
                } else {
                    toastr.error(
                        json["errors"],
                        json["titulo"] + ", " + json["msg"]
                    );
                }
            },
            error: function (json) {
                toastr.error(json["msg"], json["titulo"]);
            },
        });
    });

    $("#form-permisos").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: $(this).attr("url"),
            data: formData,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            beforeSend: function () {
                // $(boton).prop('disabled', true).html(''
                //     +'<div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div>'
                // );
            },
            success: function (json) {
                if (json["estado"]) {
                    cargarDatos("t-roles", "/roles/cargartabla");
                    $("#modal-roles").modal("hide");
                    $("#form-roles").trigger("reset");
                    toastr.success(json["msg"], json["titulo"]);
                } else {
                    toastr.error(
                        json["errors"],
                        json["titulo"] + ", " + json["msg"]
                    );
                }
            },
            error: function (json) {
                toastr.error(json["msg"], json["titulo"]);
            },
        });
    });
});

function permisosRolModal(idRol) {
    //obtenerPermisos();
    $.ajax({
        type: "POST",
        url: URL_RUTA + "/roles/permisos",
        data: JSON.stringify({ idRol: idRol }),
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            // $(boton).prop('disabled', true).html(''
            //     +'<div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div>'
            // );
        },
        success: function (json) {
            if (json["estado"]) {
                //CREO EL HTML DELA LISTA DE PERMISOS PARA LA TABLA

                console.log(json);
                //DESTRUYO LA TABLA
                $("#t-roles-permisos").DataTable().destroy();

                //PONGO EL HTML EN EL DIV TBODY DE LA TABLA
                $("#t-roles-permisos-body").empty().html(json["datos"]);

                //OBTENGO EL ARRAY DE TODOS LOS ELEMENTOS CON LA CLASE DE SWITCH
                var elems = Array.prototype.slice.call(
                    document.querySelectorAll(".js-switch")
                );

                //RECORRO EL ARRAY DE TODOS LOS ELEMENTOS CON LA CLASE DE SWITCH Y CREO CADA UNO
                elems.forEach(function (html) {
                    new Switchery(html);
                });

                //INICIALIZO LA TABLA
                datatable("t-roles-permisos");

                //MUESTRO LA ALERTA DE EXITO
                toastr.success(json["msg"], json["titulo"]);
            } else {
                toastr.error(json["msg"], json["titulo"]);
            }
        },
        error: function (json) {
            toastr.error(json["msg"], json["titulo"]);
        },
    });
    $("#modal-permisos").modal("show");
}

function quitarPermiso(idPermiso, idRol) {
    // $('#'+idboton).replaceWith('<div id="'+idboton+'" onChange="fnt_desactivar_permisorol('+idpermisorol+',\''+idboton+'\')" title="Desactivar permiso" class="custom-control custom-switch custom-switch-off-light custom-switch-on-'+sidebar_activo+'">'+
    // '<input type="checkbox" class="custom-control-input" id="customSwitch'+idboton+'" value="1" checked>'+
    // '<label class="custom-control-label" for="customSwitch'+idboton+'"></label></div>');
}
