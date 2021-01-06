@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de bancos</h3>
        <br>
    <a href="{{route('bancos.create')}}" class="btn btn-success btn-rounded"><strong>+ Ingresar nuevo banco</strong></a>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Bancos</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bancos as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>
                                <a href="{{route('bancos.edit',[$item->id_banco])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar"><i class="demo-psi-pen-5 icon-lg"></i></a>
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