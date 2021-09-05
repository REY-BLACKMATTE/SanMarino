@extends('layouts.master')
@section('screen', 'Catálogo Usuarios')
@section('content')

<input type="hidden" data-toggle="usuarios" id="screen"><!-- MISMO DATA-TOGGLE PARA ELEMENTOS EN MENÚ -->
<!-- contenido de cajón -->
<input type="text" name="key" id="key" value="{{ csrf_token() }}" hidden>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <!-- contenido de cajón -->
            <!-- div controlador de colapso -->
            <div class="card-header" align="right">
                <span class="span-btn" data-toggle="collapse" data-target="#users-filters" aria-expanded="false" aria-controls="users-filters">
                    <i class="fas fa-angle-up control-collapse" data-toggle='tooltip' data-placement='bottom' title='Minimizar'></i>
                </span>
            </div>
            <!-- div controlador de colapso -->
            <!-- div contenido colapsable -->
            <div class="show" id="users-filters">
                <div class="row padding-row">
                    @if ( Session::has('success') )
                    <script type="text/javascript">
                        var $message = "<?php echo Session::get('success'); ?>";
                        window.onload = function() {
                            message('success', $message);
                        };
                    </script>
                    {{ Session::forget('updated') }}
                    @endif @if ( Session::has('error') )
                    <script type="text/javascript">
                        var $message = "<?php echo Session::get('error'); ?>";
                        window.onload = function() {
                            message('error', $message);
                        };
                    </script>
                    {{ Session::forget('error') }}
                    @endif @if ( Session::has('warning') )
                    <script type="text/javascript">
                        var $message = "<?php echo Session::get('warning'); ?>";
                        window.onload = function() {
                            message('warning', $message);
                        };
                    </script>
                    {{ Session::forget('warning') }}
                    @endif
                </div>

                <form class="form-group" action="{{ route('usuarios.listar') }}" method="post" id="userFindForm" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="row padding-row">
                        <div class="col-sm-4">
                            <label>@lang('general.usersName'):</label>
                            <input type="text" name="nombreBuscar" class="form-control" id="user_name" placeholder="" onkeypress="return soloLetras(event);">
                        </div>
                        <div class="col-sm-4">
                            <label>@lang('general.usersLastName1'):</label>
                            <input type="text" name="last_name1" class="form-control" id="last_name1" placeholder="" onkeypress="return soloLetras(event);">
                        </div>
                        <div class="col-sm-4">
                            <label>@lang('general.usersLastName2'):</label>
                            <input type="text" name="last_name2" class="form-control" id="last_name2" placeholder="" onkeypress="return soloLetras(event);">
                        </div>
                    </div>
                    <div class="row padding-row">
                        <div class="col-sm-4">
                            <label>@lang('general.usersUser'):</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="">
                        </div>
                        <div class="col-sm-4">
                            <label>@lang('general.usersEmail'):</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="col-sm-4">
                            <label>@lang('general.usersStatus'):</label>
                            <select class="form-control" name="status" id="status">
                                <option value='0'>@lang('general.select')</option>
                                <option value='1'>@lang('general.active')</option>
                                <option value='2'>@lang('general.inactive')</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 padding-row" align="right">
                        <button type="button" class="btn btn-link" onclick="prepareModalForm('', 'insert', 'Registrar Usuario')" id="add" data-toggle='modal' data-target="#modal" name="button">
                            <i class="fas fa-plus" data-toggle='tooltip' data-placement='bottom' title='Añadir'></i> @lang('general.add')
                        </button>
                        <button type="submit" onclick="ALERTACARGANDO();" class="btn btn-link" id="find" data-toggle='tooltip' data-placement='bottom' title='@lang(' general.search')'>
                            <i class="fas fa-search"></i> @lang('general.search')
                        </button>
                    </div>
                </form>
            </div>
            <!-- div contenido colapsable -->
            <!-- contenido de cajón -->
        </div>
        <div class="card">
            <!-- div controlador de colapso -->
            <div class="card-header" align="right">
                <span class="span-btn" data-toggle="collapse" data-target="#table-results" aria-expanded="false" aria-controls="table-results">
                    <i class="fas fa-angle-up control-collapse" data-toggle='tooltip' data-placement='bottom' title='Minimizar'></i>
                </span>
            </div>
            <!-- div controlador de colapso -->
            <!-- contenido de cajón -->
            <div class="show" id="table-results">
                <!-- usuarios-cards -->
                <div class="card-solid">
                    <div class="card-body pb-4">
                        <div class="row d-flex align-items-stretch">
                            <table id="table" class="table table-striped dataTable dataTable-pag text-center display responsive" role="grid" aria-describedby="table_info" width="100%">
                                <thead class="">
                                    <tr role="row">
                                        <th style="width:0%; max-width:100%;"></th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width:2%; max-width:100%;">@lang('general.usersId')</th>
                                        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width:150px;">@lang('general.usersPhoto')</th>
                                        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width:150px;">@lang('general.usersAlias')</th>
                                        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width:150px;">@lang('general.usersName')</th>
                                        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width:150px;">@lang('general.usersEmail')</th>
                                        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width:50px;">@lang('general.usersStatus')</th>
                                        <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width:50px;"><i class="fas fa-users-cog"></i></th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    @if(isset($usuarios))
                                    @foreach($usuarios as $key => $usuario)
                                    <tr role="row">
                                        <td></td>
                                        <td>{{$usuario->id }}</td>
                                        <td class="dropdown-header">
                                            <img src="assets/admin-lte/dist/img/avatar-default.png" class="img-circle elevation-2 avatar" alt="User Image">
                                        </td>
                                        <td>{{$usuario->usuario_id }}</td>
                                        <td>
                                            {{$usuario->name }}
                                            <p>{{$usuario->apellido_paterno }} {{$usuario->apellido_materno }}</p>
                                        </td>
                                        <td>{{$usuario->email }}</td>
                                        <td>
                                            @if($usuario->estatus == '1')
                                            @lang('general.active')
                                            @else
                                            @lang('general.inactive')
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-link" onclick="" data-toggle="modal" data-target="#modal" name="button"><i class="fas fa-edit"></i></button>
                                            <form class="form-group" method="POST" action="users.delete">
                                                @csrf
                                                @method('post')
                                                <input type="text" name="id" value="{{ $usuario->id }}" hidden>
                                                <button type="submit" class="btn btn-link" name="button"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- usuarios-cards -->
                <!-- contenido de cajón -->
            </div>
        </div>
        <div class="modal fade" id="modal" aria-modal="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-group" action="" method="post" id="userForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="row padding-row">
                                                <div class="col-6 padding-row id">
                                                    <label>@lang('general.usersId'):</label>
                                                    <input type="text" name="id" class="form-control" id="id" placeholder="" readonly>
                                                </div>
                                                <div class="col-6 padding-row" hidden>
                                                    <label>@lang('general.axn'):</label>
                                                    <input type="text" name="axn_form" class="form-control" id="axn_form" placeholder="" readonly>
                                                </div>
                                            </div>
                                            <div class="col-12 padding-row">
                                                <label>@lang('general.usersUser'):</label>
                                                <input type="text" name="usuarioModal" class="form-control" id="usuarioModal" placeholder="">
                                            </div>
                                            <div class="col-12 padding-row">
                                                <label>@lang('general.usersName'):</label>
                                                <input type="text" name="nombreModal" class="form-control" id="nombreModal" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-center">
                                        <div class="col-10 padding-row">
                                            <img src="assets/admin-lte/dist/img/avatar-default.png" id="fotoModal" class="img-circle elevation-2 avatar" alt="User Image">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 padding-row">
                                                <label>@lang('general.usersLastName1'):</label>
                                                <input type="text" name="apellidoPModal" class="form-control" id="apellidoPModal" placeholder="">
                                            </div>
                                            <div class="col-6 padding-row">
                                                <label>@lang('general.usersLastName2'):</label>
                                                <input type="text" name="apellidoMModal" class="form-control" id="apellidoMModal" placeholder="">
                                            </div>
                                            <div class="col-6 padding-row" id="userEmail">
                                                <label>@lang('general.usersEmail'):</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input type="email" name="correoModal" id="correoModal" class="form-control" autocomplete="email" multiple aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-6 padding-row">
                                                <label>@lang('general.usersStatus'):</label>
                                                <select class="form-control" name="estatusModal" id="estatusModal">
                                                    <option value='-1'>@lang('general.select')</option>
                                                    <option value='A'>@lang('general.active')</option>
                                                    <option value='I'>@lang('general.inactive')</option>
                                                </select>
                                            </div>
                                            <div class="col-6 padding-row" id="userPass">
                                                <label>@lang('general.usersPassword'):</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                    </div>
                                                    <input type="password" name="contraseñaModal" id="contraseñaModal" class="form-control" placeholder="" autocomplete="new-password" data-icon="lock2" data-password-toggle="true">
                                                </div>
                                            </div>
                                            <div class="col-6 padding-row" id="userConfirmPass">
                                                <label>@lang('general.usersConfirmPassword'):</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-key"></i></i></span>
                                                    </div>
                                                    <input type="password" name="contraseñaConfirmarModal" id="contraseñaConfirmarModal" class="form-control" placeholder="" data-icon="lock2" data-password-toggle="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="row padding-row">
                                                <div class="modal-header col-12 padding-row">
                                                    <h4 class="modal-title">@lang('general.registerAddress')</h4>
                                                </div>
                                                <div class="col-6 padding-row">
                                                    <label>@lang('general.usersStreet'):</label>
                                                    <input type="text" name="calleModal" class="form-control" id="calleModal" placeholder="">
                                                </div>
                                                <div class="col-3 padding-row">
                                                    <label>@lang('general.usersExtNum'):</label>
                                                    <input type="text" name="numExteriorModal" class="form-control" id="numExteriorModal" placeholder="">
                                                </div>
                                                <div class="col-3 padding-row">
                                                    <label>@lang('general.usersIntNum'):</label>
                                                    <input type="text" name="numInteriorModal" class="form-control" id="numInteriorModal" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal" name="button"><i class="fas fa-times"></i> @lang('general.close')</button>
                <button type="button" class="btn btn-link" name="button" id="save"><i class="fas fa-save"></i> @lang('general.save')</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- contenido de cajón -->
</div>
</div>
@endsection
@section('scripts')
<script src="{{ url('js/usuarios.js') }}"></script>
@stop
