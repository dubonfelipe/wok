@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de tipos de FEL</h3>
        <br>
    <a href="{{route('feltypes.create')}}" class="btn btn-success btn-rounded"><strong>+ Crear Tipo de FEL</strong></a>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Tipos de FEL</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="min-tablet">Descripción</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fel_types as $item)
                        <tr>
                            <td>{{$item->id_fel}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>
                                <a href="{{route('feltypes.edit',[$item->id_fel])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                <button class="btn btn-xs btn-danger btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Eliminar registro" onclick="deleteTypeFel({{$item->id_fel}})"><i class="demo-psi-recycling icon-lg"></i></button>
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