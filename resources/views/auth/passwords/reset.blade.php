@extends('layouts.guest')
@section('title', 'Restablecer Contraseña | NextTopic')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/verify.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="card-header">Restablecer Contraseña</div>
        <div class="card-body justify">
            Ingrese la nueva contraseña
        </div>
        <form action="{{route('password.update')}}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <label for="email" style="text-align: left">Email</label>
                <input type="email" placeholder="Email" name="email" required class="input__general" value="{{ $email ?? old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" style="text-align: left">Contraseña</label>
                <input type="password" placeholder="Contraseña" name="password" required class="input__general"autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" style="text-align: left">Confirmar contraseña</label>
                <input type="password" placeholder="Confirmar contraseña" name="password_confirmation" required class="input__general"  autocomplete="new-password">
            </div>
            <div class="form-group form__group__btn">
                <button type="submit" class="btn__subm">{{ __('Cambiar contraseña') }}</button>
            </div>
        </form>
    </div>
@endsection
