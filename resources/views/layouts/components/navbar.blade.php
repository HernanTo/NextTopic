<header class="header">
    <nav class="nav">
        <div class="sect__nav sect__nav__logo">
            <a href="{{route('home')}}">NextTopic</a>
        </div>
        <div class="sect__nav">
            <a href="">
                <i class="fi fi-rr-search"></i>
                <span>Buscar</span>
            </a>
        </div>
        <div class="sect__nav"></div>
        <div class="sect__nav">
            <a href="">
                <i class="fi fi-rr-edit"></i>
                <span>Crear</span>
            </a>
        </div>
        <div class="sect__nav" id="photo__profile">
            <figure class="figure__photo__profile">
                <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="">
            </figure>
        </div>
    </nav>
</header>
<div class="menu__header" id="menu__header">
    <nav class="nav__menu">
        <a class="items" href="">
            <i class="fi fi-ss-user"></i>
            Perfil
        </a>
        <a class="items" href="">
            <i class="fi fi-sr-blog-pencil"></i>
            Mis Posts
        </a>
        <a class="items" href="">
            <i class="fi fi-sr-bookmark"></i>
            Guardados
        </a>
        <a class="items" href="">
            <i class="fi fi-ss-users-medical"></i>
            Comunidades
        </a>
        <div class="divider"></div>
        <a class="items" href="">
            Ajustes
        </a>
        <a class="items" href="">
            Ayuda
        </a>
        <a class="items" href="">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="submit" value="Cerrar sesión" class="btn__log__out">
            </form>
        </a>
    </nav>
</div>
