@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Información de empleado</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

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
												<p class="text-semibold mar-no">Perfil Contador</p>
											</a>
										</li>
										<li class="col-xs-3">
											<a data-toggle="tab" href="#demo-bv-tab3">
												<span class="text-info"><i class="demo-pli-home icon-2x"></i></span>
												<p class="text-semibold mar-no">Contacto</p>
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
                                    {!! Form::open(['route'=>['contador.update',$contador->id_per_con], 'id'=>'demo-bv-wz-form','class'=>'panel-body form-horizontal form-padding','method'=>'PUT']) !!}
									<div class="panel-body">
					                        <div class="tab-content">
					
					                            <!--First tab-->
					                            <div id="demo-bv-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Dirección Email</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::email('email', $contador->email, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Ingrese la dirección de email', 'readonly'=>'']) !!}
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Second tab-->
					                            <div id="demo-bv-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Primer Nombre</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('fname', $contador->primer_nombre, ['class'=>'form-control', 'id'=>'fname', 'placeholder'=>'Ingrese primer nombre', 'required'=>'']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Segundo Nombre</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('segundo_nombre', $contador->segundo_nombre, ['class'=>'form-control', 'id'=>'segundo_nombre', 'placeholder'=>'Ingrese segundo nombre']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Otros Nombres</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('otros_nombres', $contador->otros_nombres, ['class'=>'form-control', 'id'=>'otros_nombres', 'placeholder'=>'Ingrese otros nombres']) !!}
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Primer Apellido</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('lname', $contador->primer_apellido, ['class'=>'form-control', 'id'=>'lname', 'placeholder'=>'Ingrese primer apellido', 'required'=>'']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Segundo Apellido</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('segundo_apellido', $contador->segundo_apellido, ['class'=>'form-control', 'id'=>'segundo_apellido', 'placeholder'=>'Ingrese segundo apellido']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Apellido Casada</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('apellido_casada', $contador->apallido_casada, ['class'=>'form-control', 'id'=>'apellido_casada', 'placeholder'=>'Ingrese apellido casada']) !!}
					                                    </div>
					                                </div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Documento Identificación</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('dpi', $contador->documento_identificacion, ['class'=>'form-control', 'id'=>'dpi', 'placeholder'=>'Ingrese documento de identificación', 'required'=>'']) !!}
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-bv-tab3" class="tab-pane">
													<div class="form-group">
														<label class="col-lg-3 control-label">Teléfono</label>
														<div class="col-md-7">
															{!! Form::text('telefono', $contador->telefono, ['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'9999-9999', 'required'=>'',  'maxlength'=>'8']) !!}
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Teléfono Alternativo</label>
														<div class="col-md-7">
															{!! Form::text('telefono2', $contador->telefono2, ['class'=>'form-control', 'id'=>'telefono2', 'placeholder'=>'9999-9999',  'maxlength'=>'8']) !!}
														</div>
													</div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
					                                <h4>Finalizar</h4>
					                                <p class="text-muted">Esta a punto de editar una cuenta de contador al finalizar se enviará un correo de forma automática al correo de la cuenta creada. </p>
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