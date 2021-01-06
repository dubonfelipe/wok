@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Crear Franquicia</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            
            {!! Form::open(['route'=>['franchiseAdmin.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
                {!!Form::hidden('idAdmin',$id_admin)!!}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Tipo de Franquicia</label>
                    <div class="col-md-9">
                        <select name="ifFranchise" id="ifFranchise" class="form-control" required>
                            <option disabled selected value>--- Seleccionar tipo de franquicia ---</option>
                            @foreach ($franchise_type as $item)
                                <option value="{{$item->id_type_franchise}}">{{$item->descripcion_franquicia}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>            
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input"></label>
                    <div class="col-md-9">
                        {!! Form::submit('Crear', ['id'=>'guardar', 'class'=>'btn btn-primary btn-rounded']) !!}  
                    </div>
                </div>
                
            {!! Form::close() !!}
            
        </div>
    </div>
</div>

@endsection

