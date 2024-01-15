@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('css/components.css')}}">
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('content')
<div class="container__two__clms">
    <div class="body__content">
        @for ($i = 0; $i < 5; $i++)
            @include('layouts.components.post-max')
        @endfor
    </div>
    <div class="aside__content">
        <div class="card__saved">
            <h3>Publicaciones guardadas</h3>
            <div class="card__min__post">
                <a class="header__min__post" href="#">
                    <figure>
                        <img src="{{asset('https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png')}}" alt="">
                    </figure>
                    <h4>Hernán Torres</h4>
                </a>
                <a class="body_min__post" href="#">
                    <h4>What I Learned as a Product Designer at Apple</h4>
                    <span>20 de Dic, 2023</span>
                </a>
            </div>
            <div class="card__min__post">
                <a class="header__min__post" href="#">
                    <figure>
                        <img src="{{asset('https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png')}}" alt="">
                    </figure>
                    <h4>Hernán Torres</h4>
                </a>
                <a class="body_min__post" href="#">
                    <h4>What I Learned as a Product Designer at Apple</h4>
                    <span>20 de Dic, 2023</span>
                </a>
            </div>
            <div class="full__saved">
                <a href="">Ver todos</a>
            </div>
        </div>
        <a class="card text-white bg-info mb-3 card__post__c" style="max-width: 18rem;" href="{{route('create.post')}}">
            <div class="card-header">NextTopic</div>
            <div class="card-body">
              <h5 class="card-title">Escribe en NextTopic</h5>
              <p class="card-text">Comparte a la comunidad tus ideas, pensamientos, recomendaciones, todo lo que le quieras compartir al mundo.</p>
            </div>
          </a>
          <div class="card__saved">
            <h3>Tags recomendados</h3>
            <div class="card__body__as">
                <a href="#">lulu</a>
                <a href="#">lulu</a>
                <a href="#">lulu</a>
                <a href="#">lulu</a>
                <a href="#">lulu</a>
                <a href="#">lulu</a>
            </div>
            <div class="full__saved">
                <a href="">Ver más tags</a>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script src="{{asset('js/menu.js')}}"></script>
@endsection
