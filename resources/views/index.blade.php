@extends('layouts.app')
@section('content')
    <div class="w-100 backgrond-home">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12  col-md-6">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-sm-12  col-md-6"></div>
            <div class="col-12 col-sm-12">
                <h1 class="text-center text-color-blanco">Conectado dimensiones</h1>
                <p class="text-center text-color-blanco">Creamos experiencias con ayuda de la tecnologías para traspaser las fronteras del conocimiento.</p>
            </div>
            <div class="container">
                <div class="row button-cont">
                    @guest
                        <div class="col-6 col-sm-6 text-right">
                            <a href="{{ route('login') }}" class="btn btn-primary button-primario">ENTRAR</a>
                        </div>
                        
                        @if (Route::has('register'))
                            <div class="col-6 col-sm-6 text-left">
                                <a href="{{ route('register') }}" class="btn btn-primary button-secondary">REGISTRATE GRATIS</a>
                            </div>
                        @endif
                    @else
                        <div class="col-12 col-sm-12 text-center">
                            <a href="#" class="btn btn-primary button-secondary" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">SALIR</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </div>
                    @endguest
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="w-100 body-home">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="text-center color-secondary-title">NUESTRA PLATAFORMA</h2>
                    <p class="text-center">La plataforma Lantia, esta compuesta por un conjunto de componentes que te ayudarán a realizar Procesos de innovación de una manera efectiva.</p>
                </div>
                <div class="container">
                    <div class="row information">
                        <div class="col-12 col-sm-12  col-md-4 text-center">
                            <div class="ico">
                                <span class="lnr lnr-leaf"></span>
                            </div>
                            <h3 class="text-center">Árboles Tecnológicos</h3>
                            <p class="text-center">Construye fácilmente árboles de procesos, y conéctalos con oportunidades en otras industrias.</p>
                        </div>
                        <div class="col-12 col-sm-12  col-md-4 text-center">
                            <div class="ico">
                                <span class="lnr lnr-rocket"></span>
                            </div>
                            <h3 class="text-center">Buscador de Patentes</h3>
                            <p class="text-center">Contamos con mecanismos de búsquedas de patentes para ayudarte a encontrar aquello que buscas on mayor precisión.</p>
                        </div>
                        <div class="col-12 col-sm-12  col-md-4 text-center">
                            <div class="ico">
                                <span class="lnr lnr-users"></span>
                            </div>
                            <h3 class="text-center">Zona Creativa</h3>
                            <p class="text-center">Tableros virtuales para la construción el conocimiento de manera efectiva.</p>
                        </div>
                        <div class="col-12 col-sm-12  col-md-4 text-center">
                            <div class="ico">
                                <span class="lnr lnr-license"></span>
                            </div>
                            <h3 class="text-center">Red de expertos</h3>
                            <p class="text-center">Conéctate a una red de conocimiento y recibe asesorías personalizadas mediante video-chat.</p>
                        </div>
                        <div class="col-12 col-sm-12  col-md-4 text-center">
                            <div class="ico">
                                <span class="lnr lnr-briefcase"></span>
                            </div>
                            <h3 class="text-center">Mapa de complejidad</h3>
                            <p class="text-center">Navega a través de una herramienta dinamica a través de tendencias en las industrias.</p>
                        </div>
                        <div class="col-12S col-sm-12  col-md-4 text-center">
                            <div class="ico">
                                <span class="lnr lnr-magic-wand"></span>
                            </div>
                            <h3 class="text-center">Trabajo colaboratico</h3>
                            <p class="text-center">Trabaja eficientemente con tu equipo de trabajo en tiempo real.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
