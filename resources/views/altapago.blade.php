@extends('layouts.master')
@section('screen', 'Alta de Pago')

@section('content')
<input type="hidden" data-toggle="payments" id="screen"><!-- MISMO DATA-TOGGLE PARA ELEMENTOS EN MENÚ -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form class="form-group " action="" method="POST" id="altaPagoForm" name="pagosForm" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="card">
                <div class="card-header">{{ __('Registro de pago') }}
                </div>

                <div class="card-body">
                    <div class="row padding-row">
                       <div class="form-group col-sm-12 col-md-6 col-lg-3">
                           <label >Colono:</label>
                           <input type="text" name="idUsuario" class="form-control" id="idUsuario">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                           <label >Tipo Pago:</label>
                           <select name="tipoPago" class="form-control" id="tipoPago" >
                           @foreach($tiposPago as $tipopago)
                             <option value="{{$tipopago->id_tipo_pago}}"> {{ $tipopago->nombre_tipo_pago }}</option>
                            @endforeach
                           </select>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                           <label >Fecha de Pago:</label>
                           <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control" readonly name="initialDay" id="initialDay">
                            <div class="input-group-addon">
                                <span class="input-group-text" style="border-radius: inherit; height: 2.4em;">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </div>
                        </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                           <label >Monto de Pago:</label>
                           <input id="monto" name="monto" class="form-control" >
                        </div>
                    </div>
                </div>

                <div  class="pull-right" style="margin-right: 1%;">
                <button id="guardarDatos" class="btn btn-dark" type="submit" onkeypress="guardaDatosUsuarios(); return false;">
                    Guardar
                </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
        <script src="{{ url('js/pagos.js') }}"></script>

@stop
