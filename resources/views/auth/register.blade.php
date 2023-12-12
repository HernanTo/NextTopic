@extends('layouts.guest')
@section('title', 'Crear cuenta | NextTopic')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section('content')
    <div class="con__login">
        <h1>¡Unirse a NextTopic!</h1>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" name="email" required class="input__general">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Contraseña" name="password" required class="input__general">
                <br>
            </div>
            <div class="form-group form__group__btn">
                <input type="submit" value="Continuar" class="btn__subm">
            </div>
            <div class="form-group">
                <a href="{{route('login.google')}}" class="google__login"><img src="{{asset('img/icons/google.webp')}}" alt="Google">Continuar con Google</a>
            </div>
            <div class="form-group">
                <a href="{{route('login')}}" class="src__register">¿Tiene una cuenta? Inicie sesión</a>
            </div>
            <small>Al crear una cuenta acepta los <a href="#"><b>Terminos y condiciones</b></a> y reconoce la <a href="#"><b>Política de privacidad</b></a> de NextTopic.</small>
        </form>
    </div>
@endsection
