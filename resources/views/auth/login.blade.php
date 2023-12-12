@extends('layouts.guest')
@section('title', 'Inicio de sesión | NextTopic')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section('content')
    <div class="con__login">
        <h1>¡Bienvenido de nuevo!</h1>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" name="email" required class="input__general">
                @if ($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Contraseña" name="password" required class="input__general">
                @if ($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                @endif
                <a href="{{route('password.request')}}" class="forget__password">¿Olvidó su contraseña?</a>
            </div>
            <div class="form-group form__group__btn">
                <input type="submit" value="Continuar" class="btn__subm">
            </div>
            <div class="form-group">
                <a href="{{route('login.google')}}" class="google__login"><img src="{{asset('img/icons/google.webp')}}" alt="Google">Continuar con Google</a>
            </div>
            <div class="form-group">
                <a href="{{route('register')}}" class="src__register">¿No tiene cuenta? Regístrese</a>
            </div>
            <small>Al iniciar sesión acepta los <a href="#"><b>Terminos y condiciones</b></a> y reconoce la <a href="#"><b>Política de privacidad</b></a> de NextTopic.</small>
        </form>
    </div>
@endsection
