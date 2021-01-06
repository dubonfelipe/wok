@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Perfil de usuario</h3>
    </div>
</div>


 @endsection

@section('pagecontent')
@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Conflicto</strong> {{Session::get('message')}}
</div>
@endif
<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['perfil.update', $user->id],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre</label>
                    <div class="col-md-9">
                        {!! Form::text('fname', $user->fname, ['class'=>'form-control', 'id'=>'fname', 'placeholder'=>'Ingrese primer nombre', 'readonly'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Apellido</label>
                    <div class="col-md-9">
                        {!! Form::text('lname', $user->lname, ['class'=>'form-control', 'id'=>'lname', 'placeholder'=>'Ingrese primer apellido', 'readonly'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Rol</label>
                    <div class="col-md-9">
                        {!! Form::text('rol', $user->rol, ['class'=>'form-control', 'id'=>'rol', 'placeholder'=>'Ingrese rol', 'readonly'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Contraseña</label>
                    <div class="col-md-9">
                        <input name="password" type="password" class="form-control" placeholder="Contraseña nueva" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Confirme contraseña</label>
                    <div class="col-md-9">
                        <input name="password2" type="password" class="form-control" placeholder="Confirmar contraseña nueva" required="">
                        
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