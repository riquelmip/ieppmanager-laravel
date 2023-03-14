document.addEventListener("DOMContentLoaded", function () {
    // código a ejecutar cuando la página se carga

    $("#btn-nuevo-rol").click(function () {
        $.ajax({
            type: "GET",
            url: URL_RUTA + "/roles/permisos",
            beforeSend: function () {
                // $(boton).prop('disabled', true).html(''
                //     +'<div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div>'
                // );
            },
            success: function (json) {
                if (json["estado"]) {
                    //CREO EL HTML DELA LISTA DE PERMISOS PARA LA TABLA
                    let permisosHTML = "";

                    for (let i = 0; i < json["datos"].length; i++) {
                        let permiso = json["datos"][i];

                        permisosHTML +=
                            "<tr>" +
                            "<td>" +
                            permiso["id"] +
                            "</td>" +
                            "<td>" +
                            permiso["name"] +
                            "</td>" +
                            '<td class="text-center">' +
                            '<input class="js-switch" type="checkbox"></input>' +
                            "</tr>";
                    }

                    //DESTRUYO LA TABLA
                    $("#t-roles-permisos").DataTable().destroy();

                    //PONGO EL HTML EN EL DIV TBODY DE LA TABLA
                    $("#t-roles-permisos-body").empty().html(permisosHTML);

                    //OBTENGO EL ARRAY DE TODOS LOS ELEMENTOS CON LA CLASE DE SWITCH
                    var elems = Array.prototype.slice.call(
                        document.querySelectorAll(".js-switch")
                    );

                    //RECORRO EL ARRAY DE TODOS LOS ELEMENTOS CON LA CLASE DE SWITCH Y CREO CADA UNO
                    elems.forEach(function (html) {
                        new Switchery(html);
                    });

                    //INICIALIZO LA TABLA
                    datatable("t-roles-permisos");

                    //MUESTRO LA ALERTA DE EXITO
                    toastr.success(json["msg"], "Éxito");

                    //MUESTRO EL MODAL
                    $("#modal-roles").modal();
                } else {
                    toastr.error(json["msg"], "Error");
                }
            },
            error: function (json) {
                toastr.success("Ocurrió un error", "Error");
            },
        });
    });

    datatable("t-roles");
});
