@extends('layouts.layouts')
@section('titulo','Ver Usuario')

@section('contenido')
    <h1>
        Bienvenido {{$user->name}}
    </h1>
    <p>
        Nombre de Usuario: {{$user->name}}
        <br>
        Correo Electronico: {{$user->email}}
    </p>
@endsection