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
        <div class="col-lg-12">
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
