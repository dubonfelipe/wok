@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de pagos {{$mes}} del {{$anio}}</h3>
        <br>
        
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Pagos</h3>
        </div>
        {!! Form::open(['route'=>['pagos.registro'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
                <div class="col-md-2">
                    <select name="mes" id="mes" class="form-control" required>
                        
                        @foreach ($meses as $key => $value)
                            @if( $key == $mes_anterior)
                                <option value="{{$key}}" selected>{{$value}}</option>
                            @else
                                <option value="{{$key}}">{{$value}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="anio" id="anio" class="form-control" required>
                        
                        @foreach ($anios as $key => $value)
                            @if( $value == $anio)
                                <option value="{{$value}}" selected>{{$value}}</option>
                            @else
                                <option value="{{$value}}">{{$value}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                        {!! Form::submit('Buscar', ['id'=>'guardar', 'class'=>'btn btn-success btn-rounded']) !!}  
                </div>
        {!! Form::close() !!}
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Descripción</th>
                        <th class="min-tablet">Monto</th>
                        <th class="min-tablet">Proveedor</th>
                        <th class="min-tablet">Tipo de Pago</th>
                        <th class="min-tablet">Fecha de ingreso </th>
                        <th class="min-tablet">Franquicia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pagos as $item)
                        <tr>
                            <td>{{$item->ds}}</td>
                            <td>Q.{{$item->monto}}</td>
                            <td>{{$item->proveedor}}</td>
                            <td>{{($item->constante==='SI')?'Valor constante':'Valor variable por mes'}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->franquicia}} ({{$item->direccion}})</td>
                        </tr>    
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('script')



    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    {!! Html::script('js/demo/nifty-demo.min.js') !!}

 
    <script>
        function deletePayment(id) {
            swal({
                title: "¿Se encuentra seguro de eliminar el registro?",
                text: "El registro de pago será eliminado del sistema permanentemente",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "¡Sí, quiero borrarlo!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: true
            }, function () {
                $.ajax({
                    type: 'post',
                    url: '{{ route('pagos.delete') }}',
                    data: {
                    '_token': "{{ csrf_token() }}",
                    'id': id,
                    },
                    success: function(data) {
                        if ((data.errors)) {
                            console.log(data.errors);
                            console.log('ERROR_FLAG');
                        } else {
                            console.log('SUCCESS_FLAG');
                            console.log(data);
                            location.reload();
                        }
                    },
                }); 
            });
            
        }
    </script>
@endsection