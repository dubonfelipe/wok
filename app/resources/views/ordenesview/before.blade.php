@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de ordnes de {{$mes}} del {{$anio}}</h3>
        <br>
        
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Ordenes</h3>
        </div>
        {!! Form::open(['route'=>['viewOrder.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
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
            <table id="dtable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Id de orden</th>
                        <th class="min-tablet">Tipo de orden</th>
                        <th class="min-tablet">Estado</th>
                        <th class="min-tablet">Fecha y hora de emisión</th>
                        <th class="min-tablet">Valor total del pedido</th>
                        <th class="min-tablet">Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ordenes as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>
                                @if($item->servicio == 'DC')
                                    Servicio a domicilio
                                @elseif($item->servicio == 'LV')
                                    Servicio para llevar
                                @else
                                    Servicio en mesa
                                @endif
                            </td>
                            <td>
                                @if($item->estado != '0')
                                    Valor cancelado
                                @else
                                    Sin cancelar
                                @endif
                            </td>
                            <td>{{$item->date}}</td>
                            <td>Q.{{number_format($totales[$item->id],2, '.', ',')}}</td>
                            <td>
                                <button id="demo-bootbox-zoom{{$item->id}}" class="btn btn-xs btn-info btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver detalle"><i class="ion-clipboard icon-lg"></i></button>
                            </td>
                        </tr>    
                    @endforeach
                    
                </tbody>
                    <tr>
                        <td class="min-tablet"></td>
                        <td class="min-tablet"></th>
                        <td class="min-tablet"></th>
                        <td class="min-tablet">Total: </th>
                        <td class="min-tablet"><strong> Q.{{number_format($bigTotal,2, '.', ',')}} </strong></th>
                        <td class="min-tablet"></th>
                    </tr>
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
            $(document).ready(function() {
                $('#dtable').dataTable({ "bPaginate": false,"responsive": true }); 
                @foreach ($ordenes as $item)
                    $('#demo-bootbox-zoom{{$item->id}}').on('click', function(){
                        bootbox.alert({
                            title: "Detalle de pedido",
                            message : '<p><span><strong>Detalle: </strong></span></p><table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%"><thead><tr><th class="min-tablet">Cantidad</th><th class="min-tablet">Descripcion</th><th class="min-tablet">Precio unitario</th> <th class="min-tablet">Precio total</th> </tr>  </thead><tbody>@foreach($detalles[$item->id] as $key => $row)<tr>  <td>{{$row->cantidad}}</td><td>{{$row->descripcion}}</td><td>Q.{{number_format($row->precio_unitario,2, '.', ',')}}</td><td>Q.{{number_format($row->precio_unitario*$row->cantidad,2, '.', ',')}}</td></tr>  @endforeach  </tbody></table>',
                            callback : function(result) {
                                //Callback function here
                            },
                            animateIn: 'zoomInDown',
                            animateOut : 'zoomOutUp'
                        });
                    });
                @endforeach 
            });
        </script>
@endsection