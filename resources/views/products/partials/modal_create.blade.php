

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="form-group">
                    {{ Form::label('name', 'Nombre de la etiqueta') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('descripcion', 'Descripción') }}
                    {{ Form::textarea('descripcion', null, ['class' => 'form-control','id'=>'descripcion']) }}
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <div class="form-group">
                    {{ Form::submit('Guardar', ['class' => ' bt-guardar btn btn-sm btn-primary']) }}
                </div>
            </div>
        </div>
    </div>
</div>


