toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
};

function datatable(tabla) {
    $("#" + tabla).DataTable({
        language: {
            decimal: ".",
            emptyTable: "No hay datos para mostrar",
            info: "Del _START_ al _END_ (_TOTAL_ total)",
            infoEmpty: "Del 0 al 0 (0 total)",
            infoFiltered: "(Filtrado de todas las _MAX_ entradas)",
            infoPostFix: "",
            thousands: "'",
            lengthMenu: "Mostrar _MENU_ entradas",
            loadingRecords: "Cargando...",
            processing: "Procesando...",
            search: "Buscar:",
            zeroRecords: "No hay resultados",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior",
            },
            aria: {
                sortAscending: ": Ordenar de manera Ascendente",
                sortDescending: ": Ordenar de manera Descendente ",
            },
        },
        pagingType: "full_numbers",
        lengthMenu: [
            [5, 10, 20, 25, 50, -1],
            [5, 10, 20, 25, 50, "Todos"],
        ],
        iDisplayLength: 5,
        responsive: true,
        stateSave: true, //Guarda el num de pag donde te quedaste
    });
}

function cargarDatos(tabla, ruta) {
    $.ajax({
        type: "GET",
        url: APP_URL + ruta,
        beforeSend: function () {
            div_cargando.style.display = "flex";
        },
        success: function (json) {
            if (json["estado"]) {
                //DESTRUYO LA TABLA
                $("#" + tabla)
                    .DataTable()
                    .destroy();

                //PONGO EL HTML EN EL DIV TBODY DE LA TABLA
                $("#" + tabla + "-body")
                    .empty()
                    .html(json["datos"]);

                //INICIALIZO LA TABLA
                datatable(tabla);

                //MUESTRO LA ALERTA DE EXITO
                //toastr.success(json["msg"], json["titulo"]);
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

function iniciarSummernote(tamañoInicial, idContenedor) {
    //DESTRUYO EL SUMMERNOTE SI EXISTIERA PARA LUEGO QUITAR EL TEXTO ANTERIOR QUE PUDO QUEDAR
    $("#" + idContenedor).summernote("destroy"); // Destruye el editor actual
    $("#" + idContenedor).val(""); // Limpia el contenido del editor

    //INICIALIZO EL SUMMERNOTE
    $("#" + idContenedor).summernote({
        height: tamañoInicial,
        toolbar: [
            ["style", ["style"]],
            ["fontname", ["fontname"]],
            ["font", ["bold", "underline", "clear"]],
            ["color", ["color"]],
            ["para", ["ul", "ol", "paragraph"]],
            ["insert", ["link"]],
            ["table", ["table"]],
            // ["view", ["codeview"]],
        ],
        fullscreen: false,
    });
}

function iniciarSelects(modal) {
    $(".select2").select2({
        language: {
            noResults: function () {
                return "No se encontraron resultados";
            },
        },
        escapeMarkup: function (markup) {
            return markup;
        },
        dropdownParent: $("#" + modal + " .modal-body"),
    });
}

function iniciarSelectIndividual(select, modal) {
    $("#" + select).select2({
        language: {
            noResults: function () {
                return "No se encontraron resultados";
            },
        },
        escapeMarkup: function (markup) {
            return markup;
        },
        dropdownParent: $("#" + modal + " .modal-body"),
    });
}
