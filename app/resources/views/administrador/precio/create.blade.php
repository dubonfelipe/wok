@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Crear tipo de precio</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['precio.addPrecio', $id],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" >Seleccione tipo de precio</label>
                    <div class="col-md-9">
                        <select name="tipoPrecio" id="tipoPrecio" class="form-control" required>
                            <option disabled selected value>--- Seleccionar tipo de precio ---</option>
                            @foreach ($type_price as $item)
                                <option value="{{$item->id_type_price}}">{{$item->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Precio (Q)</label>
                    <div class="col-md-9">
                        {!! Form::number('precio', null, ['class'=>'form-control', 'id'=>'precio', 'placeholder'=>'Ingrese precio del platillo', 'step'=>'0.01', 'required'=>'']) !!}
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