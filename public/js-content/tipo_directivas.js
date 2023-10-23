document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-tipo_directiva").click(function () {
        //RESETAR EL FORM

        //PONER EL ID EN 0 PARA QUE SEA CREACION
        $("#idTipoDirectiva").val(0);

        //PONGO EL ESTADO
        $("#estado").val(1).select2();

        //RESETEO EL FORM
        $("#form-tipos_directivas").trigger("reset");

        //MUESTRO EL MODAL
        $("#modal-tipos_directivas").modal("show");
    });

    iniciarSelects("modal-tipos_directiva");

    cargarDatos("t-tipos_directivas", "/tipos_directivas/cargartabla");

    $("#form-tipos_directivas").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: APP_URL + "/tipos_directivas/guardar",
            data: formData,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            beforeSend: function () {
                div_cargando.style.display = "flex";
            },
            success: function (json) {
                if (json["estado"]) {
                    console.log(json);
                    cargarDatos(
                        "t-tipos_directivas",
                        "/tipos_directivas/cargartabla"
                    );
                    $("#modal-tipos_directivas").modal("hide");
                    $("#form-tipos_directivas").trigger("reset");
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
            complete: function () {
                div_cargando.style.display = "none";
            },
        });
    });
});

function editarModal(idTipoDirectiva) {
    $.ajax({
        type: "GET",
        url: APP_URL + "/tipos_directivas/ver/" + idTipoDirectiva,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS A EDITR, INCLUYENDO EL ID
                $("#idTipoDirectiva").val(json["datos"]["id"]);
                $("#nombre").val(json["datos"]["nombre"]);
                $("#estado").val(json["datos"]["estado"]).select2();

                //MUESTRO EL MODAL
                $("#modal-tipos_directivas").modal("show");

                //MUESTRO LA ALERTA DE EXITO
                toastr.success(json["msg"], json["titulo"]);
            } else {
                toastr.error(json["msg"], json["titulo"]);
            }
        },
        error: function (json) {
            toastr.error(json["msg"], json["titulo"]);
        },
        complete: function () {
            div_cargando.style.display = "none";
        },
    });
}

function eliminarModalConfirm(idTipoDirectiva) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idTipoDirectiva);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function reiniciarId() {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(0);
}

function eliminar() {
    //OBTENGO EL ID DEL USUARIO QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idTipoDirectiva = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/tipos_directivas/eliminar",
        data: JSON.stringify({ idTipoDirectiva: idTipoDirectiva }),
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO EL ID EN EL MODAL EN 0
                $("#id-eliminar").val(0);
                //CARGO NUEVAMENTE LA TABLA
                cargarDatos(
                    "t-tipos_directivas",
                    "/tipos_directivas/cargartabla"
                );
                //QUITO EL MODAL
                $("#modal-eliminar").modal("hide");
                //PONGO LA ALERTA
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
        complete: function () {
            div_cargando.style.display = "none";
        },
    });
}
