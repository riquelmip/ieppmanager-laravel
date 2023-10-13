@extends('layouts.app')

@section('title', 'Index Holy Bible')


@section('page-name')
    @php
        $page_menu = 'biblias-web';
        $page_submenu = 'bible-web';
    @endphp
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!--Page content-->
    <!--===================================================-->

    <div class="row">
        <div class="col-lg-12">
            <div class="tab-base">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#demo-lft-tab-1"><b>Old</b> <span class="badge badge-primary">AT</span></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#demo-lft-tab-2"><b>New</b> <span
                                class="badge badge-primary">NT</span></a>
                    </li>
                </ul>

                <div class="tab-content text-center">
                    <div id="demo-lft-tab-1" class="tab-pane fade active in">
                        <div class="list-group list-group-striped">
                            @foreach ($indiceBibliaArray as $libro)
                                @if ($libro['numero'] >= 1 && $libro['numero'] <= 39)
                                    <a class="list-group-item"
                                        href="{{ route('bible.book', ['numero' => $libro['numero'], 'page' => 1]) }}">{{ $libro['titulo'] }}</a>
                                    {{-- <a class="list-group-item" href="{{ url('biblias/biblia/libro/'.$libro['numero'].'?page=1') }}">{{ $libro['numero'] }}. {{ $libro['titulo'] }}</a> --}}
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div id="demo-lft-tab-2" class="tab-pane fade">
                        <div class="list-group list-group-striped">
                            @foreach ($indiceBibliaArray as $libro)
                                @if ($libro['numero'] >= 40 && $libro['numero'] <= 66)
                                    <a class="list-group-item"
                                        href="{{ route('bible.book', ['numero' => $libro['numero'], 'page' => 1]) }}">{{ $libro['titulo'] }}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="panel">
        <div class="panel-body">
            <pre>
                {{ print_r($indiceBibliaArray, true) }}
            </pre>


        </div>
    </div> --}}

    <!--===================================================-->
    <!--End page content-->
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')

@endsection

@section('page-js')

@endsection
