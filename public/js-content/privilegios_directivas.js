document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-privilegio_directiva").click(function () {
        //RESETAR EL FORM

        //PONER EL ID EN 0 PARA QUE SEA CREACION
        $("#idPrivilegioDirectiva").val(0);
        $("#directiva").val(0).select2();

        //RESETEO EL FORM
        $("#form-privilegios_directivas").trigger("reset");

        //MUESTRO EL MODAL
        $("#modal-privilegios_directivas").modal("show");
    });

    selectDirectivas();

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
        dropdownParent: $("#modal-privilegios_directivas .modal-body"),
    });

    cargarDatos(
        "t-privilegios_directivas",
        "/privilegios_directivas/cargartabla"
    );

    $("#form-privilegios_directivas").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: APP_URL + "/privilegios_directivas/guardar",
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
                        "t-privilegios_directivas",
                        "/privilegios_directivas/cargartabla"
                    );
                    $("#modal-privilegios_directivas").modal("hide");
                    $("#form-privilegios_directivas").trigger("reset");
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

function selectDirectivas() {
    //obtenerPermisos();
    $.ajax({
        type: "GET",
        url: APP_URL + "/privilegios_directivas/directivas",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO EL HTML
                $("#directiva").empty().html(json["datos"]);

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

function editarModal(idPrivilegioDirectiva) {
    $.ajax({
        type: "GET",
        url: APP_URL + "/privilegios_directivas/ver/" + idPrivilegioDirectiva,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS DEL ROL A EDITR, INCLUYENDO EL ID
                $("#idPrivilegioDirectiva").val(json["datos"]["id"]);
                $("#dia").val(json["datos"]["dia"]);
                $("#fecha").val(json["datos"]["fecha"]);
                $("#directiva").val(json["datos"]["id_directiva"]).select2();
                $("#inicio").val(json["datos"]["inicio"]);
                $("#alabanzas").val(json["datos"]["alabanzas"]);
                $("#coros").val(json["datos"]["coros"]);
                $("#presentacion").val(json["datos"]["presentacion"]);
                $("#ofrenda").val(json["datos"]["ofrenda"]);
                $("#talento").val(json["datos"]["talento"]);
                $("#alabanza_especial").val(json["datos"]["alabanza_especial"]);
                $("#adoracion").val(json["datos"]["adoracion"]);
                $("#mensaje").val(json["datos"]["mensaje"]);
                $("#aseo").val(json["datos"]["aseo"]);
                $("#anuncios").val(json["datos"]["anuncios"]);

                //MUESTRO EL MODAL
                $("#modal-privilegios_directivas").modal("show");

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

function eliminarModalConfirm(idPrivilegioDirectiva) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idPrivilegioDirectiva);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function reiniciarId() {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(0);
}

function eliminar() {
    //OBTENGO EL ID DEL USUARIO QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idPrivilegioDirectiva = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/privilegios_directivas/eliminar",
        data: JSON.stringify({ idPrivilegioDirectiva: idPrivilegioDirectiva }),
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
                    "t-privilegios_directivas",
                    "/privilegios_directivas/cargartabla"
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
