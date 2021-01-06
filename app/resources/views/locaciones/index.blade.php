@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de clientes</h3>
        <br>
    <a href="{{route('clientes.create')}}" class="btn btn-success btn-rounded"><strong>+ Ingresar cliente</strong></a>
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
                                <li>{{$numero}} 
                                    <a href="{{route('contacto.edit',[$idNumero])}}" class="btn btn-xs btn-mint btn-icon btn-rounded btn-default add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar número de contacto">  <i class="ion-edit icon-lg"></i></a>
                                </li>
                            @endforeach
                            @endif
                            </td>
                            <td>
                                @if($item->localidades != null)
                                <button id="demo-bootbox-zoom{{$item->id}}" class="btn btn-xs btn-info btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver direcciones"><i class="ion-clipboard icon-lg"></i></button>
                                @endif
                                <a href="{{route('clientes.edit',[$item->id])}}" class="btn btn-xs btn-warning btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar cliente"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                <a href="{{route('locacion.edit',[$item->id])}}" class="btn btn-xs btn-success btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Agregar dirección"><i class="ion-location icon-lg"></i></a>
                                <a href="{{route('contacto.show',[$item->id])}}" class="btn btn-xs btn-purple btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Agregar teléfono"><i class="ion-iphone icon-lg"></i></a>
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