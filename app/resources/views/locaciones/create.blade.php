@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Ingresar contacto</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['contacto.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
                
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Número teléfono</label>
                    <div class="col-md-9">
                        {!! Form::text('cel', null, ['class'=>'form-control', 'id'=>'cel', 'placeholder'=>'9999-9999']) !!}
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