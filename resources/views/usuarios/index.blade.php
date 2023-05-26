@extends('layouts.layouts')
@section('titulo','Usuarios')

@section('contenido')
    <h1 class="text-center">
        Vista usuarios
    </h1>
    <a href="{{route('user.create')}}" class="btn btn-primary">Nuevo Usuario</a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Correo Electronico
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        @foreach ($usuarios as $usuario)
            <tbody>
                <tr>
                    <th>
                        {{$usuario->id}}
                    </th>
                    <td>
                        <a href="{{route('user.show',$usuario)}}">{{$usuario->name}}</a>
                        
                    </td>
                    <td>
                        {{$usuario->email}}
                    </td>
                    <td>
                        <form action="{{route('user.destroy',$usuario)}}" method="POST">
                            @csrf
                            @method('Delete')
                            <a href="{{route('user.edit',$usuario)}}" class="btn btn-success">Editar</a>
                            <button class="btn btn-danger" type="submit"> Eliminar </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
       
    </table>
@endsection