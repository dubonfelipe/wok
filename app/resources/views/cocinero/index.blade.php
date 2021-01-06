@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de ordenes</h3>
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
            <h3 class="panel-title">Ordenes</h3>
        </div>
        <div class="panel-body">
            <table id="dtable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Menú</th>
                        <th class="min-tablet">Cant.</th>
                        <th class="min-tablet">Id. Pedido</th>
                        <th class="min-tablet">Fecha de orden</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menu as $item)
                        <tr>
                            <td>{{$item->dsc}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->pedidoId}}</td>
                            <td>{{$item->date}}</td>
                            <td>
                                <button id="demo-bootbox-zoom{{$item->id}}" class="btn btn-md btn-info btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver receta"><i class="ion-clipboard icon-lg"></i></button>
                                <a href="{{route('wokers.edit',[$item->id])}}" class="btn btn-md btn-purple btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Concluir orden"><i class="ion-thumbsup icon-lg"></i></a>
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

        <script>
        $('#dtable').dataTable({ "bPaginate": false ,"responsive": true}); 
            $(document).ready(function() {
                @foreach ($menu as $item)
                    $('#demo-bootbox-zoom{{$item->id}}').on('click', function(){
                        bootbox.alert({
                            title: "{{$item->menu}}",
                            message : "<p><span><strong>Receta: </strong></span>{{$item->receta}}</p><p><span><strong>Tiempo de preparación: </strong></span> {{$item->tiempo}}</p><p><span><strong>Ingredientes: </strong></span></p><p>@foreach(explode('**',$item->ingredientes) as $row) <li>{{$row}} <br></li>@endforeach</p>",
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