<header>
    <nav class="navbarr">
        <div class="logo-menu" id="logo-menu">
            <img src="{{asset('img/menu.png')}}" alt="">
        </div>
        <ul class="navbar-ul" id="lista"> 
            <img src="{{asset('img/logo2.png')}}" style="width: 150px" alt="">
            <li class="lista {{request()->Routeis('home') ? 'active-lista' : ''}}" >
                <a class="{{request()->Routeis('home') ? 'active-link' : ''}}" href="{{route('home')}}"> Inicio</a>
            </li>
            <li class="lista {{request()->Routeis('user.index') ? 'active-lista' : ''}}" >
                <a class="{{request()->Routeis('user.index') ? 'active-link' : ''}}" href="{{route('user.index')}}">Registro de Usuarios</a>
            </li>
            <li class="lista {{request()->Routeis('user.grafico') ? 'active-lista' : ''}}">
                <a class="{{request()->Routeis('user.grafico') ? 'active-link' : ''}}" href="{{route('user.grafico')}}" >Grafico de Usuarios</a>
            </li>
             
        </ul>
       
    </nav>
    <div class="titulo-header">
        <h2>
            @yield('subtitulo')
        </h2>
    </div>
    <script>
        const logoMenuElement=document.getElementById('logo-menu');
        const listaElement=document.getElementById('lista');
        logoMenuElement.addEventListener('click',()=>{
            listaElement.classList.toggle('clicMenu');
        })
    </script>
</header>

