@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Ingresar descripcion de mesa o servicio</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            {!! Form::open(['route'=>['tables.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
                {!! Form::hidden('id_restaurant', $id_restaurant, ['id'=>'id_restaurant','name'=>'id_restaurant']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre</label>
                    <div class="col-md-9">
                        {!! Form::text('nombre', null, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Ingrese el nombre que le asignará a la mesa', 'required'=>'', 'autocomplete'=>'off']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Tipo de servicio</label>
                    <div class="col-md-9">
                        <div class="radio"><!-- Inline radio buttons -->
                            <input id="demo-inline-form-radio" class="magic-radio" value="MS" type="radio" name="inline-form-radio" checked>
                            <label for="demo-inline-form-radio">Mesa</label>

                            <input id="demo-inline-form-radio-2" class="magic-radio" value="LV" type="radio" name="inline-form-radio">
                            <label for="demo-inline-form-radio-2">Llevar</label>

                            <input id="demo-inline-form-radio-3" class="magic-radio" value="DC" type="radio" name="inline-form-radio">
                            <label for="demo-inline-form-radio-3">Domicilio</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input"></label>
                    <div class="col-md-9">
                        {!! Form::submit('Crear', ['id'=>'guardar', 'class'=>'btn btn-primary btn-rounded']) !!}  
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection