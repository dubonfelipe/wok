@extends('dashboard')

 @section('pad')
    <div id="page-head">
                        
        <div class="pad-all text-center">
            <h3>Mesa {{$id_table}}</h3>
            @if($franchise->dsc === 'Brasas y leñas')
                <h4>Pedido: {{$cliente->nombre}}</h4>
            @endif
        </div>
    </div>
 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <span style="float: right; padding-top: 10px; padding-right: 20px"><a href="{{route('orders.show.more',[$id_table, $bills[0]->id_bill])}}" class="btn btn-success">+ Agregar otra compra</a></span>
            <h3 class="panel-title">Pedidos</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                @if (sizeof($bills) > 1)<!--Codigo de respaldo por si se llega a considerar tener mas de un bill a la vez para una tabla-->
                    @foreach ($bills as $key => $bill)
                        <div class="col-sm-12">
                            <div class="panel-group accordion" id="accordion">
                                <div class="panel">
                    
                                    <!--Accordion title-->
                                    <div class="panel-heading" style="background: #fe6d33; color: #fff">
                                        <h4 class="panel-title">
                                            <a data-parent="#accordion" data-toggle="collapse" href="#collapse-{{$key}}">Detalle de orden #{{($key + 1)}}</a>
                                        </h4>
                                    </div>
                    
                                    <!--Accordion content-->
                                    <div class="panel-collapse collapse in" id="collapse-{{$key}}" style="border: 1px solid #fe6d33">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 50%">Descripción</th>
                                                            <th style="width: 10%">Cantidad</th>
                                                            <th style="width: 40%">Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($bill->details as $item)
                                                            <tr>
                                                                <td>{{$item->descripcion}}</td>
                                                                <td>{{$item->cantidad}}</td>
                                                                <td>
                                                                    @if ($item->estado === '3')
                                                                        <button id="opcion-0{{$item->id_details_bill}}" class="border-r1 active-e0" onclick="enPreparacion('{{$item->id_details_bill}}')">{{$item->state}}</button>
                                                                        <button id="opcion-1{{$item->id_details_bill}}" class="border-r1 inactive" onclick="entregar('{{$item->id_details_bill}}')">Entregado</button>    
                                                                    @elseif($item->estado === '1')
                                                                        <button id="opcion-0{{$item->id_details_bill}}" class="border-r1 inactive" onclick="enPreparacion('{{$item->id_details_bill}}')">Listo</button>
                                                                        <button id="opcion-1{{$item->id_details_bill}}" class="border-r1 active-e1" onclick="entregar('{{$item->id_details_bill}}')">{{$item->state}}</button>    
                                                                    @elseif($item->estado === '0')
                                                                        <button id="opcion" class="border-r1 inactive" disabled>En preparación</button>
                                                                    @endif
                                                                    
                                                                </td>
                                                            </tr>    
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    @endforeach
                    <!--Fin del codigo de respaldo-->
                @else
                    <div class="col-sm-12">
                        <div class="panel-group accordion" id="accordion">
                            <div class="panel">
                
                                <!--Accordion title-->
                                <div class="panel-heading" style="background: #fe6d33; color: #fff">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#collapseOne">Detalle de la orden</a>
                                    </h4>
                                </div>
                
                                <!--Accordion content-->
                                <div class="panel-collapse collapse in" id="collapseOne" style="border: 1px solid #fe6d33">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 60%">Descripción</th>
                                                        <th style="width: 10%">Cantidad</th>
                                                        <th style="width: 30%">Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($bills[0]->details as $item)
                                                        <tr>
                                                            <td>{{$item->descripcion}}</td>
                                                            <td>{{$item->cantidad}}</td>
                                                            <td>
                                                                @if ($item->estado === '3')
                                                                    <button id="opcion-0{{$item->id_details_bill}}" class="border-r1 active-e0" onclick="enPreparacion('{{$item->id_details_bill}}')">{{$item->state}}</button>
                                                                    <button id="opcion-1{{$item->id_details_bill}}" class="border-r1 inactive" onclick="entregar('{{$item->id_details_bill}}')">Entregado</button>    
                                                                @elseif($item->estado === '1')
                                                                    <button id="opcion-0{{$item->id_details_bill}}" class="border-r1 inactive" onclick="enPreparacion('{{$item->id_details_bill}}')">Listo</button>
                                                                    <button id="opcion-1{{$item->id_details_bill}}" class="border-r1 active-e1" onclick="entregar('{{$item->id_details_bill}}')">{{$item->state}}</button>    
                                                                @elseif($item->estado === '0')
                                                                    <button id="opcion" class="border-r1 inactive" disabled>En preparación</button>
                                                                @endif
                                                                
                                                            </td>
                                                        </tr>    
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-sm-12" style="align-content: center">
                    <div style="width: 50px; margin: 0 auto" hidden><button class="btn btn-danger" onclick="liberarMesa('{{$id_table}}')">Liberar mesa</button></div>
                    {!! Form::open(['route'=>['bill.pay'],'method'=>'POST']) !!}
                        {!! Form::hidden('id_bill', $bills[0]->id_bill, ['id'=>'id_bill','name'=>'id_bill']) !!}
                        {!! Form::hidden('id_pedido', $bills[0]->pedido, ['id'=>'id_pedido','name'=>'id_pedido']) !!}
                        {!! Form::hidden('id_table', $id_table, ['id'=>'id_table','name'=>'id_table']) !!}
                        <div style="width: 50px; margin: 0 auto"><button class="btn btn-success" type="submit" >Realizar cobro</button></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        var bills = {!! json_encode($bills) !!};

        function entregar(id_detail) {
            $.ajax({
                type: 'post',
                url: '{{ route('tables.change.detail') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': Number(id_detail),
                    'status': '1',
                },
                success: function(data) {
                    if ((data.errors)) {
                        console.log('ERROR_FLAG');
                    } else {
                        console.log('SUCCESS_FLAG');
                        console.log(data);
                        document.getElementById('opcion-1'+id_detail).className = document.getElementById('opcion-1'+id_detail).className.replace(' inactive',' active-e1')
                        document.getElementById('opcion-0'+id_detail).className = document.getElementById('opcion-0'+id_detail).className.replace(' active-e0',' inactive')
                    }
                },
            });
        }

        function enPreparacion(id_detail) {
            $.ajax({
                type: 'post',
                url: '{{ route('tables.change.detail') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': Number(id_detail),
                    'status': '3',
                },
                success: function(data) {
                    if ((data.errors)) {
                        console.log('ERROR_FLAG');
                    } else {
                        console.log('SUCCESS_FLAG');
                        console.log(data);
                        document.getElementById('opcion-0'+id_detail).className = document.getElementById('opcion-0'+id_detail).className.replace(' inactive',' active-e0')
                        document.getElementById('opcion-1'+id_detail).className = document.getElementById('opcion-1'+id_detail).className.replace(' active-e1',' inactive')
                    }
                },
            });
        }

        function liberarMesa(id_table) {
            swal({
                title: "¿Está seguro de liberar esta mesa?",
                text: "La mesa será liberada para nuevo uso",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "¡Sí, quiero liberarla!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: true
            }, function () {
                let pedidos = [];
                bills.forEach(element => {
                    pedidos.push(element.id_pedido)
                });
                $.ajax({
                type: 'post',
                url: '{{ route('tables.change.table') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': Number(id_table),
                    'status': '0',
                    'pedidos': JSON.stringify(pedidos)
                },
                success: function(data) {
                    if ((data.errors)) {
                        console.log('ERROR_FLAG');
                    } else {
                        console.log('SUCCESS_FLAG');
                        console.log(data);
                        location.href = '/wok/public/tables';
                    }
                },
            });
            });
        }
    </script>

@endsection

<style>
    button.active-e0{
        background: #0ab1fc;
        color: #fff;
        border: 0;
        padding: 6px;
    }

    button.active-e1{
        background: #79af3a;
        color: #fff;
        border: 0;
        padding: 6px;
    }

    button.inactive{
        background: #fff;
        color: #333;
        border: 1px solid lightgray;
        padding: 3px;
    }

    .border-r1{
        border-radius: 5px 5px 5px 5px;
        -moz-border-radius: 5px 5px 5px 5px;
        -webkit-border-radius: 5px 5px 5px 5px;
    }

    .border-r2{
        border-radius: 10px 10px 10px 10px;
        -moz-border-radius: 10px 10px 10px 10px;
        -webkit-border-radius: 10px 10px 10px 10px;
    }
    .border-r3{
        border-radius: 15px 15px 15px 15px;
        -moz-border-radius: 15px 15px 15px 15px;
        -webkit-border-radius: 15px 15px 15px 15px;
    }
</style>