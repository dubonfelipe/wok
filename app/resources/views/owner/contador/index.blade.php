@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de Contadores</h3>
        <br>
    <a href="{{route('contador.create')}}" class="btn btn-success btn-rounded"><strong>+ Ingresar Contador</strong></a>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Contador</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Nombre</th>
                        <th class="min-tablet">Documento de identificación</th>
                        <th class="min-tablet">Email</th>
                        <th class="min-tablet">Teléfono</th>
                        <th class="min-tablet">Teléfono alternativo</th>
                        <th class="min-tablet">Estado</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contador as $item)
                        <tr>
                            <td>{{$item->apellido}}, {{$item->nombre}}</td>
                            <td>{{$item->dpi}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->telefonow}}</td>
                            <td>
                                @if($item->estado == 1)
                                    <span class="label label-table label-success">Activa</span>
                                @else  
                                    <span class="label label-table label-danger">Suspendida</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('contador.edit',[$item->iduser])}}" class="btn btn-xs btn-warning btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Cambiar estado de usario"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                <a href="{{route('contador.show',[$item->id])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver información de usuario"><i class="demo-psi-male icon-lg"></i></a>
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
        function deleteTypeFel(id) {
            swal({
                title: "¿Se encuentra seguro de eliminar el registro?",
                text: "El registro será eliminado del sistema permanentemente",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "¡Sí, quiero borrarlo!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: true
            }, function () {
                $.ajax({
                    type: 'post',
                    url: '{{ route('feltypes.delete') }}',
                    data: {
                    '_token': "{{ csrf_token() }}",
                    'id': id,
                    },
                    success: function(data) {
                        if ((data.errors)) {
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