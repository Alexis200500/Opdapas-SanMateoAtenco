<table>
    <thead>
        <tr>
            <th style="font-size: 12px; font-weight:bold; color: #02AC66; text-align:center;">N°</th>
            <th>Nombre o razón social</th>
            <th>Fecha de nacimiento</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>E-mail</th>
            <th>Celular</th>
            <th>Dirección</th>
            <th>Barrio</th>
            <th>No.Inmueble</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id}}</td>
                <td>{{ $usuario->nombre}}</td>
                <td>{{ $usuario->fecha_n}}</td>
                <td>{{ $usuario->edad}}</td>
                <td>{{ $usuario->sexo}}</td>
                <td><a href="mailto: {{$usuario->email}}">{{ $usuario->email}}</a></td>
                <td>{{ $usuario->celular}}</td>
                <td>{{ $usuario->calle}}</td>
                <td>{{ $usuario->id_barrio}}</td>
                <td>{{ $usuario->num_inmueble}}</td>
            </tr>
        @endforeach
    </tbody>
</table>