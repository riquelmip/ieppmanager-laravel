@extends('layouts.app')

@section('title', 'Roles de Usuario')

@section('page-name')
    @php
        $page_menu = 'usuarios';
        $page_submenu = 'roles';
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
            @can('crear-roles')
                <button id="btn-nuevo-rol" class="btn btn-primary">Nuevo</button>
                <br><br>
            @endcan
            <table id="t-roles" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th class="min-tablet">Acciones</th>
                    </tr>
                </thead>
                <tbody id="t-roles-body">

                </tbody>
            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')
    <!-- CREAR Y EDITAR -->
    <div class="modal fade" id="modal-roles" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Rol</h4>
                </div>

                <form id="form-roles">
                    <input type="hidden" value="0" name="idRol" id="idRol">
                    <!--Modal body-->
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label" for="name">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control">
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

    <!-- ASIGNAR PERMISOS -->
    <div class="modal fade" id="modal-permisos" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Permisos del Rol</h4>
                </div>

                <form id="form-permisos">

                    <!--Modal body-->
                    <div class="modal-body">

                        <div class="form-group">
                            <table id="t-roles-permisos" class="table table-striped table-bordered" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th class="min-tablet">Estado</th>
                                    </tr>
                                </thead>
                                <tbody id="t-roles-permisos-body">
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <!--Modal footer-->
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- ASIGNAR PERMISOS -->

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
                    <button type="button" onclick="eliminarRol();" class="btn btn-primary">Eliminar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- CONFIRMACION ELIMINAR -->
@endsection

@section('page-js')
    <script src="{{ asset('js-content/roles.js') }}"></script>
@endsection
