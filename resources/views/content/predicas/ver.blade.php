@extends('layouts.app')

@section('title', $predicasPaginadas->first()->nombre)


@section('page-name')
    @php
        $page_menu = 'predica';
        $page_submenu = 'predica';
    @endphp
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!--Page content-->
    <!--===================================================-->



    <div class="panel blog blog-details">
        <div class="panel-body">
            {{-- Itera sobre cada predica en la lista paginada --}}
            @foreach ($predicasPaginadas as $predica)
                <div class="blog-title media-block">
                    <div class="media-body">
                        <h1 class="text-center">{{ $predica->nombre }}</h1>
                        <hr>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-body">
                        <h5>Descripción:</h5>
                        {!! $predica->descripcion_corta !!}
                        <h5>Contenido:</h5>
                        {!! $predica->descripcion_larga !!}
                    </div>
                </div>
                <div class="blog-footer">

                    <div class="text-center">
                        {{ $predicasPaginadas->links() }}
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    <!--===================================================-->
    <!--End page content-->
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')

@endsection

@section('page-js')

@endsection
