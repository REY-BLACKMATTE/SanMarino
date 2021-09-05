@extends('layouts.master')
@section('screen', 'Pagos')

@section('content')

<input type="hidden" data-toggle="payments" id="screen"><!-- MISMO DATA-TOGGLE PARA ELEMENTOS EN MENÚ -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form class="form-group " action="" method="GET" id="createUsuarioForm" name="pagosForm" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('GET') }}
            <div class="card">
                <div class="card-header">{{ __('Registro de pagos') }}
                </div>
                <div  class="pull-left" style="margin-right: 1%;">
                    <a href="{{url('/pagos.crearPago/')}}" ><button id="excelExport" class="btn btn-dark"  type="button" >
                            Nuevo pago </button></a>
                  {{-- fin de boton descarga excel --}}
                  </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
        <script src="{{ url('js/usuarios.js') }}"></script>

@stop
