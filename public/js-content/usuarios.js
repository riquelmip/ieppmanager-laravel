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

    $("#estado").select2();
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

    $("#form-permisos").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: APP_URL + "/usuarios/permisos",
            data: formData,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            beforeSend: function () {
                div_cargando.style.display = "flex";
            },
            success: function (json) {
                if (json["estado"]) {
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

function permisosRolModal(idRol) {
    //obtenerPermisos();
    $.ajax({
        type: "POST",
        url: APP_URL + "/usuarios/permisos",
        data: JSON.stringify({ idRol: idRol }),
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //CREO EL HTML DELA LISTA DE PERMISOS PARA LA TABLA

                //console.log(json);
                //DESTRUYO LA TABLA
                $("#t-usuarios-permisos").DataTable().destroy();

                //PONGO EL HTML EN EL DIV TBODY DE LA TABLA
                $("#t-usuarios-permisos-body").empty().html(json["datos"]);

                //OBTENGO EL ARRAY DE TODOS LOS ELEMENTOS CON LA CLASE DE SWITCH
                var elems = Array.prototype.slice.call(
                    document.querySelectorAll(".js-switch")
                );

                //RECORRO EL ARRAY DE TODOS LOS ELEMENTOS CON LA CLASE DE SWITCH Y CREO CADA UNO
                elems.forEach(function (html) {
                    new Switchery(html);
                });

                //INICIALIZO LA TABLA
                datatable("t-usuarios-permisos");

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
    $("#modal-permisos").modal("show");
}

function quitarPermiso(idPermiso, idRol) {
    //console.log(idPermiso, idRol);
    $.ajax({
        type: "POST",
        url: APP_URL + "/usuarios/quitarpermiso",
        data: JSON.stringify({ idPermiso: idPermiso, idRol: idRol }),
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                // Seleccionar el elemento HTML del switch
                let switchElem = $(
                    "#permiso-" + idPermiso + "-usuario-" + idRol
                )[0];

                // Guardar el estado actual del switch
                let isChecked = switchElem.checked;

                // Obtener el estado actual de data-switchery
                let dataSwitchery = switchElem.getAttribute("data-switchery");

                // Guardar el evento onchange original
                let originalOnChange = switchElem.onchange;

                // Eliminar el objeto Switchery del elemento HTML
                $(switchElem).next(".switchery").remove();

                // Cambiar el evento onchange a la nueva función
                switchElem.setAttribute(
                    "onchange",
                    "ponerPermiso(" + idPermiso + ", " + idRol + ")"
                );

                // Crear un nuevo objeto Switchery para el elemento
                let switchery = new Switchery(switchElem, {
                    /* nuevas opciones */
                });

                // Establecer el estado del switch
                if (isChecked) {
                    switchery.setPosition(true);
                } else {
                    switchery.setPosition(false);
                }

                // Establecer el estado actual de data-switchery
                switchElem.setAttribute("data-switchery", dataSwitchery);

                //MUESTRO LA ALERTA DE EXITO
                toastr.success(json["msg"], json["titulo"]);

                // new Switchery(switchElem);
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

function ponerPermiso(idPermiso, idRol) {
    //console.log(idPermiso, idRol);
    $.ajax({
        type: "POST",
        url: APP_URL + "/usuarios/ponerpermiso",
        data: JSON.stringify({ idPermiso: idPermiso, idRol: idRol }),
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                // Seleccionar el elemento HTML del switch
                let switchElem = $(
                    "#permiso-" + idPermiso + "-usuario-" + idRol
                )[0];

                // Guardar el estado actual del switch
                let isChecked = switchElem.checked;

                // Obtener el estado actual de data-switchery
                let dataSwitchery = switchElem.getAttribute("data-switchery");

                // Guardar el evento onchange original
                let originalOnChange = switchElem.onchange;

                // Eliminar el objeto Switchery del elemento HTML
                $(switchElem).next(".switchery").remove();

                // Cambiar el evento onchange a la nueva función
                switchElem.setAttribute(
                    "onchange",
                    "quitarPermiso(" + idPermiso + ", " + idRol + ")"
                );

                // Crear un nuevo objeto Switchery para el elemento
                let switchery = new Switchery(switchElem, {
                    /* nuevas opciones */
                });

                // Establecer el estado del switch
                if (isChecked) {
                    switchery.setPosition(false);
                } else {
                    switchery.setPosition(true);
                }

                // Establecer el estado actual de data-switchery
                switchElem.setAttribute("data-switchery", dataSwitchery);

                //MUESTRO LA ALERTA DE EXITO
                toastr.success(json["msg"], json["titulo"]);

                // new Switchery(switchElem);
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

function editarRolModal(idRol) {
    $.ajax({
        type: "GET",
        url: APP_URL + "/usuarios/ver/" + idRol,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS DEL ROL A EDITR, INCLUYENDO EL ID
                $("#idRol").val(json["datos"]["id"]);
                $("#name").val(json["datos"]["name"]);

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

function eliminarRolModalConfirm(idRol) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idRol);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function eliminarRol() {
    //OBTENGO EL ID DEL ROL QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idRol = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/usuarios/eliminar",
        data: JSON.stringify({ idRol: idRol }),
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