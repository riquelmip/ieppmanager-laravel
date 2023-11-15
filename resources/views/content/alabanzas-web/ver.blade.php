@extends('layouts.app')

@section('title', $alabanzasPaginadas->first()->numero_himnario . '. ' . $alabanzasPaginadas->first()->nombre)


@section('page-name')
    @php
        $page_menu = 'himnario-web';
        $page_submenu = 'himnario-web';
    @endphp
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!--Page content-->
    <!--===================================================-->



    <div class="panel blog blog-details">
        <div class="panel-body">
            {{-- Itera sobre cada alabanza en la lista paginada --}}
            @foreach ($alabanzasPaginadas as $alabanza)
                <div>

                    <h2 class="text-center">{{ $alabanza->numero_himnario . '. ' . $alabanza->nombre }}</h2>
                    <hr>

                    <div class="blog-body text-center">
                        {!! $alabanza->letra !!}
                    </div>

                    <div class="text-center">
                        @if ($alabanza->url_video != null || $alabanza->url_video != '')
                            <hr>
                            <h4 class="text-center">Escuchar</h4>
                            @if ($alabanza->tipo_video == 1)
                                <div>
                                    <iframe width="100%" height="315" src="{{ $alabanza->url_video }}" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>

                <hr>
                <div>
                    <div class="text-center col-lg-12">
                        {{ $alabanzasPaginadas->links() }}
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
