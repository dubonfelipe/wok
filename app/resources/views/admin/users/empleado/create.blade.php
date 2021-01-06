@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Crear Tipo de empleado</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['typeEmployee.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
				<div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Tipo de empleado</label>
                    <div class="col-md-9">
                        {!! Form::text('empleado', null, ['class'=>'form-control', 'id'=>'empleado', 'placeholder'=>'Ingrese el tipo del empleado', 'required'=>'']) !!}
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

