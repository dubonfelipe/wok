@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar tipo de precio</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['precio.update', $precio->id_price],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                
                <div class="form-group">
                    <label class="col-md-2 control-label" >Seleccione tipo de precio</label>
                    <div class="col-md-9">
                        <select name="tipoPrecio" id="tipoPrecio" class="form-control" required>
                            <option disabled selected value>--- Seleccionar tipo de precio ---</option>
                            @foreach ($type_price as $item)
                                @if($item->id_type_price === $precio->type_price)
                                    <option value="{{$item->id_type_price}}" selected>{{$item->descripcion}}</option>
                                @else
                                    <option value="{{$item->id_type_price}}">{{$item->descripcion}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Precio (Q)</label>
                    <div class="col-md-9">
                        {!! Form::number('precio', $precio->monto, ['class'=>'form-control', 'id'=>'precio', 'placeholder'=>'Ingrese precio del platillo', 'step'=>'0.01', 'required'=>'']) !!}
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