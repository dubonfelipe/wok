@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de pagos {{$anio}}</h3>
        <br>
    <a href="{{route('pagos.create')}}" class="btn btn-success btn-rounded"><strong>+ Ingresar Pago</strong></a>
    <a href="{{route('pagos.before')}}" class="btn btn-success btn-rounded"><strong>+ Ver Pagos de meses anteriores</strong></a>
    <a href="{{route('pagos.agg',['1'])}}" class="btn btn-success btn-rounded"><strong>+ Agregar Pagos constantes</strong></a>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Pagos</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Descripción</th>
                        <th class="min-tablet">Monto</th>
                        <th class="min-tablet">Proveedor</th>
                        <th class="min-tablet">Tipo de Pago</th>
                        <th class="min-tablet">Franquicia</th>
                        <th class="min-tablet">Opción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pagos as $item)
                        <tr>
                            <td>{{$item->ds}}</td>
                            <td>Q.{{$item->monto}}</td>
                            <td>{{$item->proveedor}}</td>
                            <td>{{($item->constante==='SI')?'Valor constante':'Valor variable por mes'}}</td>
                            <td>{{$item->franquicia}} ({{$item->direccion}})</td>
                            <td>
                                <a href="{{route('pagos.edit',[$item->id])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                <button class="btn btn-xs btn-danger btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Eliminar registro" onclick="deletePayment({{$item->id}})"><i class="demo-psi-recycling icon-lg"></i></button>
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