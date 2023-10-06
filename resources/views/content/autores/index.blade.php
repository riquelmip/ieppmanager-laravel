@extends('layouts.app')

@section('title', 'Autores')

@section('page-name')
    @php
        $page_menu = 'autores';
        $page_submenu = 'autores';
    @endphp
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="panel">
        <div class="panel-body">
            @can('crear-autores')
                <button id="btn-nuevo-autor" class="btn btn-primary">Nuevo</button><br><br>
            @endcan

            <table id="t-autores" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th class="min-tablet">Estado</th>
                        <th class="min-tablet">Acciones</th>
                    </tr>
                </thead>
                <tbody id="t-autores-body">

                </tbody>
            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')
    <!-- CREAR Y EDITAR -->
    <div class="modal fade" id="modal-autores" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Autor</h4>
                </div>

                <form id="form-autores">
                    <input type="hidden" value="0" name="idAutor" id="idAutor">
                    <!--Modal body-->
                    <div class="modal-body">
                        <span class="text-primary">Todos los campos son obligatorios.</span><br><br>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label" for="nombre">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label" for="estado">Estado</label>
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
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
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
                    <button type="button" onclick="eliminarAutor();" class="btn btn-primary">Eliminar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- CONFIRMACION ELIMINAR -->
@endsection

@section('page-js')
    <script src="{{ asset('js-content/autores.js') }}"></script>
@endsection
