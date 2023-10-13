@extends('layouts.app')

@section('title', $infoLibro['nombre'] . ' ' . $capitulosPaginados[0]['capitulo'])


@section('page-name')
    @php
        $page_menu = 'biblias-web';
        $page_submenu = 'bible-web';
    @endphp
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <a title="Return to index" href="{{ route('public/biblias/holy-bible') }}"
                    class="btn btn-primary btn-icon btn-circle"><i class="fa fa-long-arrow-left"></i></a>

                {{-- Botón Anterior --}}
                <a title="Previous chapter" href="{{ $capitulosPaginados->previousPageUrl() }}"
                    class="btn btn-primary btn-icon btn-circle {{ $capitulosPaginados->onFirstPage() ? ' disabled' : '' }}">
                    <i class="fa fa-arrow-left"></i>
                </a>

                {{-- Botón Siguiente --}}
                <a title="Next chapter" href="{{ $capitulosPaginados->nextPageUrl() }}"
                    class="btn btn-primary btn-icon btn-circle {{ $capitulosPaginados->hasMorePages() ? '' : ' disabled' }}">
                    <i class="fa fa-arrow-right"></i>
                </a>

                <a title="Select chapter" data-target="#t-cap-modal" data-toggle="modal"
                    class="btn btn-primary btn-icon btn-circle"> <i class="fa fa-table"></i></a>
            </div>
            @foreach ($capitulosPaginados as $capitulo)
                <h2 class="text-center"><strong>Chapter {{ $capitulo['capitulo'] }}</strong></h2>
                <h4 class="text-center"><strong>{{ $capitulo['libro'] }}</strong></h4>
                <div class="list-group list-group-striped">
                    @foreach ($capitulo['versiculos'] as $index => $versiculo)
                        <a class="list-group-item"
                            href="{{ route('book.chapter', ['numlibro' => $numLibro, 'numcapitulo' => $capitulosPaginados[0]['capitulo'], 'page' => $index + 1]) }}">
                            {{ $versiculo }}
                        </a>
                    @endforeach

                </div>
            @endforeach

            <div class="text-center">
                <!-- Mostrar enlaces de paginación -->
                {{ $capitulosPaginados->links() }}
            </div>

        </div>
    </div>





@endsection

@section('modals')
    <div class="modal fade" id="t-cap-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Seleccionar capítulo</h4>
                </div>

                <div class="modal-body">
                    <span class="text-primary">Haga clic en el capítulo que desea leer.</span><br><br>

                    <div class="row">
                        @foreach ($infoLibro['capitulos'] as $capitulo)
                            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                <a href="{{ route('bible.book', ['numero' => $numLibro, 'page' => $capitulo['capitulo']]) }}"
                                    class="btn btn-{{ $capitulo['capitulo'] == $capitulosPaginados->currentPage() ? 'primary' : 'default' }} btn-icon btn-block">
                                    {{ $capitulo['capitulo'] }}
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('page-js')

@endsection
