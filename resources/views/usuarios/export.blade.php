<table >
    <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Correo Electronico
            </th>
        </tr>
    </thead>
   
    <tbody> 
        @foreach ($usuarios as $usuario)
            <tr>
                <td>
                    {{$usuario->name}}
                </td>
                <td>
                    {{$usuario->email}}
                </td>
            </tr>
        @endforeach
    </tbody>
   
   
</table>