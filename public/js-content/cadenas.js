var arrayCorosTemp = [];
var contador = 0;

document.addEventListener("DOMContentLoaded", function () {
    $("#btn-nuevo-cadena").click(function () {
        //RESETAR EL FORM

        //PONER EL ID EN 0 PARA QUE SEA CREACION
        $("#idCadena").val(0);

        //PONGO EL CORO Y NOTA EN OPCION SELECCIONAR
        $("#id_coro").val(0).select2();
        $("#nota").val(0).select2();

        //RESETEO EL FORM
        $("#form-cadenas").trigger("reset");

        // Utilizamos el método splice para eliminar todos los elementos del array
        arrayCorosTemp.splice(0, arrayCorosTemp.length);
        //INICIALIZO LA TABLA
        reiniciarTablaCorosTemp();

        contador = 0;

        //MUESTRO EL MODAL
        $("#modal-cadenas")
            .modal({
                backdrop: "static",
                keyboard: false,
            })
            .modal("show");
    });

    selectCoros();

    //INICIALIZANDO LOS SELECT2
    iniciarSelects('modal-cadenas')

    cargarDatos("t-cadenas", "/cadenas/cargartabla/" + $("#tipo_cadena").val());

    $("#form-cadenas").submit(function (event) {
        event.preventDefault(); // detiene el comportamiento predeterminado del formulario
        // Obtener el valor del campo que deseas agregar al formulario
        var tipo_cadena = $("#tipo_cadena").val();
        // Convertir el array a una cadena JSON
        var jsonCoros = JSON.stringify(arrayCorosTemp);
        // Agregar el valor al objeto formData
        var formData = $(this).serializeArray();
        formData.push({ name: "tipo_cadena", value: tipo_cadena });
        formData.push({ name: "coros", value: jsonCoros });
        formData = $.param(formData);
        $.ajax({
            type: "POST",
            url: APP_URL + "/cadenas/guardar",
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
                        "t-cadenas",
                        "/cadenas/cargartabla/" + $("#tipo_cadena").val()
                    );
                    $("#modal-cadenas").modal("hide");
                    $("#form-cadenas").trigger("reset");
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

function selectCoros() {
    $.ajax({
        type: "GET",
        url: APP_URL + "/cadenas/coros/" + $("#tipo_cadena").val(),
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO EL HTML
                $("#id_coro").empty().html(json["datos"]);

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

function añadirCoro() {
    let idCoro = parseInt($("#id_coro").val());

    // Utilizamos el método findIndex para buscar el índice del objeto
    let indice = arrayCorosTemp.findIndex(function (elemento) {
        return elemento.id === idCoro;
    });

    // Si el índice es -1, no se encontró ningún objeto con el id buscado
    if (indice === -1) {
        $.ajax({
            type: "GET",
            url: APP_URL + "/cadenas/obtenerCoro/" + idCoro,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            beforeSend: function () {
                div_cargando.style.display = "flex";
            },
            success: function (json) {
                if (json["estado"]) {
                    contador = contador + 1;
                    arrayCorosTemp.push({
                        id: json["datos"]["id"],
                        numero: contador,
                        nombre: json["datos"]["nombre"],
                        accion:
                            '<button type="button" onclick="eliminarCoro(\'' +
                            json["datos"]["id"] +
                            '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>',
                    });
                    reiniciarTablaCorosTemp();

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
    } else {
        toastr.error("Ese coro ya está en la cadena", "Error");
    }
}

function reiniciarTablaCorosTemp() {
    let tablaHTML = "";
    arrayCorosTemp.forEach((coro) => {
        // Accediendo a los atributos del objeto
        tablaHTML +=
            "<tr>" +
            "<td>" +
            coro.numero +
            "</td>" +
            "<td>" +
            coro.nombre +
            "</td>" +
            '<td class="text-center">' +
            coro.accion +
            "</td>" +
            "</tr>";
    });

    //DESTRUYO LA TABLA
    $("#t-cadena-temp").DataTable().destroy();

    //PONGO EL HTML EN EL DIV TBODY DE LA TABLA
    $("#t-cadena-temp-body").empty().html(tablaHTML);

    //INICIALIZO LA TABLA
    datatable("t-cadena-temp");

    console.log(arrayCorosTemp);
}

function eliminarCoro(idCoro) {
    let idBuscado = parseInt(idCoro);

    // Utilizamos el método filter para crear un nuevo array sin el objeto buscado
    /*En este ejemplo, utilizamos el método filter() para crear un nuevo array que contenga todos los elementos del array arrayCorosTemp excepto aquellos que tengan el id igual a idBuscado. Luego, asignamos el nuevo array resultante a la variable arrayCorosTemp, por lo que el objeto con el id buscado ha sido eliminado del array original. */
    arrayCorosTemp = arrayCorosTemp.filter(function (elemento) {
        return elemento.id !== idBuscado;
    });

    reiniciarTablaCorosTemp();
}

function editarCadenaModal(idCadena) {
    // Utilizamos el método splice para eliminar todos los elementos del array
    arrayCorosTemp.splice(0, arrayCorosTemp.length);
    //INICIALIZO LA TABLA
    reiniciarTablaCorosTemp();

    contador = 0;

    $.ajax({
        type: "GET",
        url: APP_URL + "/cadenas/ver/" + idCadena,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //PONGO LOS DATOS A EDITAR, INCLUYENDO EL ID
                $("#idCadena").val(json["datos"]["id"]);
                $("#nombre").val(json["datos"]["nombre"]);
                json["datos"]["nota"] == null
                    ? $("#nota").val(0).select2()
                    : $("#nota").val(json["datos"]["nota"]).select2();

                $("#estado").val(json["datos"]["estado"]).select2();

                json["datos"]["coros"].forEach((c) => {
                    contador = c["numero"];
                    arrayCorosTemp.push({
                        id: c["id_coro"],
                        numero: contador,
                        nombre: c["nombre"],
                        accion:
                            '<button type="button" onclick="eliminarCoro(\'' +
                            c["id_coro"] +
                            '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>',
                    });
                    reiniciarTablaCorosTemp();
                });

                //MUESTRO EL MODAL
                $("#modal-cadenas").modal("show");

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

function eliminarCadenaModalConfirm(idCadena) {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(idCadena);
    //MUESTRO EL MODAL
    $("#modal-eliminar").modal("show");
}

function reiniciarId() {
    //PONGO EL ID DEL REGISTRO A ELIMINAR
    $("#id-eliminar").val(0);
}

function eliminarCadena() {
    //OBTENGO EL ID DEL USUARIO QUE ESTA OCULTO EN EL INPUT DEL MODAL
    idCadena = $("#id-eliminar").val();
    //HAGO LA PETICION
    $.ajax({
        type: "POST",
        url: APP_URL + "/cadenas/eliminar",
        data: JSON.stringify({ idCadena: idCadena }),
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
                    "t-cadenas",
                    "/cadenas/cargartabla/" + $("#tipo_cadena").val()
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
