@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar contador</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['negocio.contador', $franquicia->id_franchise],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Contador</label>
                    <div class="col-md-9">
                        <select name="contador" id="contador" class="form-control" required>
                            <option disabled selected value>--- Seleccione un contador ---</option>
                            @foreach ($contador as $item)
                                @if($item->id == $franquicia->persona_contable)
                                    <option value="{{$item->id}}" selected>{{$item->nombre}} {{$item->apellido}} </option>
                                @else
                                    <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                @endif
                            @endforeach
                                @if($selfContador->id_per_con == $franquicia->persona_contable)
                                    <option value="{{$selfContador->id_per_con}}" selected>{{$selfContador->primer_nombre}} {{$selfContador->primer_apellido}} </option>
                                @else
                                    <option value="{{$selfContador->id_per_con}}">{{$selfContador->primer_nombre}} {{$selfContador->primer_apellido}}</option>
                                @endif
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