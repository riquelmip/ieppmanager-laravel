@extends('layouts.app')

@section('title', 'Inicio')

@section('page-name')
    @php
        $page_menu = 'inicio';
        $page_submenu = 'inicio';
    @endphp
@endsection

@section('content')
    <div class="jumbotron text-main text-center bg-white-p">
        <div class="row align-items-center">
            <div class="col-lg-2 d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-12">
                        <!--Profile Widget-->
                        <!--===================================================-->
                        <img src="{{ asset('img/logosolo.png') }}" alt="" class="img-fluid logo-img" width="100%">
                        <!--===================================================-->
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <!--===================================================-->
                        <h1>IEPP Manager</h1><br>
                        <p><b>Iglesia Evangélica del Principe de Paz</b></p>
                        <!--===================================================-->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-sm-3">
            <div class="panel media middle pad-all">
                <div class="media-left">
                    <span class="icon-wrap icon-wrap-sm icon-circle bg-primary">
                        <i class="fa fa-file-audio-o fa-2x"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold text-main">{{ $num_himnario }}</p>
                    <p class="text-muted mar-no">Himnario Oficial</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel media middle pad-all">
                <div class="media-left">
                    <span class="icon-wrap icon-wrap-sm icon-circle bg-primary">
                        <i class="fa fa-file fa-2x"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold text-main">{{ $num_cancionero }}</p>
                    <p class="text-muted mar-no">Cancionero</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel media middle pad-all">
                <div class="media-left">
                    <span class="icon-wrap icon-wrap-sm icon-circle bg-primary">
                        <i class="fa fa-folder-o fa-2x"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold text-main">{{ $num_cadenas_avivamiento }}</p>
                    <p class="text-muted mar-no">Cadenas de Coros Avivamiento</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel media middle pad-all">
                <div class="media-left">
                    <span class="icon-wrap icon-wrap-sm icon-circle bg-primary">
                        <i class="fa fa-folder-o fa-2x"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p class="text-2x mar-no text-semibold text-main">{{ $num_cadenas_adoracion }}</p>
                    <p class="text-muted mar-no">Cadenas de Coros Adoración</p>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('page-js')
@endsection
