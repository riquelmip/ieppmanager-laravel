@extends('layouts.app')

@section('title', 'Cadenas de Avivamiento')

@section('page-name')
    @php
        $page_menu = 'cadenas-web';
        $page_submenu = 'cadenas-avivamiento-web';
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

                            <table id="t-cadenas-avivamiento-web" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="col-lg-1">Num</th>
                                        <th>Nombre</th>
                                        <th class="min-tablet">Ver</th>
                                    </tr>
                                </thead>
                                <tbody id="t-cadenas-avivamiento-web-body">

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
                                @foreach ($autores as $autor)
                                    <a href="#" class="list-group-item list-item-sm">{{ $autor->nombre }}</a>
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
    <script src="{{ asset('js-content/cadenas-avivamiento-web.js') }}"></script>
@endsection
