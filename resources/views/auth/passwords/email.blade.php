@extends('layouts.guest')
@section('title', 'Restablecer Contraseña | NextTopic')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/verify.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="card-header">Restablecer Contraseña</div>
        <div class="card-body justify">
            Ingrese su correo electrónico para enviar el enlace de recuperación
        </div>
        <form action="{{route('password.email')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="email" style="text-align: left">Email</label>
                <input type="email" placeholder="Email" name="email" required class="input__general" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group form__group__btn">
                <button type="submit" class="btn__subm">{{ __('Enviar enlace de recuperación') }}</button>
            </div>
        </form>
    </div>
@endsection
