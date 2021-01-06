@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar Franquicia</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['negocio.update', $franquicia->id_franchise],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Dirección de franquicia</label>
                    <div class="col-md-9">
                        {!! Form::text('direccion_franquicia', ($franquicia->direccion_franquicia == 'null')?'':$franquicia->direccion_franquicia, ['class'=>'form-control', 'id'=>'direccion_franquicia', 'placeholder'=>'Ingrese dirección de franquicia', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Telefono de franquicia</label>
                    <div class="col-md-9">
                        {!! Form::text('telefono_franquicia', $franquicia->telefono, ['class'=>'form-control', 'id'=>'telefono_franquicia', 'placeholder'=>'9999-9999', 'required'=>'',  'maxlength'=>'8']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">E-mail de franquicia</label>
                    <div class="col-md-9">
                        {!! Form::email('email_franquicia', $franquicia->email, ['class'=>'form-control', 'id'=>'email_franquicia', 'placeholder'=>'Ingrese correo electronico']) !!}
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