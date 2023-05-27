@extends('layouts.layouts')

@section('contenido')

<h1 class="text-center mt-3">Graficos de Usuarios</h1>

<div class="container mb-3">
    <div class="row">
        <div class="col shadow">
            <div class="card">
                <!--<div class="card-header">Usuarios creados en el Mes</div> -->

                <div class="card-body">

                    <h1>{{ $chart->options['chart_title'] }}</h1>
                    {!! $chart->renderHtml() !!}
                    
                </div>
            </div>

        </div>
        <div class="col shadow">
            <div class="card">
                <!--<div class="card-header">Usuarios creados en el Mes</div> -->

                <div class="card-body">

                    <h1>{{ $chart2->options['chart_title'] }}</h1>
                    {!! $chart2->renderHtml() !!}

                </div>

            </div>
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