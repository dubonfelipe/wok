@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Ingresar cliente</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['delivery.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
            {!!Form::hidden('pedido',$pedido)!!}
				<div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre de cliente</label>
                    <div class="col-md-9">
                        {!! Form::text('cliente', null, ['class'=>'form-control', 'id'=>'cliente', 'placeholder'=>'Ingrese nombre de cliente', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nit de cliente</label>
                    <div class="col-md-9">
                        {!! Form::text('nit', null, ['class'=>'form-control', 'id'=>'nit', 'placeholder'=>'Ingrese nit de cliente', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Correo electrónico de cliente</label>
                    <div class="col-md-9">
                        {!! Form::email('email', null, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Ingrese email de cliente']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Documento de identificación</label>
                    <div class="col-md-9">
                        {!! Form::text('dpi', null, ['class'=>'form-control', 'id'=>'dpi', 'placeholder'=>'Ingrese dpi']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Número teléfono</label>
                    <div class="col-md-9">
                        {!! Form::text('cel', null, ['class'=>'form-control', 'id'=>'cel', 'placeholder'=>'9999-9999']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Dirección</label>
                    <div class="col-md-9">
                        {!! Form::text('direccion', null, ['class'=>'form-control', 'id'=>'direccion', 'placeholder'=>'Ingrese la descripción de dirección']) !!}
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