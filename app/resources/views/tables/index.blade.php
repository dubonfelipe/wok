@extends('dashboard')

 @section('pad')
    <div id="page-head">
                        
        <div class="pad-all text-center">
            <h3>Mesas</h3>
        </div>
    </div>
 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Mesas</h3>
        </div>
        <div class="panel-body">
            @if (Auth::user()->rol === 'Propietario')
                @foreach ($franchises as $franchise)
                    <div class="row">
                        <div class="col-xs-12">
                            <h3>{{$franchise->direccion_franquicia}}</h3>
                        </div>
                        @foreach ($franchise->tables as $table)
                            <div class="col-lg-3 col-md-4 col-sm-6" style="margin: 1% 0;">
                                    @if ($table->estado === '0')
                                        <div class="card-body">
                                            <div class="panel" style="margin: 0%">
                                                <div class="panel-body text-center">
                                                    <div class="parent">
                                                        <div class="child">
                                                            <p class="text-lg text-semibold mar-no text-main" style="font-size: 35px">{{$table->nombre}}</p>
                                                            <p class="text-muted"><strong>Servicio:</strong> {{$table->service}}</p>
                                                            <p class="text-muted"><strong>Estado:</strong> {{$table->state}}</p>
                                                            @if ($table->estado === '0' && (Auth::user()->rol === 'Gerente' || Auth::user()->rol === 'Propietario'))
                                                                <div class="mar-top">
                                                                    <button class="btn btn-danger btn-rounded" onclick="deleteTable('{{$table->id_table}}')">Quitar mesa</button>
                                                                </div>    
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="card-body" style="border: 3px solid green">
                                            <div class="panel" style="margin: 0%">
                                                <div class="panel-body text-center">
                                                    <div class="parent">
                                                        <div class="child">
                                                            <p class="text-lg text-semibold mar-no text-main" style="font-size: 35px">{{$table->nombre}}</p>
                                                            <p class="text-muted"><strong>Servicio:</strong> {{$table->service}}</p>
                                                            <p class="text-muted"><strong>Estado:</strong> {{$table->state}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                
                            </div>
                        @endforeach
                        @if ((Auth::user()->rol === 'Gerente' || Auth::user()->rol === 'Propietario'))
                            <div class="col-lg-3 col-md-4 col-sm-6" style="margin: 1% 0">
                                <div class="card-body" >
                                    <a href="{{route('tables.create.table', [$franchise->id_restaurant])}}">
                                        <div class="panel" style="margin: 0%;">
                                            <div class="panel-body text-center">
                                                <div class="parent">
                                                    <div class="child">
                                                        <i class="ion-plus-round" style="font-size: 35px;"></i>
                                                        <br>
                                                        <br>
                                                        <p class="text-lg text-semibold mar-no text-main">Añadir mesa</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <div class="row">
                    @foreach ($franchise->tables as $table)
                        <div class="col-lg-3 col-md-4 col-sm-6" style="margin: 1% 0">
                            @if (Auth::user()->rol === 'Mesero')
                                @if ($table->estado === '0')
                                    <div class="card-body">
                                        <a href="{{route('orders.show',[$table->id_table])}}">
                                            <div class="panel" style="margin: 0%">
                                                <div class="panel-body text-center">
                                                    <div class="parent">
                                                        <div class="child">
                                                            <p class="text-lg text-semibold mar-no text-main" style="font-size: 35px">{{$table->nombre}}</p>
                                                            <p class="text-muted"><strong>Servicio:</strong> {{$table->service}}</p>
                                                            <p class="text-muted"><strong>Estado:</strong> {{$table->state}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @else
                                    <div class="card-body" style="border: 3px solid green">
                                        <a href="{{route('tables.bills',[$table->id_table])}}">
                                            <div class="panel" style="margin: 0%">
                                                <div class="panel-body text-center">
                                                    <div class="parent">
                                                        <div class="child">
                                                            <p class="text-lg text-semibold mar-no text-main" style="font-size: 35px">{{$table->nombre}}</p>
                                                            <p class="text-muted"><strong>Servicio:</strong> {{$table->service}}</p>
                                                            <p class="text-muted"><strong>Estado:</strong> {{$table->state}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @else
                                <div class="panel" style="margin: 0%">
                                    <div class="panel-body text-center">
                                        <div class="parent">
                                            <div class="child">
                                                <p class="text-lg text-semibold mar-no text-main" style="font-size: 35px">{{$table->nombre}}</p>
                                                <p class="text-muted"><strong>Servicio:</strong> {{$table->service}}</p>
                                                <p class="text-muted"><strong>Estado:</strong> {{$table->state}}</p>
                                                @if ($table->estado === '0' && (Auth::user()->rol === 'Gerente' || Auth::user()->rol === 'Propietario'))
                                                    <div class="mar-top">
                                                        <button class="btn btn-danger btn-rounded" onclick="deleteTable('{{$table->id_table}}')">Deshabilitar</button>
                                                    </div>    
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    @if ((Auth::user()->rol === 'Gerente' || Auth::user()->rol === 'Propietario'))
                        <div class="col-lg-3 col-md-4 col-sm-6" style="margin: 1% 0">
                            <div class="card-body" >
                                <a href="{{route('tables.create.table', [$franchise->id_restaurant])}}">
                                    <div class="panel" style="margin: 0%;">
                                        <div class="panel-body text-center">
                                            <div class="parent">
                                                <div class="child">
                                                    <i class="ion-plus-round" style="font-size: 35px;"></i>
                                                    <br>
                                                    <br>
                                                    <p class="text-lg text-semibold mar-no text-main">Añadir mesa</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>


@endsection

@section('script')

    <script>
        function deleteTable(id) {
            swal({
                title: "¿Se encuentra seguro de eliminar la mesa?",
                text: "La mesa será eliminada del sistema permanentemente",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "¡Sí, quiero eliminarla!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: true
            }, function () {
                $.ajax({
                    type: 'post',
                    url: '{{ route('tables.delete') }}',
                    data: {
                    '_token': "{{ csrf_token() }}",
                    'id': Number(id),
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

<style>
    .border-r1{
        border-radius: 5px 5px 5px 5px;
        -moz-border-radius: 5px 5px 5px 5px;
        -webkit-border-radius: 5px 5px 5px 5px;
    }

    .border-r2{
        border-radius: 10px 10px 10px 10px;
        -moz-border-radius: 10px 10px 10px 10px;
        -webkit-border-radius: 10px 10px 10px 10px;
    }
    .border-r3{
        border-radius: 15px 15px 15px 15px;
        -moz-border-radius: 15px 15px 15px 15px;
        -webkit-border-radius: 15px 15px 15px 15px;
    }

    .shadow{
        -webkit-box-shadow: 0px 0px 15px -3px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 15px -3px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 15px -3px rgba(0,0,0,0.75);
    }

    .card-body{
        border: 1px solid lightgray;
        
    }

    .card-body:hover{
        cursor: pointer;
        -webkit-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);

        transition: -webkit-box-shadow .20s ease-in-out;
        -moz-transition: -webkit-box-shadow .20s ease-in-out;
        -webkit-transition: -webkit-box-shadow .20s ease-in-out;
    }  

    .parent {
        display: table;
        width: 100%;
        height: 150px;
    }

    .child {
        display: table-cell;
        vertical-align: middle;
    }
</style>