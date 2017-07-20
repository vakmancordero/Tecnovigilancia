@extends('layouts.main')

@section('content')

<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Administrador de calendario de mantenimiento de equipos biomédicos</a>
        </div>
        <ul class="nav navbar-right top-nav">
            @isset(Auth::user()->name)
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Perfil </a></li>
                    <li><a href="#"><i class="fa fa-fw fa-gear"></i> Configuración </a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endisset
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="/"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                </li>
                @isset(Auth::user()->name)
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                            <i class="fa fa-user-circle"></i>
                            Usuarios <i class="fa fa-fw fa-caret-down"></i>
                        </a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="/users">Listar usuarios</a>
                            </li>
                            <li>
                                <a href="/users/create">Crear un usuario nuevo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="/calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Calendario </a>
                    </li>
                @endisset
            </ul>
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">

            @yield('wrapper')

        </div>
    </div>

</div>
