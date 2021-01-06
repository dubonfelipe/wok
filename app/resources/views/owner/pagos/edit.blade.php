@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar Pago</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['pagos.update', $payment->id_payments],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
            <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción de pago</label>
                    <div class="col-md-9">
                        {!! Form::text('descripcion', $payment->descripcion, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Ingrese descripcion de pago', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Monto Q.</label>
                    <div class="col-md-9">
                        {!! Form::number('monto', $payment->monto, ['class'=>'form-control', 'id'=>'monto', 'placeholder'=>'Ingrese monto del pago', 'step'=>'0.01', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Tipo de pago</label>
                    <div class="col-md-9">
                        <div class="radio"><!-- Inline radio buttons -->
                        @if($payment->constante === 'NO')
                            <input id="demo-inline-form-radio" class="magic-radio" value="NO" type="radio" name="inline-form-radio" checked>
                            <label for="demo-inline-form-radio">Variable</label>

                            <input id="demo-inline-form-radio-2" class="magic-radio" value="SI" type="radio" name="inline-form-radio">
                            <label for="demo-inline-form-radio-2">No variable</label>
                        @else
                            <input id="demo-inline-form-radio" class="magic-radio" value="NO" type="radio" name="inline-form-radio">
                            <label for="demo-inline-form-radio">Variable</label>

                            <input id="demo-inline-form-radio-2" class="magic-radio" value="SI" type="radio" name="inline-form-radio" checked>
                            <label for="demo-inline-form-radio-2">No variable</label>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Franquicia a quien realizo el pago</label>
                    <div class="col-md-9">
                        
                        @if(Auth::user()->rol == "Propietario")
                        <select name="ifFranchise" id="ifFranchise" class="form-control" required>
                            <option disabled selected value>--- Seleccionar tipo de franquicia ---</option>
                            @foreach ($franquicias as $item)
                                @if($item->id_restaurante === $payment->restaurante)
                                    <option value="{{$item->id_restaurante}}" selected>{{$item->franquicia}}( {{$item->direccion}})</option>
                                @else
                                    <option value="{{$item->id_restaurante}}">{{$item->franquicia}}( {{$item->direccion}} )</option>
                                @endif
                            @endforeach
                        </select>
                        @else
                            <label class="col-md-9 control-label" for="demo-text-input">{{$franquicias->franquicia}}( {{$franquicias->direccion}} )</label>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Proveedor</label>
                    <div class="col-md-9">
                        <select name="proveedor" id="proveedor" class="form-control" required>
                            @foreach ($proveedores as $item)
                                @if($item->id == $payment->proveedores)
                                    <option value="{{$item->id}}" selected>{{$item->proveedor}}</option>
                                @else
                                    <option value="{{$item->id}}">{{$item->proveedor}}</option>
                                @endif
                            @endforeach
                        </select>
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