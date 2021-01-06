@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar proveedor</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['proveedor.update', $proveedor->id_proveedores],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre de proveedor</label>
                    <div class="col-md-9">
                        {!! Form::text('proveedor', $proveedor->nombre, ['class'=>'form-control', 'id'=>'proveedor', 'placeholder'=>'Ingrese nombre de proveedor', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nit de proveedor</label>
                    <div class="col-md-9">
                        {!! Form::text('nit', $proveedor->nit_proveedor, ['class'=>'form-control', 'id'=>'nit', 'placeholder'=>'Ingrese nit de proveedor', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción de proveedor</label>
                    <div class="col-md-9">
                        {!! Form::text('descripcion', $proveedor->descripcion, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Ingrese descripción de proveedor', 'required'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Franquicia a quien provee</label>
                    <div class="col-md-9">
                        @if(Auth::user()->rol == "Propietario")
                            <select name="ifFranchise" id="ifFranchise" class="form-control" required>
                                <option disabled selected value>--- Seleccionar tipo de franquicia ---</option>
                                @foreach ($franquicias as $item)
                                    @if($item->id_restaurante == $proveedor->restaurante)
                                        <option value="{{$item->id_restaurante}}" selected>{{$item->franquicia}}( {{$item->direccion}} )</option>
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