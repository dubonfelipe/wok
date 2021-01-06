@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Seleccionar dirección</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['locacion.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
                {!!Form::hidden('cliente',$cliente)!!}
                {!!Form::hidden('pedido',$pedido)!!}
                
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">Dirección</label>
                        <div class="col-md-9">
                        <select name="direccion" id="direccion" class="form-control" onchange="myFunction()" required>
                            <option disabled selected value>--- Seleccionar direccion ---</option>
                            @foreach ($localidadescliente as $item)
                                    <option value="{{$item->direccion}}">{{$item->direccion}}</option>
                            @endforeach
                                    <option value="nu">Nueva direccion</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group" id="new">
                        <label class="col-md-2 control-label" for="demo-text-input">Nueva direccion</label>
                        <div class="col-md-9">
                            {!! Form::text('direccionnew', null, ['class'=>'form-control', 'id'=>'direccionnew', 'placeholder'=>'Ingrese la descripción de dirección']) !!}
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
@section('script')
<script>
    function myFunction(){
        console.log($('#direccion').val());
        if($('#direccion').val()!='nu'){
            $('#new').hide();
        }else{
            $('#new').show();
        }
    }
    $(document).ready(function() {
        $('#new').hide();
    });
</script>
@endsection