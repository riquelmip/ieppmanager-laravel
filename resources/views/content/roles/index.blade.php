@extends('layouts.app')

@section('content-head')
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Roles de Usuario</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
            <li><a href="#"><i class="demo-pli-home"></i></a></li>
            <li><a href="#">Inicio</a></li>
            <li class="active">Roles de Usuario</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>
@endsection

@section('content')
    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">A continuación se muestra el listado</h3>
        </div>
        <div class="panel-body">
            <button id="btn-nuevo-rol" class="btn btn-primary">Nuevo</button>
            <br><br>
            <table id="t-roles" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th class="min-tablet">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{ $rol->id }}</td>
                            <td>{{ $rol->name }}</td>
                            <td>
                                <div class="text-center">
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $rol->id], 'class' => 'formBorrarRol']) !!}
                                    @if ($rol->id != 1)
                                        @can('editar-roles')
                                            <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-icon btn-primary"><i
                                                    class="demo-psi-pen-5 icon-lg"></i></a>
                                        @endcan
                                        @can('borrar-roles')
                                            <button type="submit" class="btn btn-icon btn-danger"><i
                                                    class="demo-psi-recycling icon-lg"></i></button>
                                        @endcan
                                    @endif
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->
@endsection

@section('modals')
    <div class="modal fade" id="modal-roles" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Nuevo Rol</h4>
                </div>
                {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                <!--Modal body-->
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label" for="name">Nombre</label>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="name">Permisos</label>
                        <table id="t-roles-permisos" class="table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Estado</th>
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
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('page-js')
    <script src="{{ asset('js-content/roles.js') }}"></script>
@endsection
