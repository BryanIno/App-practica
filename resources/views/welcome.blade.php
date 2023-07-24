@extends('layouts.layouts')
@section('subtitulo', 'Bienvenido')
@section('contenido')
    <div class="Inicio">
        
        <img src="{{asset("img/logoblack.png")}}" style="width: 200px; " alt="">
        <p class="">
            Esta implementación de un Crud en Laravel 10 fue realizado con una arquitectura MVC que se conecta a una base de datos MySQL. Su diseño se ha implementado utilizando Bootstrap para algunas partes y CSS puro para otras. Todo esto fue para implementar el uso de Graficos sin utilizar Java Script.
        </p>

        <div>
            <h1>
                Características clave:
            </h1>

            <p> 1- Exportar a Excel: La aplicación permite generar y exportar archivos Excel utilizando la biblioteca "Maatwebsite\Excel", lo que facilita la gestión y análisis de datos.
            </p>
            <p> 2- Gráficos Interactivos: Se ha incorporado la biblioteca "laravel-charts" para crear gráficos interactivos y visualmente atractivos, lo que brinda a los usuarios una forma clara y concisa de visualizar y entender los datos.
            </p>
            <p>      
                3- Alertas Personalizadas: Para mejorar la experiencia del usuario, se ha utilizado la librería SweetAlert2 para mostrar alertas personalizadas que brindan notificaciones claras y amigables sobre diversas acciones y eventos.
            </p>
            <p>  
                4- Validaciones del lado del Servidor: La aplicación realiza validaciones de datos con un Request personalizado, lo que garantiza que los datos ingresados por los usuarios cumplan con los requisitos necesarios. Además, se han implementado mensajes personalizados para guiar a los usuarios en caso de errores.
            </p>    
        </div>
    </div>
    
        
   
@endsection