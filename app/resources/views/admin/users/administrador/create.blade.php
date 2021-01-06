@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Crear Administrador de Franquicia</h3>
    </div>
</div>


 @endsection

@section('pagecontent')
@if(Session::has('message'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Realizado</strong> {{Session::get('message')}}
</div>
@endif
<div id="page-content">
    <div class="panel">
        <div class="panel-body">
           <!-- Form wizard with Validation -->
					            <!--===================================================-->
					            <div id="demo-bv-wz">
					                <div class="wz-heading pad-top">
					
					                    <!--Nav-->
					                    <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab1">
					                                <span class="text-danger"><i class="demo-pli-information icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Cuenta</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab2">
					                                <span class="text-warning"><i class="demo-pli-male icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Perfil</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab3">
					                                <span class="text-info"><i class="demo-pli-home icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Franquicia</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab4">
					                                <span class="text-success"><i class="demo-pli-medal-2 icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Finalizar</p>
					                            </a>
					                        </li>
					                    </ul>
					                </div>
					
					                <!--progress bar-->
					                <div class="progress progress-xs">
					                    <div class="progress-bar progress-bar-primary"></div>
					                </div>
					
					
					                <!--Form-->
                                    {!! Form::open(['route'=>['administrators.store'], 'id'=>'demo-bv-wz-form','class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
					                    <div class="panel-body">
					                        <div class="tab-content">
					
					                            <!--First tab-->
					                            <div id="demo-bv-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Dirección Email</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::email('email', null, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Ingrese la dirección de email', 'required'=>'']) !!}
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Second tab-->
					                            <div id="demo-bv-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Primer Nombre</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('fname', null, ['class'=>'form-control', 'id'=>'fname', 'placeholder'=>'Ingrese primer nombre', 'required'=>'']) !!}
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Primer Apellido</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('lname', null, ['class'=>'form-control', 'id'=>'lname', 'placeholder'=>'Ingrese primer apellido', 'required'=>'']) !!}
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-bv-tab3" class="tab-pane">
					                                <div class="form-group">
					                                    <select name="ifFranchise" id="ifFranchise" class="form-control" required>
                                                            <option disabled selected value>--- Seleccionar tipo de franquicia ---</option>
                                                            @foreach ($franchise_type as $item)
                                                                <option value="{{$item->id_type_franchise}}">{{$item->descripcion_franquicia}}</option>
                                                            @endforeach
                                                        </select>
					                                </div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
					                                <h4>Finalizar</h4>
					                                <p class="text-muted">Esta a punto de crear una cuenta de usuario para el administrador de una franquicia al finalizar se enviará un correo de forma automática al correo de la cuenta creada. </p>
					                            </div>
					                        </div>
					                    </div>
					
					                    <!--Footer button-->
					                    <div class="panel-footer text-right">
					                        <div class="box-inline">
					                            <button type="button" class="previous btn btn-primary">Anterior</button>
					                            <button type="button" class="next btn btn-primary">Siguiente</button>
                                                {!! Form::submit('Crear', ['id'=>'Finalizar', 'class'=>'finish btn btn-warning btn-rounded']) !!}  
					                        </div>
					                    </div>
                                    {!! Form::close() !!}
					            </div>
					            <!--===================================================-->
					            <!-- End Form wizard with Validation -->
        </div>
    </div>
</div>

@endsection
@section('script')
 <!--JAVASCRIPT-->
     <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    {!! Html::script('js/demo/nifty-demo.min.js') !!}
    
    <!--Bootstrap Wizard [ OPTIONAL ]-->
    {!! Html::script('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') !!}


    <!--Bootstrap Validator [ OPTIONAL ]-->
    {!! Html::script('plugins/bootstrap-validator/bootstrapValidator.min.js') !!}


    <!--Form Wizard [ SAMPLE ]-->
    {!! Html::script('js/demo/form-wizard.js') !!}
@endsection