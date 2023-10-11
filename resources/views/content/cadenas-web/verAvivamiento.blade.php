@extends('layouts.app')

@section('title', $cadenasPaginadas->first()->nombre)


@section('page-name')
    @php
        $page_menu = 'cadenas-web';
        $page_submenu = 'cadenas-avivamiento-web';
    @endphp
@endsection

@section('page-css')

@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!--Page content-->
    <!--===================================================-->



    <div class="panel blog blog-details">
        <div class="panel-body">
            {{-- Itera sobre cada alabanza en la lista paginada --}}
            @foreach ($cadenasPaginadas as $cadena)
                <div class="blog-title media-block">
                    <div class="media-body">
                        <h1 class="text-center">{{ $cadena->nombre }}</h1>
                        <h5 class="text-center">
                            @if (!empty($cadena->nota))
                                Nota: {{ $cadena->nota }}
                            @else
                                Sin nota
                            @endif
                        </h5>
                        <hr>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-body text-center">

                        <div class="tab-base">

                            <!--Nav Tabs-->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#demo-lft-tab-1" aria-expanded="true">Lista <i
                                            class="fa fa-list"></i></a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#demo-lft-tab-2" aria-expanded="false">Carrusel <i
                                            class="fa fa-columns"></i></a>
                                </li>
                            </ul>

                            <!--Tabs Content-->
                            <div class="tab-content">
                                {{-- TAB 1 --}}
                                <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                    {{-- Itera sobre los detalles de la cadena --}}
                                    @foreach ($cadena->detalles as $detalle)
                                        <div>
                                            <h3>{{ $detalle->nombre }}</h3>
                                            <h5>{{ $detalle->nombre_autor }}</h5>
                                            <div>{!! $detalle->letra !!}</div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- TAB 1 --}}


                                {{-- TAB 2 --}}
                                <div id="demo-lft-tab-2" class="tab-pane fade">
                                    <div id="demo-carousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators out">
                                            @foreach ($cadena->detalles as $index => $detalle)
                                                <li data-target="#demo-carousel" data-slide-to="{{ $index }}"
                                                    class="{{ $index === 0 ? 'active' : '' }}"></li>
                                            @endforeach
                                        </ol>

                                        <!-- Carousel items -->
                                        <div class="carousel-inner text-center">
                                            @foreach ($cadena->detalles as $index => $detalle)
                                                <div class="item {{ $index === 0 ? 'active' : '' }}">
                                                    <h3 class="text-main">{{ $detalle->nombre }}</h3>
                                                    <h5>{{ $detalle->nombre_autor }}</h5>
                                                    <div>{!! $detalle->letra !!}</div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Carousel controls -->
                                        <a class="left carousel-control" href="#demo-carousel" data-slide="prev"><i
                                                class="demo-pli-arrow-left icon-2x"></i></a>
                                        <a class="right carousel-control" href="#demo-carousel" data-slide="next"><i
                                                class="demo-pli-arrow-right icon-2x"></i></a>
                                    </div>

                                </div>
                                {{-- TAB 2 --}}


                            </div>
                        </div>

                    </div>

                </div>
                <div class="blog-footer">

                    <div class="text-center">
                        {{ $cadenasPaginadas->links() }}
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
