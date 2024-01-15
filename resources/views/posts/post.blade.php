@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('css/components.css')}}">
<link rel="stylesheet" href="{{asset('css/post.css')}}">
<link rel="stylesheet" href="{{asset('css/format-post.css')}}">
@endsection
@section('content')
<div class="div__post__content">
    <div class="header__post">
        <figure class="con__potraid">
            <img src="https://miro.medium.com/v2/resize:fit:1400/format:webp/1*BniKIhT3c54sIEuPtzRQKw.jpeg" alt="">
        </figure>
        <div class="title__post">
            What I Learned as a Product Designer at Apple
        </div>
        <div class="author__post">
            <a href="#" class="con__img__author">
                <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="">
            </a>
            <div class="info__author">
                <a href="#">Hernán Torres</a>|
                <button>Seguir</button>
                <span class="info">6 min read | Dec 30, 2022</span>
            </div>
        </div>
        <div class="bar__post">
            <button><i class="fi fi-rr-hands-heart"></i></button>
            <span class="divider"></span>
            <button><i class="fi fi-rr-bookmark"></i></button>
            <button><i class="fi fi-rr-menu-dots"></i></button>
        </div>
        <div class="body__post">
            <div class="ch bg ew ex ey ez"><h1 id="bb1b" class="pg ny gn be nz ph pi pj od pk pl pm oh pn po pp pq pr ps pt pu pv pw px py pz bj" data-selectable-paragraph="">Great design will take you far, great communication will take you even further: influence people and move things forward.</h1><p id="f98a" class="pw-post-body-paragraph mi mj gn mk b ml os mn mo mp ot mr ms mt ou mv mw mx ov mz na nb ow nd ne nf fk bj" data-selectable-paragraph="">Projects get built when enough people believe in them. From small talks to elaborating decisions to VP presentations. The way we speak, project ourselves and elaborate our thoughts is fundamental for getting consensus, influencing people, and moving things forward.</p><p id="fd97" class="pw-post-body-paragraph mi mj gn mk b ml mm mn mo mp mq mr ms mt mu mv mw mx my mz na nb nc nd ne nf fk bj" data-selectable-paragraph="">My biggest learning was to put passion into my speech. Not only when presenting work, but e<em class="pf">specially</em> when talking in meetings. Be truly excited about your work and show this excitement to everyone working around you.</p><p id="c509" class="pw-post-body-paragraph mi mj gn mk b ml mm mn mo mp mq mr ms mt mu mv mw mx my mz na nb nc nd ne nf fk bj" data-selectable-paragraph="">Jobs had an amazing ability to make his ideas understandable and memorable because he spoke with passion. <mark class="ul um ao">People may not remember what you said, but they will remember how </mark><mark class="ul um ao"><em class="pf">you made them feel</em></mark><mark class="ul um ao">: confident, interested, optimistic, bored, reluctant, etc.</mark></p><p id="5326" class="pw-post-body-paragraph mi mj gn mk b ml mm mn mo mp mq mr ms mt mu mv mw mx my mz na nb nc nd ne nf fk bj" data-selectable-paragraph="">At the end of the day, we’re not only selling products to customers externally, but also selling our ideas to teams and stakeholders internally, and the key to any successful sale is communication.</p></div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/menu.js')}}"></script>
@endsection
