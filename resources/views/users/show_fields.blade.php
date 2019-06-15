<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <td>Id:</td>
            <td>{!! $user->id !!}</td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td>{!! $user->name !!}</td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td>{!! $user->lastname !!}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{!! $user->email !!}</td>
        </tr>
        <tr>
            <td>Created At:</td>
            <td>{!! $user->created_at !!}</td>
        </tr>
        <tr>
            <td>Updated At:</td>
            <td>{!! $user->updated_at !!}</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">
                <a href="{!! route('users.edit', $user->id) !!}" class="btn btn-primary">Editar</a>
                <a href="{!! route('users.index') !!}" class="btn btn-default">Cancelar</a>
            </td>
        </tr>
    </tfoot>
</table>

