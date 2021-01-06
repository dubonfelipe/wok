@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Crear Tipo de Franquicia</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            {!! Form::open(['route'=>['typefranchise.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción</label>
                    <div class="col-md-9">
                        {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Ingrese la descripción de la franquicia', 'required'=>'']) !!}
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