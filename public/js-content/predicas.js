document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-predica").click(function () {
        //RESETAR EL FORM

        //PONER EL ID EN 0 PARA QUE SEA CREACION
        $("#idPredica").val(0);

        //RESETEO EL FORM
        $("#form-predica").trigger("reset");

        //INICIALIZO EL SUMMERNOTE EN EL CAMPO
        iniciarSummernote(400, "descripcion_larga");

        //MUESTRO EL MODAL
        $("#modal-predica")
            .modal({
                backdrop: "static",
                keyboard: false,
            })
            .modal("show");
    });

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
        dropdownParent: $("#modal-predica .modal-body"),
    });

    cargarDatos("t-predica", "/predicas/cargartabla");

    $("#form-predica").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: APP_URL + "/predicas/guardar",
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
                    cargarDatos("t-predica", "/predicas/cargartabla");
                    $("#modal-predica").modal("hide");
                    $("#form-predica").trigger("reset");
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

function editarPredicaModal(idPredica) {
    $.ajax({
        type: "GET",
        url: APP_URL + "/predicas/ver/" + idPredica,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS A EDITAR, INCLUYENDO EL ID
                $("#idPredica").val(json["datos"]["id"]);
                $("#nombre").val(json["datos"]["nombre"]);
                $("#estado").val(json["datos"]["estado"]).select2();
                iniciarSummernote(400, "descripcion_larga");
                $("#descripcion_larga").summernote(
                    "code",
                    json["datos"]["descripcion_larga"]
                );
                $("#descripcion_corta").val(json["datos"]["descripcion_corta"]);
                //MUESTRO EL MODAL
                $("#modal-predica").modal("show");

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

function eliminarPredicaModalConfirm(idPredica) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idPredica);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function reiniciarId() {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(0);
}

function eliminarPredica() {
    //OBTENGO EL ID DEL USUARIO QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idPredica = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/predicas/eliminar",
        data: JSON.stringify({ idPredica: idPredica }),
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
                cargarDatos("t-predica", "/predicas/cargartabla");
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
