document.addEventListener("DOMContentLoaded", function () {
    cargarDatos("t-cancionero-web", "/public/cancionero/cargartabla/autor/0");
});

function cargarTablaAutores(idAutor) {
    cargarDatos(
        "t-cancionero-web",
        "/public/cancionero/cargartabla/autor/" + idAutor
    );
}
