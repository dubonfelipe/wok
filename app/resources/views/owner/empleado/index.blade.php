@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de Empleados</h3>
        <br>
    <a href="{{route('gestionEmpleado.create')}}" class="btn btn-success btn-rounded"><strong>+ Registrar Empleado</strong></a>
    </div>
</div>


 @endsection


@section('pagecontent')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Realizado</strong> {{Session::get('message')}}
</div>
@endif
<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Empleados de Franquicias</h3>
        </div>
        <div class="panel-body">
            <table id="dtable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Nombre</th>
                        <th class="min-tablet">Franquicia</th>
                        <th class="min-tablet">Email</th>
                        <th class="min-tablet">Teléfono</th>
                        <th class="min-tablet">Tipo empleado</th>
                        <th class="min-tablet">Estado</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleado as $item)
                        <tr>
                            <td>{{$item->primer_nombre}}, {{$item->primer_apellido}}</td>
                            <td>{{$item->tipo_franquicia}} ({{$item->direccion}})</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>
                                @if($item->estado == 1)
                                    <span class="label label-table label-success">Activa</span>
                                @else  
                                    <span class="label label-table label-danger">Suspendida</span>
                                @endif
                            </td>
                            <td>
                                <button id="demo-bootbox-zoom{{$item->id}}" class="btn btn-xs btn-info btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver información financiera"><i class="ion-card icon-lg"></i></button>
                                <a href="{{route('gestionEmpleado.edit',[$item->iduser])}}" class="btn btn-xs btn-warning btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Cambiar estado de usario"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                <a href="{{route('gestionEmpleado.show',[$item->id])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver información de usuario"><i class="demo-psi-male icon-lg"></i></a>
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
                $('#dtable').dataTable({ "bPaginate": false ,"responsive": true});
                @foreach ($empleado as $item)
                $('#demo-bootbox-zoom{{$item->id}}').on('click', function(){
                    bootbox.alert({
                        title: "{{$item->primer_apellido}}, {{$item->primer_nombre}}",
                        message : "<p><span><strong>Banco: </strong></span>{{$item->banco}}</p><p><span><strong>Tipo de cuenta: </strong></span> {{($item->tipo_cuenta =='AH') ? 'Ahorro':'Monetaria'}}</p><p><span><strong>No. cuenta: </strong></span>{{$item->cuenta}}</p><p><span><strong>Salario: </strong></span>Q.{{number_format($item->salario,2, '.', ',')}}</p>",
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
    
    <!--Icons [ SAMPLE ]-->
    <script src="js/demo/icons.js"></script>

@endsection