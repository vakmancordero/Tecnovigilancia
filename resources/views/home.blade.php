@extends('layouts.menu')

@section('title')
    .: Tecnovigilancia :. Inicio
@stop

@section('wrapper')

<!-- Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Página principal <small>.: Tecnovigilancia :.</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bienvenido <strong>John Smith</strong>
            </li>
        </ol>
    </div>
</div>

{{-- Secciones del dashboard --}}
<div class="row">

    {{-- Usuarios --}}
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user-circle fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Usuarios registrados!</div>
                    </div>
                </div>
            </div>
            <a href="/users">
                <div class="panel-footer">
                    <span class="pull-left">Ir al administrador</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    {{-- Equipos --}}
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>Equipos!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Ir al administrador</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    {{-- Calendario --}}
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-calendar fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">16/07</div>
                        <div>Calendario!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Administrar mantenimiento</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    {{-- Documentación --}}
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class=""><h4>Documentación</h4></div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Generar reportes</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

</div>

@stop