@extends('layouts.menu')

@section('title')
    .: Tecnovigilancia :. Calendario
@stop

@section('javascript')
    <script src="{{ asset('assets/tecnovigilancia/myCalendar.js') }}"></script>
@stop

@section('stylesheets')
    <link href="{{ asset('assets/tecnovigilancia/myCalendar.css') }}" rel="stylesheet">
@section('wrapper')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Calendario
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="/">Inicio</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Calendario
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Calendario</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12 ">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop