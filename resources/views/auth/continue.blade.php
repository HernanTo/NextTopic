@extends('layouts.guest')
@section('title', 'Continuar registro | NextTopic')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/verify.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="card-header">¡Solo falta un poco!</div>
        <div class="card-body justify">
            Finaliza de crear tu cuenta para obtener toda la experiencia de NextTopic.
        </div>
        <form action="{{route('createAccount')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nameFull">Nombre completo</label>
                <input type="text" placeholder="Nombre Completo" name="name" required class="input__general">
                @if ($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group form__group__btn">
                <button type="submit" class="btn__subm">{{ __('Crear cuenta') }}</button>
            </div>
        </form>
    </div>
@endsection
