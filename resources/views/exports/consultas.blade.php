
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Consulta</th>
        <th>Fecha</th>
    </tr>
    </thead>
    <tbody>
    @foreach($consultas as $consulta)
        <tr>
            <td>{{ $consulta->nombre }}</td>
            <td>{{ $consulta->email }}</td>
            <td>{{ $consulta->texto }}</td>
            <td>{{ $consulta->fecha_creado }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
