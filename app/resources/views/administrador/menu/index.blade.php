@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de menú</h3>
        <br>
    <a href="{{route('recetaMenu.create')}}" class="btn btn-success btn-rounded"><strong>+ Registrar item</strong></a>
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
            <h3 class="panel-title">Menú</h3>
        </div>
        <div class="panel-body">
            <table id="dtable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Menú</th>
                        <th class="min-tablet">Franquicias</th>
                        <th class="min-tablet">Precios</th>
                        <th class="min-tablet">Tipo de plato</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menu as $item)
                        <tr>
                            <td>{{$item->menu}}</td>
                            <td>
                            @foreach(explode('**',$item->franquicias) as $row) 
                                <li>{{$row}} </li>
                            @endforeach
                            </td>
                            <td>
                            @foreach(explode('**',$item->precios) as $row) 
                                <?php 
                                    $pos=strpos($row, '&');
                                    $precio = substr($row, 0, $pos);
                                    $idPrecio = substr($row,$pos+1);
                                    $pos=strpos($precio,'(');
                                    $precioNum = substr($precio,0,$pos);
                                    $tipo = substr($precio,$pos);
                                ?>
                                <li>Q.{{number_format($precioNum,2, '.', ',')}}   {{$tipo}}
                                    <a href="{{route('precio.edit',[$idPrecio])}}" class="btn btn-xs btn-mint btn-icon btn-rounded btn-default add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar Precio">  <i class="ion-edit icon-lg"></i></a>
                                </li>
                            @endforeach
                            </td>
                            <td>{{$item->tipoplatillo}}</td>
                            <td>
                                <button id="demo-bootbox-zoom{{$item->id}}" class="btn btn-xs btn-info btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver receta"><i class="ion-clipboard icon-lg"></i></button>
                                <a href="{{route('recetaMenu.edit',[$item->id])}}" class="btn btn-xs btn-warning btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Editar receta"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                <a href="{{route('precio.show',[$item->id])}}" class="btn btn-xs btn-success btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Agregar Precio"><i class="ion-cash icon-lg"></i></a>
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
            $(document).ready(function() {
                $('#dtable').dataTable({ "bPaginate": false,"responsive": true }); 
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