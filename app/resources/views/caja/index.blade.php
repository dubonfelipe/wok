@extends('dashboard')

 @section('pad')
 @if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Notificación</strong> {{Session::get('message')}}
</div>
@endif
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Caja</h3>
        <br>
        @if($corte->cierre_ef==null)
        <a href="{{route('corteCaja.edit',[$corte->id_corte])}}" class="btn btn-success btn-rounded"><strong>Realizar cierre de caja</strong></a>
        @else
        <a href="{{route('send.cierre')}}" class="btn btn-success btn-rounded"><strong>Enviar corte de caja a propietario</strong></a>
        <a href="{{route('print.cierre')}}" class="btn btn-success btn-rounded"><strong>Imprimir reporte de corte de caja</strong></a>
        @endif
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Caja</h3>
        </div>
        <div class="panel-body">
            <table id="dtable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Descripcion</th>
                        <th class="min-tablet">Efectivo</th>
                        <th class="min-tablet">Tarjeta</th>
                        <th class="min-tablet"></th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>Cantidad de efectivo inicial en caja</td>
                            <td>+ Q.{{number_format($corte->ef_caja,2, '.', ',')}}</td>
                            <td>+ Q.{{number_format(0,2, '.', ',')}}</td>
                            <td></td>
                        </tr>  
                    @if($corte->cierre_ef!=null)
                        @foreach ($ventasef as $item)
                            <tr>
                                <td>{{$item->dsc}}</td>
                                <td>+ Q.{{number_format($item->ef,2, '.', ',')}}</td>
                                <td>+ Q.{{number_format(0,2, '.', ',')}}</td>
                                <td></td>
                            </tr>    
                        @endforeach
                        @foreach ($ventastj as $item)
                            <tr>
                                <td>{{$item->dsc}}</td>
                                <td>+ Q.{{number_format(0,2, '.', ',')}}</td>
                                <td>+ Q.{{number_format($item->tj,2, '.', ',')}}</td>
                                <td></td>
                            </tr>    
                        @endforeach
                        @foreach ($pagos as $item)
                            <tr>
                                <td>{{$item->dsc}}</td>
                                <td>- Q.{{number_format($item->ef,2, '.', ',')}}</td>
                                <td>- Q.{{number_format(0,2, '.', ',')}}</td>
                                <td></td>
                            </tr>    
                        @endforeach
                    @endif
                </tbody>
                @if($corte->cierre_ef!=null)
                    <tr>                        
                        <td class="min-tablet">Total: </th>
                        <td class="min-tablet">Q.{{number_format($corte->cierre_ef,2, '.', ',')}}</th>
                        <td class="min-tablet">Q.{{number_format($corte->cierre_tj,2, '.', ',')}}</th>
                        <td class="min-tablet"><strong> Q.{{number_format($corte->cierre_ef + $corte->cierre_tj,2, '.', ',')}} </strong></th>
                        
                    </tr>
                @endif
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
                $('#dtable').dataTable({ "bPaginate": false,"responsive": true }); 
            });
        </script>
@endsection