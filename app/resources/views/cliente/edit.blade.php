@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar cliente</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['clientes.update', $cliente->id_cliente],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
            <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre de cliente</label>
                    <div class="col-md-9">
                        {!! Form::text('cliente', $cliente->nombre, ['class'=>'form-control', 'id'=>'cliente', 'placeholder'=>'Ingrese nombre de cliente', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nit de cliente</label>
                    <div class="col-md-9">
                        {!! Form::text('nit', $cliente->nit_cliente, ['class'=>'form-control', 'id'=>'nit', 'placeholder'=>'Ingrese nit de cliente', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Correo electrónico de cliente</label>
                    <div class="col-md-9">
                        {!! Form::email('email', $cliente->correo, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Ingrese email de cliente']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Documento de identificación</label>
                    <div class="col-md-9">
                        {!! Form::text('dpi', $cliente->dpi, ['class'=>'form-control', 'id'=>'dpi', 'placeholder'=>'Ingrese dpi']) !!}
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