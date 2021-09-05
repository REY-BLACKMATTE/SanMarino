@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('La sesión ha expirado, será redireccionado al inicio de sesión.'))

<script type="text/javascript">
                        window.onload = function() {
                            //loginMessage(message);
                            setTimeout(() => {  window.location.href = "{{url('login')}}"; }, 2000);
                        };
                    </script>
