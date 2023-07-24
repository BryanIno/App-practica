@extends('layouts.layouts')

@section('subtitulo', 'Usuarios Creados ')

@section('contenido')
    <div class="contenedor-graficos">
        <div class="tarjeta-grafico">
            <div class="grafico">
                <!--<div class="card-header">Usuarios creados en el Mes</div> -->
                <div class="">
                    <h3>{{ $chart->options['chart_title'] }}</h3>
                    {!! $chart->renderHtml() !!}
                </div>
            </div>
        </div>
        <div class="tarjeta-grafico">
            <div class="grafico2">
                <!--<div class="card-header">Usuarios creados en el Mes</div> -->
                <div class="">
                    <h3>{{ $chart2->options['chart_title'] }}</h3>
                    {!! $chart2->renderHtml() !!}
                </div>
            </div>
        </div>
    </div>
    
    
@endsection

@section('grafico')
    {!! $chart->renderChartJsLibrary() !!}
    {!! $chart->renderJs() !!}
    {!! $chart2->renderJs() !!}
@endsection