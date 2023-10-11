@extends('layouts.app')

@section('title', $alabanzasPaginadas->first()->nombre)


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



    <div class="panel blog blog-details">
        <div class="panel-body">
            {{-- Itera sobre cada alabanza en la lista paginada --}}
            @foreach ($alabanzasPaginadas as $alabanza)
                <div class="blog-title media-block">
                    <div class="media-body">
                        <h1 class="text-center">{{ $alabanza->nombre }}</h1>
                        <hr>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-body text-center">
                        {!! $alabanza->letra !!}
                    </div>
                </div>
                <div class="blog-footer">

                    <div class="text-center">
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
