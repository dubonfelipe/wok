@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Editar frase</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['phrases.update', $phrase->id_frases],'class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Tipo de FEL</label>
                    <div class="col-md-9">
                        <select name="id_fel" id="id_fel" class="form-control" required>
                            <option disabled selected value>--- Seleccionar tipo de FEL ---</option>
                            @foreach ($fel_types as $item)
                                @if ($item->id_fel == $phrase->fel)
                                    <option value="{{$item->id_fel}}" selected>{{$item->descripcion}}</option>
                                @else
                                    <option value="{{$item->id_fel}}">{{$item->descripcion}}</option>    
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Descripción</label>
                    <div class="col-md-9">
                        {!! Form::text('descripcion', $phrase->descripcion, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Ingrese la descripción de la frase', 'required'=>'']) !!}
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