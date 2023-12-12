@extends('layouts.guest')
@section('title', 'Verificar email | NextTopic')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/verify.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="card-header">{{ __('Verify Your Email Address') }}</div>
    <div class="card-body">
        {{ __('Antes de continuar, consulte su correo electrónico para obtener un enlace de verificación.') }}
        {{ __('Si no recibió el correo electrónico') }},
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn__subm">{{ __('Reenviar verificación') }}</button>.
        </form>
        @if (session('resent'))
        <br>
        <div class="alert alert-success alert__resent" role="alert">
            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
        </div>
    @endif
    </div>
</div>
@endsection
