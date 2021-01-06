@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Definir empleado</h3>
        <br>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Empleados</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Nombre empleado</th>
                        <th class="min-tablet">Número de contacto</th>
                        <th class="min-tablet">Opción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($employees as $item)
                        <tr>
                            <td>{{$item->name}} {{$item->lastname}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>
                                <?php 
                                    $var = $item->id.'&'.$bill;
                                ?>
                                <a href="{{route('pedidoDelivery.show',[$var])}}" class="btn btn-warning btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Seleccionar cliente"><i class="ion-person-add icon-lg"></i></a>                                
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