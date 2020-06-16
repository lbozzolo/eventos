
<table>
    <thead>
    <tr>
        <td colspan="2">
            Códigos del evento {!! $proyecto !!} - {!! $cliente !!}
        </td>
    </tr>
    <tr>
        <th>Código</th>
        <th>Disponible</th>
    </tr>
    </thead>
    <tbody>
    @foreach($codigos as $codigo)
        <tr>
            <td>{{ $codigo->code }}</td>
            <td>{{ ($codigo->user_id)? 'No' : 'Sí' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
