@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de Tipos de Franquicias</h3>
        <br>
    <a href="{{route('typefranchise.create')}}" class="btn btn-success btn-rounded"><strong>+ Crear Franquicia</strong></a>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Tipos de Franquicias</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="min-tablet">Descripción de Franquicia</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($typeFranchise as $item)
                        <tr>
                            <td>{{$item->id_type_franchise}}</td>
                            <td>{{$item->descripcion_franquicia}}</td>
                            <td>
                                <a href="{{route('typefranchise.edit',[$item->id_type_franchise])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar"><i class="demo-psi-pen-5 icon-lg"></i></a>
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

@endsection