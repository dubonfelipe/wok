@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Crear Empleado de Franquicia</h3>
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
					                                <p class="text-semibold mar-no">Perfil Empleado</p>
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
                                    {!! Form::open(['route'=>['gestionEmpleado.store'], 'id'=>'demo-bv-wz-form','class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
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
													<div class="form-group">
														<label class="col-lg-3 control-label">Tipo de empleado</label>
														<div class="col-lg-7">
															<select name="idEmpleado" id="idEmpleado" class="form-control" required>
																<option disabled selected value>--- Seleccionar tipo de empleado ---</option>
																@foreach ($tipo_empleado as $item)
																	<option value="{{$item->id_type_employee}}&{{$item->descripcion}}">{{$item->descripcion}}</option>
																@endforeach
															</select>
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
					                                    <label class="col-lg-3 control-label">Segundo Nombre</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('segundo_nombre', null, ['class'=>'form-control', 'id'=>'segundo_nombre', 'placeholder'=>'Ingrese segundo nombre']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Otros Nombres</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('otros_nombres', null, ['class'=>'form-control', 'id'=>'otros_nombres', 'placeholder'=>'Ingrese otros nombres']) !!}
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Primer Apellido</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('lname', null, ['class'=>'form-control', 'id'=>'lname', 'placeholder'=>'Ingrese primer apellido', 'required'=>'']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Segundo Apellido</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('segundo_apellido', null, ['class'=>'form-control', 'id'=>'segundo_apellido', 'placeholder'=>'Ingrese segundo apellido']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Apellido Casada</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('apellido_casada', null, ['class'=>'form-control', 'id'=>'apellido_casada', 'placeholder'=>'Ingrese apellido casada']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Documento Identificación</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('dpi', null, ['class'=>'form-control', 'id'=>'dpi', 'placeholder'=>'Ingrese documento de identificación', 'required'=>'']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">NIT</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('nit', null, ['class'=>'form-control', 'id'=>'nit', 'placeholder'=>'Ingrese número de nit', 'required'=>'']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Teléfono</label>
														<div class="col-md-7">
															{!! Form::text('telefono', null, ['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'9999-9999', 'required'=>'',  'maxlength'=>'8']) !!}
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Teléfono Alternativo</label>
														<div class="col-md-7">
															{!! Form::text('telefono2', null, ['class'=>'form-control', 'id'=>'telefono2', 'placeholder'=>'9999-9999',  'maxlength'=>'8']) !!}
														</div>
													</div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-bv-tab3" class="tab-pane">
													<div class="form-group">
														<label class="col-lg-3 control-label">Franquicia</label>
														<div class="col-lg-7">
															<select name="ifFranchise" id="ifFranchise" class="form-control" required>
																<option disabled selected value>--- Seleccionar tipo de franquicia ---</option>
																@foreach ($franquicias as $item)
																	<option value="{{$item->id_restaurante}}">{{$item->franquicia}}( {{$item->direccion}} )</option>
																@endforeach
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Bancos</label>
														<div class="col-lg-7">
															<select name="banco" id="banco" class="form-control" required>
																<option disabled selected value>--- Seleccionar banco ---</option>
																@foreach ($banco as $item)
																	<option value="{{$item->id_banco}}">{{$item->nombre}}</option>
																@endforeach
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Tipo de cuenta</label>
														<div class="col-lg-7">
															<div class="radio"><!-- Inline radio buttons -->
																<input id="demo-inline-form-radio" class="magic-radio" value="MO" type="radio" name="inline-form-radio" checked>
																<label for="demo-inline-form-radio">Monetaria</label>

																<input id="demo-inline-form-radio-2" class="magic-radio" value="AH" type="radio" name="inline-form-radio">
																<label for="demo-inline-form-radio-2">Ahorro</label>
															</div>
														</div>
													</div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Número de cuenta</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('nocuenta', null, ['class'=>'form-control', 'id'=>'nocuenta', 'placeholder'=>'Ingrese número de cuenta', 'required'=>'']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Salario (Q)</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::number('salario', null, ['class'=>'form-control', 'id'=>'salario', 'placeholder'=>'Ingrese salario del empleado', 'step'=>'0.01', 'required'=>'']) !!}
					                                    </div>
													</div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
					                                <h4>Finalizar</h4>
					                                <p class="text-muted">Esta a punto de crear una cuenta de usuario para el empleado de una franquicia al finalizar se enviará un correo de forma automática al correo de la cuenta creada. </p>
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