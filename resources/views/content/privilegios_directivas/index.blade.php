@extends('layouts.app')

@section('title', 'Privilegios Directivas')

@section('page-name')
    @php
        $page_menu = 'directivas';
        $page_submenu = 'privilegios_directivas';
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
            @can('crear-privilegios_directivas')
                <button id="btn-nuevo-privilegio_directiva" class="btn btn-primary">Nuevo</button><br><br>
            @endcan

            <table id="t-privilegios_directivas" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Día</th>
                        <th>Fecha</th>
                        <th class="min-tablet">Directiva</th>
                        <th class="min-tablet">Acciones</th>
                    </tr>
                </thead>
                <tbody id="t-privilegios_directivas-body">

                </tbody>
            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')
    <!-- CREAR Y EDITAR -->
    <div class="modal fade" id="modal-privilegios_directivas" role="dialog" tabindex="-1"
        aria-labelledby="demo-default-modal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Privilegios de Directivas</h4>
                </div>

                <form id="form-privilegios_directivas">
                    <input type="hidden" value="0" name="idPrivilegioDirectiva" id="idPrivilegioDirectiva">
                    <!--Modal body-->
                    <div class="modal-body">
                        <span class="text-primary">Todos los campos con (*) son obligatorios.</span><br><br>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="dia">Día (*)</label>
                                    <div>
                                        <select name="dia" id="dia" class="form-control select2"
                                            style="width: 100%;">
                                            <option value="Lunes">Lunes</option>
                                            <option value="Martes">Martes</option>
                                            <option value="Miércoles">Miércoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sábado">Sábado</option>
                                            <option value="Domingo">Domingo</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="fecha">Fecha (*)</label>
                                    <input type="date" id="fecha" name="fecha" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="directiva">Directiva (*)</label>
                                    <div>
                                        <select name="directiva" id="directiva" class="form-control select2"
                                            style="width: 100%;">
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="inicio">Inicio</label>
                                    <input type="text" id="inicio" name="inicio" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="alabanzas">Alabanzas</label>
                                    <input type="text" id="alabanzas" name="alabanzas" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="coros">Coros Alegres</label>
                                    <input type="text" id="coros" name="coros" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="presentacion">Presentación</label>
                                    <input type="text" id="presentacion" name="presentacion" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="ofrenda">Ofrenda</label>
                                    <input type="text" id="ofrenda" name="ofrenda" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="talento">Talento</label>
                                    <input type="text" id="talento" name="talento" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="alabanza_especial">Alabanza Especial</label>
                                    <input type="text" id="alabanza_especial" name="alabanza_especial"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="adoracion">Adoración</label>
                                    <input type="text" id="adoracion" name="adoracion" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="mensaje">Mensaje</label>
                                    <input type="text" id="mensaje" name="mensaje" class="form-control">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="aseo">Aseo</label>
                                    <input type="text" id="aseo" name="aseo" class="form-control">

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label" for="anuncios">Anuncios</label>
                                    <textarea name="anuncios" id="anuncios" cols="30" rows="5" class="form-control note-superhero"></textarea>
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
    <script src="{{ asset('js-content/privilegios_directivas.js') }}"></script>
@endsection
