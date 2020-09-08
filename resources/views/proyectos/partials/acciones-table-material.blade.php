<div class='btn-group'>

    <button title="Editar" type="button" data-toggle="modal" data-target="#edit{!! $item->id !!}" class="btn btn-xs  btn-dark">
        <i class="mdi mdi-pencil-box mdi-18px"></i></button>
    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-xs  btn-danger">
        <i class="mdi mdi-delete mdi-18px"></i></button>

</div>

    <!-- Modal window -->
    <div class="modal fade" id="edit{!! $item->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100">Editar archivo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['url' => route('material.update', $item->id), 'method' => 'put']) !!}
                <div class="modal-body">

                    <div class="form-group col-lg-12">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', $item->nombre, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-lg-12">
                        {!! Form::label('author', 'Autor') !!}
                        {!! Form::text('author', $item->author, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-lg-12">
                        {!! Form::label('area', 'Área') !!}
                        {!! Form::text('area', $item->area, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-lg-12">
                        {!! Form::label('comision_id', 'Comisión') !!}
                        {!! Form::number('comision_id', $item->comision_id, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-lg-12">
                        {!! Form::label('tags[]', 'Etiquetas') !!}
                        {!! Form::select('tags[]', (isset($tags))? $tags : null, $item->tags, ['class' => 'form-control select-multiple', 'multiple', 'style' => 'width: 100%']) !!}
                    </div>

                </div>
                <div class="modal-footer">
                    <button title="Crear" type="submit" class="btn btn-sm btn-primary">Aceptar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="delete{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar archivo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar este archivo?</p>
                    <p class="lead">{!! $item->nombre !!}</p>
                </div>
                <div class="modal-footer">
                    {!! Form::open(['url' => route('material.destroy', $item->id), 'method' => 'delete']) !!}

                    <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
