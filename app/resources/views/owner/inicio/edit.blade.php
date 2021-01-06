@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Información de Propietario y Franquicia</h3>
        <h5>Proceso inicial</h5>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['ingresoPropietario.update', $owner->id_owner],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input"><b>Información de propietario</b></label>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Primer Nombre</label>
                    <div class="col-md-9">
                        {!! Form::text('primer_nombre',  $owner->primer_nombre, ['class'=>'form-control', 'id'=>'primer_nombre', 'readonly'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Segundo Nombre</label>
                    <div class="col-md-9">
                        {!! Form::text('segundo_nombre', null, ['class'=>'form-control', 'id'=>'segundo_nombre', 'placeholder'=>'Ingrese segundo nombre']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Otros Nombres</label>
                    <div class="col-md-9">
                        {!! Form::text('otros_nombres', null, ['class'=>'form-control', 'id'=>'otros_nombres', 'placeholder'=>'Ingrese otros nombres']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Primer Apellido</label>
                    <div class="col-md-9">
                        {!! Form::text('Primer apellido',  $owner->primer_apellido, ['class'=>'form-control', 'id'=>'primer_apellido', 'readonly'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Segundo Apellido</label>
                    <div class="col-md-9">
                        {!! Form::text('segundo_apellido', null, ['class'=>'form-control', 'id'=>'segundo_apellido', 'placeholder'=>'Ingrese segundo apellido']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Apellido Casada</label>
                    <div class="col-md-9">
                        {!! Form::text('apellido_casada', null, ['class'=>'form-control', 'id'=>'apellido_casada', 'placeholder'=>'Ingrese apellido casada']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Documento de Identificación</label>
                    <div class="col-md-9">
                        {!! Form::text('dpi', null, ['class'=>'form-control', 'id'=>'dpi', 'placeholder'=>'Ingrese documento de identificación', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Teléfono</label>
                    <div class="col-md-9">
                        {!! Form::text('telefono', null, ['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'9999-9999', 'required'=>'',  'maxlength'=>'8']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Teléfono Alternativo</label>
                    <div class="col-md-9">
                        {!! Form::text('telefono2', null, ['class'=>'form-control', 'id'=>'telefono2', 'placeholder'=>'9999-9999',  'maxlength'=>'8']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input"><b>Información de franquicia</b></label>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Dirección de franquicia</label>
                    <div class="col-md-9">
                        {!! Form::text('direccion_franquicia', null, ['class'=>'form-control', 'id'=>'direccion_franquicia', 'placeholder'=>'Ingrese dirección de franquicia', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Telefono de franquicia</label>
                    <div class="col-md-9">
                        {!! Form::text('telefono_franquicia', null, ['class'=>'form-control', 'id'=>'telefono_franquicia', 'placeholder'=>'9999-9999', 'required'=>'',  'maxlength'=>'8']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">E-mail de franquicia</label>
                    <div class="col-md-9">
                        {!! Form::email('email_franquicia', null, ['class'=>'form-control', 'id'=>'email_franquicia', 'placeholder'=>'Ingrese correo electronico']) !!}
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

@section('script')

<!--=================================================-->

<!--Demo script [ DEMONSTRATION ]-->
<script src="js/demo/nifty-demo.min.js"></script>

@endsection