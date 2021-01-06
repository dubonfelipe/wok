@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar Banco</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['bancos.update', $banco->id_banco],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre de banco</label>
                    <div class="col-md-9">
                        {!! Form::text('banco', $banco->nombre, ['class'=>'form-control', 'id'=>'banco', 'placeholder'=>'Ingrese el nombre de banco', 'required'=>'']) !!}
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