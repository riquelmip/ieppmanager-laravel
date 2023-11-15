@extends('layouts.app')

@section('title', 'Cancionero de Alabanzas')

@section('page-name')
    @php
        $page_menu = 'cancionero';
        $page_submenu = 'cancionero';
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
            @can('crear-alabanzas-cancionero')
                <button id="btn-nuevo-cancionero" class="btn btn-primary">Nuevo</button><br><br>
            @endcan

            <table id="t-cancionero" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th class="min-tablet">Estado</th>
                        <th class="min-tablet">Acciones</th>
                    </tr>
                </thead>
                <tbody id="t-cancionero-body">

                </tbody>
            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')
    <!-- CREAR Y EDITAR -->
    <div class="modal fade" id="modal-cancionero" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Alabanza de Himnario</h4>
                </div>

                <form id="form-cancionero">
                    <input type="hidden" value="0" name="idCancionero" id="idCancionero">
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label" for="url_video">Url Video (*)</label>
                                    <input type="text" id="url_video" name="url_video" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="id_autor">Autor</label>
                                    <select name="id_autor" id="id_autor" class="form-control select2"
                                        style="width: 100%;">
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                                    <label class="control-label" for="letra">Letra (*)</label>
                                    <textarea name="letra" id="letra" cols="30" rows="10" class="form-control note-superhero"></textarea>
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
                    <button type="button" onclick="eliminarAlabanzaCancionero();"
                        class="btn btn-primary">Eliminar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- CONFIRMACION ELIMINAR -->
@endsection

@section('page-js')
    <script src="{{ asset('js-content/cancionero.js') }}"></script>
@endsection
