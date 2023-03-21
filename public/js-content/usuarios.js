document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-usuario").click(function () {
        //RESETAR EL FORM

        //PONER EL ID EN 0 PARA QUE SEA CREACION
        $("#idUsuario").val(0);

        //RESETEO EL FORM
        $("#form-usuarios").trigger("reset");

        //MUESTRO EL MODAL
        $("#modal-usuarios").modal("show");
    });

    selectRoles();

    //INICIALIZANDO LOS SELECT2
    $('.select2').select2({
        "language": {
            "noResults": function () {
                return "No se encontraron resultados";
            }
        },
        escapeMarkup: function (markup) {
            return markup;
        },
        dropdownParent: $('#modal-usuarios .modal-body')
    });

    cargarDatos("t-usuarios", "/usuarios/cargartabla");

    $("#form-usuarios").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: APP_URL + "/usuarios/guardar",
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
                    cargarDatos("t-usuarios", "/usuarios/cargartabla");
                    $("#modal-usuarios").modal("hide");
                    $("#form-usuarios").trigger("reset");
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

function selectRoles() {
    //obtenerPermisos();
    $.ajax({
        type: "GET",
        url: APP_URL + "/usuarios/roles",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {

                //PONGO EL HTML 
                $("#rol").empty().html(json["datos"]);

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

function editarUsuarioModal(idUsuario) {
    $.ajax({
        type: "GET",
        url: APP_URL + "/usuarios/ver/" + idUsuario,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS DEL ROL A EDITR, INCLUYENDO EL ID
                $("#idUsuario").val(json["datos"]["id"]);
                $("#username").val(json["datos"]["username"]);
                $("#email").val(json["datos"]["email"]);
                if (json["datos"]["roles"] == 0) {
                    $("#rol").val(0).select2();
                } else {
                    $("#rol").val(json["datos"]["roles"][0]['id']).select2();
                }

                $("#estado").val(json["datos"]["estado"]);

                //MUESTRO EL MODAL
                $("#modal-usuarios").modal("show");

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

function eliminarUsuarioModalConfirm(idUsuario) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idUsuario);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function reiniciarId() {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(0);
}

function eliminarUsuario() {
    //OBTENGO EL ID DEL USUARIO QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idUsuario = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/usuarios/eliminar",
        data: JSON.stringify({ idUsuario: idUsuario }),
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
                cargarDatos("t-usuarios", "/usuarios/cargartabla");
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






