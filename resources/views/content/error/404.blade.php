@extends('layouts.app')

@section('title', 'Página no encontrada')

@section('page-name')
    @php
        $page_menu = 'error';
        $page_submenu = 'error';
    @endphp
@endsection

@section('error-head')
    <div class="text-center cls-content">
        <h3 class="error-code text-info">404</h3>
    </div>
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Page content-->
    <!--===================================================-->

    <div class="text-center cls-content">
        <p class="h4 text-uppercase text-bold">Página no encontrada!</p>
        <div class="pad-btm">
            Lo sentimos, pero la página que estás buscando, no la hemos encontrado.
        </div>
        <div class="pad-top">
            <a class="btn btn-primary" href="{{ route('inicio') }}">Retornar al Inicio</a>
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
