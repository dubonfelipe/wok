@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Buscar de clientes</h3>
        <br>
    <a href="{{route('delivery.edit',[$pedido])}}" class="btn btn-success btn-rounded"><strong>+ Nuevo cliente</strong></a>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Clientes</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Nombre</th>
                        <th class="min-tablet">NIT</th>
                        <th class="min-tablet">Número de contacto</th>
                        <th class="min-tablet">Opción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($clientes as $item)
                        <tr>
                            <td>{{$item->cliente}}</td>
                            <td>{{$item->nit}}</td>
                            <td>
                            @if($item->contactos != null)
                            @foreach(explode('**',$item->contactos) as $row) 
                                <?php 
                                    $pos=strpos($row, '&');
                                    $numero = substr($row, 0, $pos);
                                    $idNumero = substr($row,$pos+1);
                                ?>
                                <li>{{$numero}} </li>
                            @endforeach
                            @endif
                            </td>
                            <td>
                                <?php 
                                    $var = $item->id.'&'.$pedido;
                                ?>
                                <a href="{{route('locacion.show',[$var])}}" class="btn btn-warning btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Seleccionar cliente"><i class="ion-person-add icon-lg"></i></a>                                
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
                @foreach ($clientes as $item)
                    $('#demo-bootbox-zoom{{$item->id}}').on('click', function(){
                        bootbox.alert({
                            title: "{{$item->cliente}}",
                            message : "<p><span><strong>Direcciones: </strong></span></p><p><lu>@foreach(explode('**',$item->localidades) as $row) <li>{{$row}} <br></li>@endforeach</lu></p>",
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