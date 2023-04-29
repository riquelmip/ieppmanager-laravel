@extends('layouts.app')

@section('title', 'Cadenas')

@section('page-name')
    @php
        if ($tipo_cadena) {
            $page_menu = 'cadenas';
            $page_submenu = 'cadenas-adoracion';
        } else {
            $page_menu = 'cadenas';
            $page_submenu = 'cadenas-avivamiento';
        }
        
    @endphp
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="hidden" value="{{ $tipo_cadena }}" name="tipo_cadena" id="tipo_cadena">
    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        {{-- <div class="panel-heading">
            <h3 class="panel-title">A continuación se muestra el listado</h3>
        </div> --}}
        <div class="panel-body">
            @if ($tipo_cadena)
                @can('crear-cadenas-adoracion')
                    <button id="btn-nuevo-cadena" class="btn btn-primary">Nuevo Cadena de Adoración</button><br><br>
                @endcan
            @else
                @can('crear-cadenas-avivamiento')
                    <button id="btn-nuevo-cadena" class="btn btn-primary">Nuevo Cadena de Avivamiento</button><br><br>
                @endcan
            @endif

            <table id="t-cadenas" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th class="min-tablet">Estado</th>
                        <th class="min-tablet">Acciones</th>
                    </tr>
                </thead>
                <tbody id="t-cadenas-body">

                </tbody>
            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')
    <!-- CREAR Y EDITAR -->
    <div class="modal fade" id="modal-cadenas" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title"> Cadena de @if ($tipo_cadena)
                            Adoración
                        @else
                            Avivamiento
                        @endif
                    </h4>
                </div>

                <form id="form-cadenas">
                    <input type="hidden" value="0" name="idCadena" id="idCadena">
                    <!--Modal body-->
                    <div class="modal-body">
                        <span class="text-primary">Los campos con (*) son
                            obligatorios.</span><br><br>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label" for="nombre">Nombre (*)</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="nota">Nota</label>
                                    <div>
                                        <select name="nota" id="nota" class="form-control select2"
                                            style="width: 100%;">
                                            <option value="0">Seleccione una nota</option>
                                            <option value="C">C</option>
                                            <option value="C#">C#/Db</option>
                                            <option value="D">D</option>
                                            <option value="D#">D#/Eb</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="F#">F#/Gb</option>
                                            <option value="G">G</option>
                                            <option value="G#">G#/Ab</option>
                                            <option value="A">A</option>
                                            <option value="A#">A#/Bb</option>
                                            <option value="B">B</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="estado">Estado (*)</label>
                                    <div>
                                        <select name="estado" id="estado" class="form-control select2"
                                            style="width: 100%;">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label" for="id_autor">Coro</label>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <select name="id_coro" id="id_coro" class="form-control select2"
                                                style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="button" onclick="añadirCoro();" class="btn btn-primary">Añadir a
                                                la cadena</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label" for="letra">Cadena</label>
                                    <table id="t-cadena-temp" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Coro</th>
                                                <th class="min-tablet">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="t-cadena-temp-body">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!--Modal footer-->
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- CREAR Y EDITAR -->


    <!-- CONFIRMACION ELIMINAR -->
    <div class="modal fade" id="modal-eliminar" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i
                            class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Eliminar Registro</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <input type="hidden" id="id-eliminar" name="id-eliminar">
                    <div class="form-group">
                        <img src="{{ asset('img/logosolo.png') }}" alt="IeppManager" class="brand-icon">
                    </div>
                    <div class="form-group">
                        ¿En verdad desea eliminar el registro?
                    </div>

                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" onclick="reiniciarId();"
                        type="button">Cancelar</button>
                    <button type="button" onclick="eliminarCoro();" class="btn btn-primary">Eliminar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- CONFIRMACION ELIMINAR -->
@endsection

@section('page-js')

    <script src="{{ asset('js-content/cadenas.js') }}"></script>


@endsection
