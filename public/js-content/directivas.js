document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-directiva").click(function () {
        //RESETAR EL FORM

        //PONER EL ID EN 0 PARA QUE SEA CREACION
        $("#idDirectiva").val(0);
        $("#tipo_directiva").val(0).select2();

        //RESETEO EL FORM
        $("#form-directivas").trigger("reset");

        //MUESTRO EL MODAL
        $("#modal-directivas").modal("show");
    });

    selectTiposDirectivas();

    //INICIALIZANDO LOS SELECT2
    $(".select2").select2({
        language: {
            noResults: function () {
                return "No se encontraron resultados";
            },
        },
        escapeMarkup: function (markup) {
            return markup;
        },
        dropdownParent: $("#modal-directivas .modal-body"),
    });

    cargarDatos("t-directivas", "/directivas/cargartabla");

    $("#form-directivas").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: APP_URL + "/directivas/guardar",
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
                    cargarDatos("t-directivas", "/directivas/cargartabla");
                    $("#modal-directivas").modal("hide");
                    $("#form-directivas").trigger("reset");
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

function selectTiposDirectivas() {
    //obtenerPermisos();
    $.ajax({
        type: "GET",
        url: APP_URL + "/directivas/tipos_directivas",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO EL HTML
                $("#tipo_directiva").empty().html(json["datos"]);

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

function editarModal(idDirectiva) {
    $.ajax({
        type: "GET",
        url: APP_URL + "/directivas/ver/" + idDirectiva,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS DEL ROL A EDITR, INCLUYENDO EL ID
                $("#idDirectiva").val(json["datos"]["id"]);
                $("#nombre").val(json["datos"]["nombre"]);
                $("#anio").val(json["datos"]["anio"]);
                $("#pastor").val(json["datos"]["pastor"]);
                $("#tipo_directiva")
                    .val(json["datos"]["id_tipo_directiva"])
                    .select2();
                $("#presidente").val(json["datos"]["presidente"]);
                $("#vicepresidente").val(json["datos"]["vicepresidente"]);
                $("#secretario").val(json["datos"]["secretario"]);
                $("#tesorero").val(json["datos"]["tesorero"]);
                $("#vocal1").val(json["datos"]["vocal1"]);
                $("#vocal2").val(json["datos"]["vocal2"]);
                $("#vocal3").val(json["datos"]["vocal3"]);
                $("#directiva_actual").val(json["datos"]["directiva_actual"]);
                $("#estado").val(json["datos"]["estado"]);

                //MUESTRO EL MODAL
                $("#modal-directivas").modal("show");

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

function eliminarModalConfirm(idDirectiva) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idDirectiva);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function reiniciarId() {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(0);
}

function eliminar() {
    //OBTENGO EL ID DEL USUARIO QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idDirectiva = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/directivas/eliminar",
        data: JSON.stringify({ idDirectiva: idDirectiva }),
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
                cargarDatos("t-directivas", "/directivas/cargartabla");
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
