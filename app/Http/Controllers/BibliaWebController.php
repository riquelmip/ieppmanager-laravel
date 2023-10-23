<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Alabanza;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BibliaWebController extends Controller
{

    /* ---------------------------------------------------------------------------
                                ESPAÑOL
    ----------------------------------------------------------------------------*/

    public function bibliarv()
    {
        try {
            $pathToIndiceBiblia = public_path('Biblias/indiceBiblia.json');
            $contenidoIndiceBiblia = file_get_contents($pathToIndiceBiblia);

            // Convierte el contenido JSON a un array asociativo
            $indiceBibliaArray = json_decode($contenidoIndiceBiblia, true);

            return view('content.biblias-web.indiceBiblia', compact('indiceBibliaArray'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function verLibro($numLibro, Request $request)
    {
        try {
            $pathToIndiceBiblia = public_path('Biblias/indiceBiblia.json');
            $contenidoIndiceBiblia = file_get_contents($pathToIndiceBiblia);

            // Convierte el contenido JSON a un array asociativo
            $indiceBibliaArray = json_decode($contenidoIndiceBiblia, true);

            $nombreLibro = null;

            foreach ($indiceBibliaArray as $libro) {
                if ($libro['numero'] == $numLibro) {
                    $nombreLibro = $libro['titulo'];
                    break;  // Se encontró el libro, salir del bucle
                }
            }

            if ($nombreLibro === null) {
                return view('content.error.404'); // No se encontró el libro, mostrar error
            }

            $pathToLibroCarpeta = public_path('Biblias/Biblia/' . $nombreLibro);
            $numArchivos = count(array_diff(scandir($pathToLibroCarpeta), array('.', '..')));

            // Array para almacenar los capítulos
            $capitulos = [];

            for ($i = 1; $i <= $numArchivos; $i++) {
                // Ruta al archivo del capítulo
                $pathToCapitulo = public_path('Biblias/Biblia/' . $nombreLibro . '/Capitulo' . $i . '.json');

                // Obtener el contenido del capítulo y convertirlo a un array asociativo
                $contenidoCapitulo = json_decode(file_get_contents($pathToCapitulo), true);

                // Agregar los versículos del capítulo al array de capítulos
                $capitulos[] = $contenidoCapitulo[0];
            }

            $page = $request->query('page', 1); // Obtén el número de página de la solicitud, por defecto es 1 si no se proporciona
            $perPage = 1; // Número de capítulos por página

            // Pagina los capítulos usando el método paginate de Laravel
            $capitulosPaginados = new LengthAwarePaginator(
                array_slice($capitulos, ($page - 1) * $perPage, $perPage),
                count($capitulos),
                $perPage,
                $page,
                ['path' => $request->url(), 'query' => $request->query()]
            );
            // Información general del libro
            $infoLibro = [
                'nombre' => $nombreLibro,
                'numCapitulos' => $numArchivos,
                'capitulos' => $capitulos,
                'capitulosPaginados' => $capitulosPaginados
            ];
            // Aquí puedes usar $infoLibro para lo que necesites





            //PARA LOS COMENTARIOS
            $pathToIndiceComentarios = public_path('ComentariosBiblias/indice.json');
            $contenidoIndiceComentarios = file_get_contents($pathToIndiceComentarios);

            // Decodificar el JSON a un array asociativo
            $contenidoIndiceComentariosJSON = json_decode($contenidoIndiceComentarios, true);

            // Array para almacenar la información de las biblias de estudio
            $bibliasEstudio = [];

            // Verificar si la decodificación fue exitosa
            if ($contenidoIndiceComentariosJSON !== null) {
                foreach ($contenidoIndiceComentariosJSON as $tipoBibliaEstudio) {
                    $numeroBE = $tipoBibliaEstudio['numero'];
                    $nombreBE = $tipoBibliaEstudio['titulo'];

                    // Obtener el contenido de la biblia de estudio específico y convertirlo a un array asociativo
                    $pathToBibliaE = public_path("ComentariosBiblias/{$nombreBE}/Verse.json");
                    $contenidoVerseBibliaE = json_decode(file_get_contents($pathToBibliaE), true);

                    // Verificar si la decodificación fue exitosa
                    if ($contenidoVerseBibliaE !== null) {
                        // Filtrar los versículos que solo sean del libro requerido
                        $versiculosFiltrados = array_filter($contenidoVerseBibliaE['RECORDS'], function ($versiculo) use ($numLibro) {
                            return $versiculo['Book'] == $numLibro;
                        });

                        // Filtrar los versículos que solo sean del capitulo requerido
                        $versiculosFiltrados = array_filter($versiculosFiltrados, function ($versiculo) use ($page) {
                            return $versiculo['ChapterBegin'] == $page;
                        });


                        // Crear un objeto con la información de la biblia de estudio actual
                        $bibliaEstudio = [
                            'numero' => $numeroBE,
                            'nombre' => $nombreBE,
                            'versiculosFiltrados' => array_values($versiculosFiltrados)
                        ];

                        // Agregar el objeto al array de biblias de estudio
                        $bibliasEstudio[] = $bibliaEstudio;
                    }
                }
            }




            return view('content.biblias-web.capitulo', compact('infoLibro', 'capitulos', 'capitulosPaginados', 'numLibro', 'bibliasEstudio'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function verVersiculo($numLibro, $numCapitulo, Request $request)
    {
        try {
            $pathToIndiceBiblia = public_path('Biblias/indiceBiblia.json');
            $contenidoIndiceBiblia = file_get_contents($pathToIndiceBiblia);

            // Convierte el contenido JSON a un array asociativo
            $indiceBibliaArray = json_decode($contenidoIndiceBiblia, true);

            $nombreLibro = null;

            foreach ($indiceBibliaArray as $libro) {
                if ($libro['numero'] == $numLibro) {
                    $nombreLibro = $libro['titulo'];
                    break;  // Se encontró el libro, salir del bucle
                }
            }

            if ($nombreLibro === null) {
                return view('content.error.404'); // No se encontró el libro, mostrar error
            }

            // Obtener el contenido del capítulo específico y convertirlo a un array asociativo
            $pathToCapitulo = public_path("Biblias/Biblia/{$nombreLibro}/Capitulo{$numCapitulo}.json");
            $contenidoCapitulo = json_decode(file_get_contents($pathToCapitulo), true);

            if (empty($contenidoCapitulo)) {
                return view('content.error.404'); // No se encontró el capítulo, mostrar error
            }

            // Obtener el capítulo y sus versículos
            $capitulo = $contenidoCapitulo[0];
            $versiculos = $capitulo['versiculos'];

            // Paginar los versículos
            $page = $request->query('page', 1);
            $perPage = 1; // Número de versículos por página

            $versiculosPaginados = new LengthAwarePaginator(
                array_slice($versiculos, ($page - 1) * $perPage, $perPage),
                count($versiculos),
                $perPage,
                $page,
                ['path' => $request->url(), 'query' => $request->query()]
            );

            // Información general del libro
            $infoLibro = [
                'nombre' => $nombreLibro,
                'capitulo' => $capitulo,
                'versiculosPaginados' => $versiculosPaginados
            ];


            return view('content.biblias-web.versiculo', compact('infoLibro', 'numLibro', 'versiculosPaginados', 'numCapitulo'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    /* ---------------------------------------------------------------------------
                                INGLES
    ----------------------------------------------------------------------------*/

    public function bibliahb()
    {
        try {
            $pathToIndiceBiblia = public_path('Biblias/indiceBible.json');
            $contenidoIndiceBiblia = file_get_contents($pathToIndiceBiblia);

            // Convierte el contenido JSON a un array asociativo
            $indiceBibliaArray = json_decode($contenidoIndiceBiblia, true);

            return view('content.biblias-web.indiceBible', compact('indiceBibliaArray'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function viewBook($numLibro, Request $request)
    {
        try {
            $pathToIndiceBiblia = public_path('Biblias/indiceBible.json');
            $contenidoIndiceBiblia = file_get_contents($pathToIndiceBiblia);

            // Convierte el contenido JSON a un array asociativo
            $indiceBibliaArray = json_decode($contenidoIndiceBiblia, true);

            $nombreLibro = null;

            foreach ($indiceBibliaArray as $libro) {
                if ($libro['numero'] == $numLibro) {
                    $nombreLibro = $libro['titulo'];
                    break;  // Se encontró el libro, salir del bucle
                }
            }

            if ($nombreLibro === null) {
                return view('content.error.404'); // No se encontró el libro, mostrar error
            }

            $pathToLibroCarpeta = public_path('Biblias/Bible/' . $nombreLibro);
            $numArchivos = count(array_diff(scandir($pathToLibroCarpeta), array('.', '..')));

            // Array para almacenar los capítulos
            $capitulos = [];

            for ($i = 1; $i <= $numArchivos; $i++) {
                // Ruta al archivo del capítulo
                $pathToCapitulo = public_path('Biblias/Bible/' . $nombreLibro . '/Capitulo' . $i . '.json');

                // Obtener el contenido del capítulo y convertirlo a un array asociativo
                $contenidoCapitulo = json_decode(file_get_contents($pathToCapitulo), true);

                // Agregar los versículos del capítulo al array de capítulos
                $capitulos[] = $contenidoCapitulo[0];
            }

            $page = $request->query('page', 1); // Obtén el número de página de la solicitud, por defecto es 1 si no se proporciona
            $perPage = 1; // Número de capítulos por página

            // Pagina los capítulos usando el método paginate de Laravel
            $capitulosPaginados = new LengthAwarePaginator(
                array_slice($capitulos, ($page - 1) * $perPage, $perPage),
                count($capitulos),
                $perPage,
                $page,
                ['path' => $request->url(), 'query' => $request->query()]
            );
            // Información general del libro
            $infoLibro = [
                'nombre' => $nombreLibro,
                'numCapitulos' => $numArchivos,
                'capitulos' => $capitulos,
                'capitulosPaginados' => $capitulosPaginados
            ];
            // Aquí puedes usar $infoLibro para lo que necesites

            return view('content.biblias-web.chapter', compact('infoLibro', 'capitulos', 'capitulosPaginados', 'numLibro'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function viewChapter($numLibro, $numCapitulo, Request $request)
    {
        try {
            $pathToIndiceBiblia = public_path('Biblias/indiceBible.json');
            $contenidoIndiceBiblia = file_get_contents($pathToIndiceBiblia);

            // Convierte el contenido JSON a un array asociativo
            $indiceBibliaArray = json_decode($contenidoIndiceBiblia, true);

            $nombreLibro = null;

            foreach ($indiceBibliaArray as $libro) {
                if ($libro['numero'] == $numLibro) {
                    $nombreLibro = $libro['titulo'];
                    break;  // Se encontró el libro, salir del bucle
                }
            }

            if ($nombreLibro === null) {
                return view('content.error.404'); // No se encontró el libro, mostrar error
            }

            // Obtener el contenido del capítulo específico y convertirlo a un array asociativo
            $pathToCapitulo = public_path("Biblias/Bible/{$nombreLibro}/Capitulo{$numCapitulo}.json");
            $contenidoCapitulo = json_decode(file_get_contents($pathToCapitulo), true);

            if (empty($contenidoCapitulo)) {
                return view('content.error.404'); // No se encontró el capítulo, mostrar error
            }

            // Obtener el capítulo y sus versículos
            $capitulo = $contenidoCapitulo[0];
            $versiculos = $capitulo['versiculos'];

            // Paginar los versículos
            $page = $request->query('page', 1);
            $perPage = 1; // Número de versículos por página

            $versiculosPaginados = new LengthAwarePaginator(
                array_slice($versiculos, ($page - 1) * $perPage, $perPage),
                count($versiculos),
                $perPage,
                $page,
                ['path' => $request->url(), 'query' => $request->query()]
            );

            // Información general del libro
            $infoLibro = [
                'nombre' => $nombreLibro,
                'capitulo' => $capitulo,
                'versiculosPaginados' => $versiculosPaginados
            ];

            return view('content.biblias-web.verse', compact('infoLibro', 'numLibro', 'versiculosPaginados', 'numCapitulo'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }
}
