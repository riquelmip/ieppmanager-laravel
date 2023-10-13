@extends('layouts.app')

@section('title', $infoLibro['nombre'] . ' ' . $numCapitulo . ' : ' . $versiculosPaginados->currentPage())


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
                <a title="Return to chapter" href="{{ route('bible.book', ['numero' => $numLibro, 'page' => $numCapitulo]) }}"
                    class="btn btn-primary btn-icon btn-circle"><i class="fa fa-long-arrow-left"></i></a>

                {{-- Botón Anterior --}}
                <a title="Previous verse" href="{{ $versiculosPaginados->previousPageUrl() }}"
                    class="btn btn-primary btn-icon btn-circle {{ $versiculosPaginados->onFirstPage() ? ' disabled' : '' }}">
                    <i class="fa fa-arrow-left"></i>
                </a>

                {{-- Botón Siguiente --}}
                <a title="Next verse" href="{{ $versiculosPaginados->nextPageUrl() }}"
                    class="btn btn-primary btn-icon btn-circle {{ $versiculosPaginados->hasMorePages() ? '' : ' disabled' }}">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            @foreach ($versiculosPaginados as $index => $verso)
                @php
                    // Calcular el número de página actual
                    $currentPage = $index + 1 + ($versiculosPaginados->currentPage() - 1) * $versiculosPaginados->perPage();
                @endphp

                <h2 class="text-center">
                    <strong>{{ $infoLibro['nombre'] . ' ' . $numCapitulo . ' : ' . $currentPage }}</strong>
                </h2>
                <br>
                <h4 class="text-center">{!! $verso !!} </h4>
            @endforeach

            <div class="text-center">
                <!-- Mostrar enlaces de paginación -->
                {{ $versiculosPaginados->links() }}
            </div>
        </div>
    </div>
@endsection

@section('modals')

@endsection

@section('page-js')

@endsection
