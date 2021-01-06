@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Ingresar cantidad de efectivo en caja</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            {!! Form::open(['route'=>['corteCaja.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
				<div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción</label>
                    <div class="col-md-9">
                    {!! Form::number('efcaja', null, ['class'=>'form-control', 'id'=>'efcaja', 'placeholder'=>'Ingrese cantidad de efectivo en caja', 'step'=>'0.01', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input"></label>
                    <div class="col-md-9">
                        {!! Form::submit('Ingresar Monto', ['id'=>'guardar', 'class'=>'btn btn-md btn-primary btn-rounded']) !!}  
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection