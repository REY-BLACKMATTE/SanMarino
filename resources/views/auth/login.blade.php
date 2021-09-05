@extends('layouts.app')
@section('title', 'Iniciar Sesión')
@section('content')

<div class="scroll-down"><h1 class="scroll-text"> SCROLL DOWN </h1>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
        <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z" />
    </svg>
</div>
<div class="container-login"></div>

<form method="POST" action="{{ route('login') }}">
    <div class="modal-login">
        @csrf
        <div class="modal-container">
            <div class="modal-left">
                <h1 class="modal-title">Bienvenido!</h1>
                <img src="img/logo_des_brown.png" style="width:100%;" class="img" alt="">
                <p></p>
                <div class="input-block">
                    <label for="email" class="input-label">{{ __('Cuenta de Usuario') }}</label>
                    <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ejemplo@gmail.com">

                    @error('email')
                    <script type="text/javascript">
                        var message = "<?php echo $message; ?>";
                        window.onload = function() {
                            loginMessage(message);
                        };
                    </script>
                    @enderror
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" name="password" placeholder="Contraseña">

                    @error('password')
                    <script type="text/javascript">
                        var message = "<?php echo $message; ?>";
                        window.onload = function() {
                            loginMessage(message);
                        };
                    </script>
                    @enderror
                </div>
                <div class="modal-buttons">
                    <button class="input-button">Login</button>
                </div>

            </div>
            <div class="modal-right">
                <img src="img/all.gif" alt="">
            </div>
            <span type="button" class="icon-button close-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z">
                    </path>
                </svg>
            </span>

        </div>
        <button type="button" class="modal-button">Haga click aquí para Iniciar</button>

    </div>
</form>

@endsection
@section('scripts')
<script src="{{ url('js/login.js') }}"></script>
@stop
