document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-coro").click(function () {
        //RESETAR EL FORM

        //PONER EL ID EN 0 PARA QUE SEA CREACION
        $("#idCoro").val(0);

        //PONGO EL AUTOR Y NOTA EN OPCION SELECCIONAR
        $("#id_autor").val(0).select2();
        $("#nota").val(0).select2();
        $("#tipo_video").val(0).select2();
        //RESETEO EL FORM
        $("#form-coros").trigger("reset");

        //INICIALIZO EL SUMMERNOTE EN EL CAMPO
        iniciarSummernote(300, "letra");

        //MUESTRO EL MODAL
        $("#modal-coros")
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
        dropdownParent: $("#modal-coros .modal-body"),
    });

    cargarDatos("t-coros", "/coros/cargartabla/" + $("#tipo_coro").val());

    $("#form-coros").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        // Obtener el valor del campo que deseas agregar al formulario
        var tipo_coro = $("#tipo_coro").val();

        // Agregar el valor al objeto formData
        var formData = $(this).serializeArray();
        formData.push({ name: "tipo_coro", value: tipo_coro });
        formData = $.param(formData);
        $.ajax({
            type: "POST",
            url: APP_URL + "/coros/guardar",
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
                        "t-coros",
                        "/coros/cargartabla/" + $("#tipo_coro").val()
                    );
                    $("#modal-coros").modal("hide");
                    $("#form-coros").trigger("reset");
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
        url: APP_URL + "/coros/autores",
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

function editarCoroModal(idCoro) {
    $.ajax({
        type: "GET",
        url: APP_URL + "/coros/ver/" + idCoro,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS A EDITAR, INCLUYENDO EL ID
                $("#idCoro").val(json["datos"]["id"]);
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
                $("#modal-coros").modal("show");

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

function eliminarCoroModalConfirm(idCoro) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idCoro);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function reiniciarId() {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(0);
}

function eliminarCoro() {
    //OBTENGO EL ID DEL USUARIO QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idCoro = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/coros/eliminar",
        data: JSON.stringify({ idCoro: idCoro }),
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
                    "t-coros",
                    "/coros/cargartabla/" + $("#tipo_coro").val()
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
