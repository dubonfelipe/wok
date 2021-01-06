@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Ingresar proveedor</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['proveedor.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
				<div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre de proveedor</label>
                    <div class="col-md-9">
                        {!! Form::text('proveedor', null, ['class'=>'form-control', 'id'=>'proveedor', 'placeholder'=>'Ingrese nombre de proveedor', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nit de proveedor</label>
                    <div class="col-md-9">
                        {!! Form::text('nit', null, ['class'=>'form-control', 'id'=>'nit', 'placeholder'=>'Ingrese nit de proveedor', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción de proveedor</label>
                    <div class="col-md-9">
                        {!! Form::text('descripcion', null, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Ingrese descripción de proveedor', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Franquicia a quien provee</label>
                    <div class="col-md-9">
                        <select name="ifFranchise" id="ifFranchise" class="form-control" required>
                            <option disabled selected value>--- Seleccionar tipo de franquicia ---</option>
                            @foreach ($franquicias as $item)
                                <option value="{{$item->id_restaurante}}">{{$item->franquicia}}( {{$item->direccion}} )</option>
                            @endforeach
                        </select>
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