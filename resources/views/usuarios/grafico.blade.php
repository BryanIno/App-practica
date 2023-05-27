@extends('layouts.layouts')

@section('contenido')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <!--<div class="card-header">Usuarios creados en el Mes</div> -->

                <div class="card-body">

                    <h1>{{ $chart->options['chart_title'] }}</h1>
                    {!! $chart->renderHtml() !!}
                    
                </div>
            </div>

        </div>
        <div class="col">
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