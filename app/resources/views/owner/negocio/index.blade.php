@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de Negocios</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Franquicias</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Franquicia</th>
                        <th class="min-tablet">Direccion</th>
                        <th class="min-tablet">Informacion</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($franquicia as $item)
                        <tr>
                            <td>{{$item->descripcion_franquicia}}</td>
                            <td>{{($item->direccion_franquicia == 'null')? '-':$item->direccion_franquicia}}</td>
                            <td>
                                @if($item->direccion_franquicia == 'null')
                                    <span class="badge badge-warning">
                                        Requiere ingreso de información
                                    <span>
                                @else
                                    Sin requerimientos
                                @endif
                            </td>
                            <td>
                                <button id="demo-bootbox-zoom{{$item->id_franchise}}" class="btn btn-xs btn-info btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver información de contador"><i class="ion-information-circled icon-lg"></i></button>
                                <a href="{{route('negocio.edit',[$item->id_franchise])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                @if(Auth::user()->rol == "Propietario")
                                    <a href="{{route('negocio.show',[$item->id_franchise])}}" class="btn btn-xs btn-success btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Cambiar contador"><i class="ion-person-add icon-lg"></i></a>
                                @endif
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

    <link href="plugins/animate-css/animate.min.css" rel="stylesheet">
    
        <script>
            $(document).ready(function() {
                @foreach ($franquicia as $item)
                $('#demo-bootbox-zoom{{$item->id_franchise}}').on('click', function(){
                    bootbox.alert({
                        title: "{{($item->direccion_franquicia == 'null')? '-':$item->direccion_franquicia}}",
                        message : "@if($item->id_contable == 1)<p><span><strong>Propietario realiza el papel de contador propio</strong></span></p> @else<p><span><strong>Nombre del contable: </strong></span>{{$item->nombre_contable}}</p><p><span><strong>Documento de identificación: </strong></span> {{$item->dpi}}</p><p><span><strong>Email: </strong></span>{{$item->contable_email}}</p><p><span><strong>No. Teléfono: </strong></span>{{$item->telefono_contable}}</p><p><span><strong>No. Teléfono Alternativo: </strong></span>{{$item->telefono2}}</p>@endif",
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