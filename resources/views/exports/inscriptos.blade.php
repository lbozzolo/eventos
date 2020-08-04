
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>DNI</th>
        <th>País</th>
        <th>Localidad</th>
        <th>Ocupación</th>
        <th>Institución</th>
        <th>Fecha</th>
    </tr>
    </thead>
    <tbody>
    @foreach($inscriptos as $inscripto)
        <tr>
            <td>{{ $inscripto->name }}</td>
            <td>{{ $inscripto->lastname }}</td>
            <td>{{ $inscripto->email }}</td>
            <td>{{ $inscripto->phone }}</td>
            <td>{{ $inscripto->dni }}</td>
            <td>{{ $inscripto->pais }}</td>
            <td>{{ $inscripto->localidad }}</td>
            <td>{{ $inscripto->ocupacion }}</td>
            <td>{{ $inscripto->institucion }}</td>
            <td>{{ $inscripto->fecha_creado }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
