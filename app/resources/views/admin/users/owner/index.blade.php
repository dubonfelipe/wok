@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Gestión de Propietarios de Franquicias</h3>
        <br>
    <a href="{{route('owner.create')}}" class="btn btn-success btn-rounded"><strong>+ Registrar Propietario</strong></a>
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
            <h3 class="panel-title">Propietarios de Franquicias</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="min-tablet">Nombre</th>
                        <th class="min-tablet">Email</th>
                        <th class="min-tablet">Estado</th>
                        <th class="min-tablet">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($owners as $item)
                        <tr>
                            <td>{{$item->lname}}, {{$item->fname}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                @if($item->estado == 1)
                                    <span class="label label-table label-success">Activa</span>
                                @else  
                                    <span class="label label-table label-danger">Suspendida</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('owner.edit',[$item->id])}}" class="btn btn-xs btn-warning btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Cambiar estado de usario"><i class="demo-psi-pen-5 icon-lg"></i></a>
                                <a href="{{route('owner.show',[$item->email])}}" class="btn btn-xs btn-primary btn-icon btn-circle add-tooltip" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Ver información de usuario"><i class="demo-psi-male icon-lg"></i></a>
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