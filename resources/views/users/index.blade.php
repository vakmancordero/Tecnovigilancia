@extends('layouts.menu')

@section('title')
    .: Tecnovigilancia :. Administrador de usuarios
@stop

@section('wrapper')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Administrador de usuarios
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/">Inicio</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Usuarios
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Tabla de usuarios registrados</h3>
            </div>
            <div class="panel-body">
                <div class="col-lg-12 ">
                    <table id="eventsTable"
                           data-toggle="table"
                           data-height="400"
                           data-url="/users/all/"
                           data-pagination="true"
                           data-search="true"
                           data-show-toggle="true"
                           data-show-refresh="true">

                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="name" data-align="center" data-sortable="true">Nombre</th>
                            <th data-field="email" data-align="center" data-sortable="true">E-mail</th>
                            <th data-formatter="" data-sortable="true">Editar</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop