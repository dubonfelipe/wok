@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Oredenes pedido adomicilio</h3>
        <br>
    
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Pedidos</h3>
        </div>
        <div class="panel-body">
            <table id="dtable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Id de orden</th>
                        <th class="min-tablet">Fecha y hora de emisión</th>
                        <th class="min-tablet">Valor total del pedido</th>
                        <th class="min-tablet">Empleado Asignado</th>
                        <th class="min-tablet">Cliente</th>
                        <th class="min-tablet">Dirección</th>
                        <th class="min-tablet">Pedido</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ordenes as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->date}}</td>
                            <td>Q.{{number_format($totales[$item->id],2, '.', ',')}}</td>
                            <td>
                                @if($item->tipoempleado == $tipoDelivery->id)
                                    {{$item->empleado}}
                                @else
                                <a href="{{route('pedidoDelivery.edit',[$item->bill])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Asignar empleado"><i class="ion-person-add icon-lg"></i></a>
                                @endif
                            </td>
                            <td>{{$item->cliente}}</td>
                            <td>{{$item->direccion}}</td>
                            <td>
                                <button id="demo-bootbox-zoom{{$item->id}}" class="btn btn-xs btn-info btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver detalle"><i class="ion-clipboard icon-lg"></i></button>
                            </td>
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
    <script src="js/demo/nifty-demo.min.js"></script>


    <script>
            $(document).ready(function() {
                $('#dtable').dataTable({ "bPaginate": false,"responsive": true }); 
                @foreach ($ordenes as $item)
                    $('#demo-bootbox-zoom{{$item->id}}').on('click', function(){
                        bootbox.alert({
                            title: "Detalle de pedido",
                            message : '<p><span><strong>Detalle: </strong></span></p><table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%"><thead><tr><th class="min-tablet">Cantidad</th><th class="min-tablet">Descripcion</th><th class="min-tablet">Precio unitario</th><th class="min-tablet">Precio total</th> <th class="min-tablet">Estado</th> </tr>  </thead><tbody>@foreach($detalles[$item->id] as $key => $row)<tr>  <td>{{$row->cantidad}}</td><td>{{$row->descripcion}}</td><td>Q.{{number_format($row->precio_unitario,2, '.', ',')}}</td><td>Q.{{number_format($row->precio_unitario*$row->cantidad,2, '.', ',')}}</td><td>@if($row->estado==="0") En preparación @elseif($row->estado==="1") Entregado @elseif($row->estado==="3") Listo para entrega @endif</td></tr>  @endforeach  </tbody></table>',
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