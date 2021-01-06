@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar tipo de precio</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['typePrice.update', $typePrice->id_type_price],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción</label>
                    <div class="col-md-9">
                        {!! Form::text('descripcion', $typePrice->descripcion, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Ingrese una descripción para el tipo de precio', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input"></label>
                    <div class="col-md-9">
                        {!! Form::submit('Guardar', ['id'=>'guardar', 'class'=>'btn btn-primary btn-rounded']) !!}  
                    </div>
                </div>
                
            {!! Form::close() !!}
            
        </div>
    </div>
</div>

@endsection