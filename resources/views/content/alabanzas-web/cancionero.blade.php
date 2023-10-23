@extends('layouts.app')

@section('title', 'Cancionero de Alabanzas')

@section('page-name')
    @php
        $page_menu = 'cancionero-web';
        $page_submenu = 'cancionero-web';
    @endphp
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!--Page content-->
    <!--===================================================-->



    <div class="row">
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-12">

                    <!--Profile Widget-->
                    <!--===================================================-->
                    <div class="panel">
                        <div class="panel-body">

                            <table id="t-cancionero-web" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="col-lg-1">Num</th>
                                        <th>Nombre</th>
                                        <th class="min-tablet">Ver</th>
                                    </tr>
                                </thead>
                                <tbody id="t-cancionero-web-body">

                                </tbody>
                            </table>


                        </div>
                    </div>
                    <!--===================================================-->

                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="row">
                <div class="col-lg-12">


                    <!--===================================================-->
                    <div class="panel">
                        <div class="panel-body">

                            <p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Alabanzas según Autores
                            </p>
                            <div class="list-group bg-trans pad-btm bord-btm">
                                <a href="#" onclick="cargarTablaAutores(0);"
                                    class="list-group-item list-item-sm">Todos</a>
                                @foreach ($autores as $autor)
                                    <a href="#" onclick="cargarTablaAutores('{{ $autor->id }}');"
                                        class="list-group-item list-item-sm">{{ $autor->nombre }}</a>
                                @endforeach


                            </div>
                            <p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">IEPP Manager</p>
                            {{-- <p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Tambien puedes ver</p>
                            <div class="list-group bg-trans pad-btm ">
                                <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Cancionero de
                                        Alabanzas</a><small class="box-block">Letras</small></div>
                                <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Coros
                                        elit</a><small class="box-block">Letras</small></div>
                                <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Cadenas de
                                        Coros</a><small class="box-block">Letras</small></div>

                            </div> --}}



                        </div>
                    </div>

                    <!--===================================================-->

                </div>
            </div>
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
    <script src="{{ asset('js-content/cancionero-web.js') }}"></script>
@endsection
