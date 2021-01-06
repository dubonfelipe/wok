@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Registrar Banco</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['bancos.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
				<div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre de Banco</label>
                    <div class="col-md-9">
                        {!! Form::text('banco', null, ['class'=>'form-control', 'id'=>'banco', 'placeholder'=>'Ingrese el nombre del banco', 'required'=>'']) !!}
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

