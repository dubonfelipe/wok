@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar certificador</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['certificators.update', $certificador->id_certificador],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre</label>
                    <div class="col-md-9">
                        {!! Form::text('nombre', $certificador->nombre, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Ingrese el nombre del Certificador', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">NIT</label>
                    <div class="col-md-9">
                        {!! Form::text('nit', $certificador->nit, ['class'=>'form-control', 'id'=>'nit', 'placeholder'=>'Ingrese el NIT del Certificador', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción</label>
                    <div class="col-md-9">
                        {!! Form::textarea('descripcion', $certificador->descripcion, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Ingrese una descripción', 'required'=>'']) !!}
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