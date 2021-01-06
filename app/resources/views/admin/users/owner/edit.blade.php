@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Información de propietario</h3>
        <a href="{{route('owner.add',[$owner->id_owner])}}" class="btn btn-success btn-rounded"><strong>+ Agregar Nueva Franquicia</strong></a>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['class'=>'panel-body form-horizontal form-padding']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Nombre Completo</label>
                    <div class="col-md-9">
                        {!! Form::text('Primer nombre',  $nombre_completo, ['class'=>'form-control', 'id'=>'primer_nombre', 'readonly'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Documento de identificación</label>
                    <div class="col-md-9">
                        {!! Form::text('dpi',  $dpi, ['class'=>'form-control', 'id'=>'dpi', 'readonly'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Correo Electronico</label>
                    <div class="col-md-9">
                        {!! Form::text('email',  $owner->email, ['class'=>'form-control', 'id'=>'email', 'readonly'=>'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Teléfono</label>
                    <div class="col-md-9">
                        {!! Form::text('telefono',  ($owner->telefono == 0) ? 'Sin información':$owner->telefono, ['class'=>'form-control', 'id'=>'telefono', 'readonly'=>'',  'maxlength'=>'8']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Teléfono alternativo</label>
                    <div class="col-md-9">
                        {!! Form::text('telefonoAlt',  ($owner->telefono2 == null) ? 'Sin información':$owner->telefono2, ['class'=>'form-control', 'id'=>'telefonoAlt', 'readonly'=>'',,  'maxlength'=>'8']) !!}
                    </div>
                </div>
                <div class="form-group"><h4>Franquicias</h4></div>
                <div class="form-group">
                    <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="min-tablet">Dirección Franquicia</th>
                                <th class="min-tablet">Teléfono</th>
                                <th class="min-tablet">Email</th>
                                <th class="min-tablet">Tipo de franquicia</th>
                                <th class="min-tablet">Tipo de Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($franquicias as $item)
                                <tr>
                                    <td>{{($item->direccion_franquicia=='null')? 'Sin información':$item->direccion_franquicia}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        {{$item->descripcion_franquicia}}
                                    </td>
                                    <td>
                                        {{$item->descripcion}}
                                    </td>
                                </tr>    
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@section('script')
<!--=================================================-->

<!--Demo script [ DEMONSTRATION ]-->
<script src="js/demo/nifty-demo.min.js"></script>

@endsection