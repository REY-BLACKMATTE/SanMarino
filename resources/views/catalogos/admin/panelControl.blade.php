@extends('layouts.master')
@section('screen', 'Panel de Control')
@section('content')

<div>
  @if ( Session::has('success') )
  <script type="text/javascript">
     var $message = "<?php echo Session::get('success'); ?>";
     window.onload = function (){
       message('success', $message);
     };
  </script>
  {{ Session::forget('success') }}
  @endif
  @if ( Session::has('updated') )
  <script type="text/javascript">
     var $message = "<?php echo Session::get('updated'); ?>";
     window.onload = function (){
       message('success', $message);
     };
  </script>
  {{ Session::forget('updated') }}
  @endif
  @if ( Session::has('error') )
  <script type="text/javascript">
     var $message = "<?php echo Session::get('error'); ?>";
     window.onload = function (){
       message('error', $message);
     };
  </script>
  {{ Session::forget('error') }}
  @endif @if ( Session::has('warning') )
  <script type="text/javascript">
     var $message = "<?php echo Session::get('warning'); ?>";
     window.onload = function (){
       message('warning', $message);
     };
  </script>
  {{ Session::forget('warning') }}
  @endif
</div>

<meta name="_token" content="{{csrf_token()}}" />
<!-- contenido de cajón -->
<div id="contToken">
   {{ csrf_field() }}
</div>

<div class="row justify-content-center">
          <!-- Left col -->
          <section class="col-lg-7">
            <!-- Control de tema -->
            <div class="card callout callout-warning" style="position: relative; left: 0px; top: 0px;">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-brush mr-1"></i>
                  @lang('general.themeControl')
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <span class="span-btn" data-toggle="collapse" data-target="#themeControl-filters" aria-expanded="false" aria-controls="themeControl-filters">
                  <i class="fas fa-angle-up control-collapse" data-toggle='tooltip' data-placement='bottom' title='Minimizar'></i>
                  </span>
                </div>
                <!-- /.card-tools -->
              </div>

              <div class="show" id="themeControl-filters">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <form class="form-group" action="{{ route('setTheme') }}" method="post" id="selectTheme">
                     <div class="row d-flex">
                        <div class="col-sm-6 ml-auto">
                          <label>Tema General:</label>
                          <div class="d-flex"></div>
                          <div class="d-flex flex-wrap">
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-darkgreen-dgcc" class="bg-darkgreen-dgcc elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-darkred-dgcf" class="bg-darkred-dgcf elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-darkgold-dgcrca" class="bg-darkgold-dgcrca elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-secondary" class="bg-secondary elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-dark" class="bg-dark elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-darkBlue" class="bg-darkBlue elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-light" class="bg-light elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-info" class="bg-info elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-success" class="bg-success elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-warning" class="bg-warning elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="general"  data-color-class="bg-danger" class="bg-danger elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <label>Logo:</label>
                          <div class="d-flex"></div>
                          <div class="d-flex flex-wrap">
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-darkgreen-dgcc" class="bg-darkgreen-dgcc elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-darkred-dgcf" class="bg-darkred-dgcf elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-darkgold-dgcrca" class="bg-darkgold-dgcrca elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-secondary" class="bg-secondary elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-dark" class="bg-dark elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-darkBlue" class="bg-darkBlue elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-light" class="bg-light elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-info" class="bg-info elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-success" class="bg-success elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-warning" class="bg-warning elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="sello"  data-color-class="bg-danger" class="bg-danger elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                          </div>
                        </div>
                     </div>

                     <div class="row d-flex">
                        <div class="col-sm-6 ml-auto">
                          <label>Barra Lateral:</label>
                          <div class="d-flex"></div>
                          <div class="d-flex flex-wrap">
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-darkgreen-dgcc" class="bg-darkgreen-dgcc elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-darkred-dgcf" class="bg-darkred-dgcf elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-darkgold-dgcrca" class="bg-darkgold-dgcrca elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-secondary" class="bg-secondary elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-dark" class="bg-dark elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-darkBlue" class="bg-darkBlue elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-light" class="bg-light elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-info" class="bg-info elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-success" class="bg-success elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-warning" class="bg-warning elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="aside"  data-color-class="bg-danger" class="bg-danger elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <label>Barra Superior:</label>
                          <div class="d-flex"></div>
                          <div class="d-flex flex-wrap">
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-darkgreen-dgcc" class="bg-darkgreen-dgcc elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-darkred-dgcf" class="bg-darkred-dgcf elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-darkgold-dgcrca" class="bg-darkgold-dgcrca elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-secondary" class="bg-secondary elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-dark" class="bg-dark elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-darkBlue" class="bg-darkBlue elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-light" class="bg-light elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-info" class="bg-info elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-success" class="bg-success elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-warning" class="bg-warning elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                            <span onclick="changeColors(this)" data-target="nav"  data-color-class="bg-danger" class="bg-danger elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></span>
                          </div>
                        </div>
                     </div>
                     <input type="hidden" name="" value="{{Session::get('aside')}}" id="aside-color">
                     <input type="hidden" name="" value="{{Session::get('nav')}}" id="nav-color">
                     <input type="hidden" name="" value="{{Session::get('sello')}}" id="sello-color">

                     <div class="row padding-row" align="right">
                        <div class="col-sm-12">
                           <button  type="button" id="saveTheme" class="btn btn-link" data-toggle='tooltip' data-placement='bottom' title='Aplicar'>
                           <i class="fas fa-paint-roller"></i> Aplicar
                           </button>
                        </div>
                     </div>
                  </form>
                </div>
              </div><!-- /.card-body -->
            </div>

            </div>

            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
@endsection
@section('scripts')
<script src="{{ url('js/themeControl.js') }}"></script>

@stop
