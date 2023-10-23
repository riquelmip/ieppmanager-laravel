document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-himnario").click(function () {
        //RESETAR EL FORM

        //PONER EL ID EN 0 PARA QUE SEA CREACION
        $("#idHimnario").val(0);

        //PONGO EL AUTOR Y NOTA EN OPCION SELECCIONAR
        $("#id_autor").val(0).select2();
        $("#nota").val(0).select2();
        $("#tipo_video").val(0).select2();

        //RESETEO EL FORM
        $("#form-himnario").trigger("reset");

        //INICIALIZO EL SUMMERNOTE EN EL CAMPO
        iniciarSummernote(300, "letra");

        //MUESTRO EL MODAL
        $("#modal-himnario")
            .modal({
                backdrop: "static",
                keyboard: false,
            })
            .modal("show");
    });

    selectAutores();

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
        dropdownParent: $("#modal-himnario .modal-body"),
    });

    cargarDatos("t-himnario", "/himnario/cargartabla");

    $("#form-himnario").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: APP_URL + "/himnario/guardar",
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
                    cargarDatos("t-himnario", "/himnario/cargartabla");
                    $("#modal-himnario").modal("hide");
                    $("#form-himnario").trigger("reset");
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

function selectAutores() {
    $.ajax({
        type: "GET",
        url: APP_URL + "/himnario/autores",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO EL HTML
                $("#id_autor").empty().html(json["datos"]);

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

function editarAlabanzaHimnarioModal(idHimnario) {
    $.ajax({
        type: "GET",
        url: APP_URL + "/himnario/ver/" + idHimnario,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS A EDITAR, INCLUYENDO EL ID
                $("#idHimnario").val(json["datos"]["id"]);
                $("#numero_himnario").val(json["datos"]["numero_himnario"]);
                $("#nombre").val(json["datos"]["nombre"]);
                $("#tipo_video").val(json["datos"]["tipo_video"]).select2();
                $("#url_video").val(json["datos"]["url_video"]);
                json["datos"]["id_autor"] == null
                    ? $("#id_autor").val(0).select2()
                    : $("#id_autor").val(json["datos"]["id_autor"]).select2();

                json["datos"]["nota"] == null
                    ? $("#nota").val(0).select2()
                    : $("#nota").val(json["datos"]["nota"]).select2();

                $("#estado").val(json["datos"]["estado"]).select2();
                //$("#letra").val(json["datos"]["letra"]);

                iniciarSummernote(400, "letra");
                $("#letra").summernote("code", json["datos"]["letra"]);

                //MUESTRO EL MODAL
                $("#modal-himnario").modal("show");

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

function eliminarAlabanzaHimnarioModalConfirm(idHimnario) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idHimnario);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function reiniciarId() {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(0);
}

function eliminarAlabanzaHimnario() {
    //OBTENGO EL ID DEL USUARIO QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idHimnario = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/himnario/eliminar",
        data: JSON.stringify({ idHimnario: idHimnario }),
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
                cargarDatos("t-himnario", "/himnario/cargartabla");
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
