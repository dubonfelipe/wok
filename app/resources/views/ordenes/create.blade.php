@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Ingresar Pago</h3>
    </div>
</div>


 @endsection

@section('pagecontent')
@if(Session::has('message'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Realizado</strong> {{Session::get('message')}}
</div>
@endif
<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['pagos.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
				<div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción de pago</label>
                    <div class="col-md-9">
                        {!! Form::text('descripcion', null, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Ingrese descripcion de pago', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Monto Q.</label>
                    <div class="col-md-9">
                        {!! Form::number('monto', null, ['class'=>'form-control', 'id'=>'monto', 'placeholder'=>'Ingrese monto del pago', 'step'=>'0.01', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Tipo de pago</label>
                    <div class="col-md-9">
                        <div class="radio"><!-- Inline radio buttons -->
                            <input id="demo-inline-form-radio" class="magic-radio" value="NO" type="radio" name="inline-form-radio" checked>
                            <label for="demo-inline-form-radio">Variable</label>

                            <input id="demo-inline-form-radio-2" class="magic-radio" value="SI" type="radio" name="inline-form-radio">
                            <label for="demo-inline-form-radio-2">No variable</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Franquicia a quien realizo el pago</label>
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
                    <label class="col-md-2 control-label" for="demo-text-input">Proveedor</label>
                    <div class="col-md-9">
                        <select name="proveedor" id="proveedor" class="form-control" required>
                            <option disabled selected value>--- Seleccionar proveedor ---</option>
                            @foreach ($proveedores as $item)
                                <option value="{{$item->id}}">{{$item->proveedor}}</option>
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