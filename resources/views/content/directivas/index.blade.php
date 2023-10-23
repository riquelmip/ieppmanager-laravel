@extends('layouts.app')

@section('title', 'Directivas')

@section('page-name')
    @php
        $page_menu = 'directivas';
        $page_submenu = 'directivas';
    @endphp
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        {{-- <div class="panel-heading">
            <h3 class="panel-title">A continuación se muestra el listado</h3>
        </div> --}}
        <div class="panel-body">
            @can('crear-directivas')
                <button id="btn-nuevo-directiva" class="btn btn-primary">Nuevo</button><br><br>
            @endcan

            <table id="t-directivas" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th class="min-tablet">Directiva Actual</th>
                        <th class="min-tablet">Estado</th>
                        <th class="min-tablet">Acciones</th>
                    </tr>
                </thead>
                <tbody id="t-directivas-body">

                </tbody>
            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')
    <!-- CREAR Y EDITAR -->
    <div class="modal fade" id="modal-directivas" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Directivas</h4>
                </div>

                <form id="form-directivas">
                    <input type="hidden" value="0" name="idDirectiva" id="idDirectiva">
                    <!--Modal body-->
                    <div class="modal-body">
                        <span class="text-primary">Todos los campos con (*) son obligatorios.</span><br><br>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="control-label" for="nombre">Nombre (*)</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="anio">Año (*)</label>
                                    <input type="number" id="anio" name="anio" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="pastor">Pastor</label>
                                    <input type="text" id="pastor" name="pastor" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="tipo_directiva">Tipo Directiva (*)</label>
                                    <select name="tipo_directiva" id="tipo_directiva" class="form-control select2"
                                        style="width: 100%;">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="presidente">Presidente</label>
                                    <input type="text" id="presidente" name="presidente" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="vicepresidente">Vicepresidente</label>
                                    <input type="text" id="vicepresidente" name="vicepresidente" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="secretario">Secretario</label>
                                    <input type="text" id="secretario" name="secretario" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="tesorero">Tesorero</label>
                                    <input type="text" id="tesorero" name="tesorero" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="vocal1">Vocal N° 1</label>
                                    <input type="text" id="vocal1" name="vocal1" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="vocal2">Vocal N° 2</label>
                                    <input type="text" id="vocal2" name="vocal2" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="vocal3">Vocal N° 3</label>
                                    <input type="text" id="vocal3" name="vocal3" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="directiva_actual">¿Directiva vigente? (*)</label>
                                    <div>
                                        <select name="directiva_actual" id="directiva_actual"
                                            class="form-control select2" style="width: 100%;">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
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
                    <button type="button" onclick="eliminar();" class="btn btn-primary">Eliminar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- CONFIRMACION ELIMINAR -->
@endsection

@section('page-js')
    <script src="{{ asset('js-content/directivas.js') }}"></script>
@endsection
