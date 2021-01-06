@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Crear item de menú</h3>
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
					                                <span class="text-danger"><i class="demo-pli-receipt-4 icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Menú</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab2">
					                                <span class="text-warning"><i class="demo-pli-shopping-cart icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Receta</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab3">
					                                <span class="text-info"><i class="demo-psi-office icon-2x"></i></span>
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
                                    {!! Form::open(['route'=>['recetaMenu.store'], 'id'=>'demo-bv-wz-form','class'=>'panel-body form-horizontal form-padding',  'enctype' => 'multipart/form-data', 'method'=>'POST']) !!}
					                    <div class="panel-body">
					                        <div class="tab-content">
					
					                            <!--First tab-->
					                            <div id="demo-bv-tab1" class="tab-pane">
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Seleccione tipo platillo</label>
					                                    <div class="col-lg-7">
															<select name="tipoPlatillo" id="tipoPlatillo" class="form-control" required>
																<option disabled selected value>--- Seleccionar tipo de platillo ---</option>
																@foreach ($type_foods as $item)
																	<option value="{{$item->id_type_foods}}">{{$item->descripcion}}</option>
																@endforeach
															</select>
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Nombre de platillo</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('platillo', null, ['class'=>'form-control', 'id'=>'platillo', 'placeholder'=>'Ingrese el nombre del platillo', 'required'=>'']) !!}
					                                    </div>
													</div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Descripción corta de platillo</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('resumen', null, ['class'=>'form-control', 'id'=>'resumen', 'placeholder'=>'Ingrese la descripción corta del platillo', 'required'=>'']) !!}
					                                    </div>
													</div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Precio (Q)</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::number('precio', null, ['class'=>'form-control', 'id'=>'precio', 'placeholder'=>'Ingrese precio del platillo', 'step'=>'0.01', 'required'=>'']) !!}
					                                    </div>
													</div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Seleccione tipo de precio</label>
					                                    <div class="col-lg-7">
															<select name="tipoPrecio" id="tipoPrecio" class="form-control" required>
																<option disabled selected value>--- Seleccionar tipo de precio ---</option>
																@foreach ($type_price as $item)
																	<option value="{{$item->id_type_price}}">{{$item->descripcion}}</option>
																@endforeach
															</select>
					                                    </div>
					                                </div>
													<div class="form-group">
														<label class="col-log-3 control-label">Imagen de ménu</label>
														<div class="col-log-7">
															<input type="file" class="btn btn-info" name="file" id="file" requerid>
														</div>
													</div>
					                            </div>
					
					                            <!--Second tab-->
					                            <div id="demo-bv-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Receta</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::textarea('receta', null, ['class'=>'form-control', 'id'=>'receta', 'placeholder'=>'Ingrese la receta del platillo', 'required'=>'']) !!}
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Tiempo de preparación</label>
					                                    <div class="col-lg-7">
                                                            {!! Form::text('tiempo', null, ['class'=>'form-control', 'id'=>'tiempo', 'placeholder'=>'Ingrese tiempo de preparacion', 'required'=>'']) !!}
					                                    </div>
													</div>
													<div class="form-group">
					                                    <label class="col-lg-3 control-label">Ingrese los ingredientes</label>
					                                    <div class="col-lg-7">
															{!! Form::text('ingredientes', null, ['class'=>'form-control', 'id'=>'ingredientes', 'placeholder'=>'Ingrese los ingredientes', 'data-role'=>'tagsinput','required'=>'']) !!}
															<!--<input type="text" class="form-control" placeholder="Type to add a tag" value="Sport, Movie, Documents, Video" data-role="tagsinput">-->
					                                    </div>
					                                </div>
					                            </div>
					
					                            <!--Third tab-->
					                            <div id="demo-bv-tab3" class="tab-pane">
					                                <div class="form-group">
														<label class="col-lg-3 control-label">Seleccione las franquicias a las que pertenece</label>
					                                    <div class="col-lg-7">
															<select class="js-example-basic-multiple" style="width:100%;" name="states[]" multiple="multiple" data-placeholder="--- Seleccione las franquicias ---" required>
																
																@foreach ($type_franchise as $item)
																	<option value="{{$item->id_type_franchise}}">{{$item->descripcion_franquicia}}</option>
																@endforeach
															</select>
															
					                                    </div>
													</div>
					                            </div>
					
					                            <!--Fourth tab-->
					                            <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
					                                <h4>Finalizar</h4>
					                                <p class="text-muted">Esta a punto de registrar un nuevo platillo al menú de una o varias franquicias al finalizar esta sera visible para los restaurantes. </p>
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
	
	<!--Bootstrap Select [ OPTIONAL ]-->
	{!! Html::script('plugins/bootstrap-select/bootstrap-select.min.js') !!}
	
	<!--Bootstrap Tags Input [ OPTIONAL ]-->
	{!! Html::script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') !!}

	{!! Html::script('plugins/select2/js/select2.min.js') !!}
	
    <!--Bootstrap Wizard [ OPTIONAL ]-->
    {!! Html::script('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') !!}


    <!--Bootstrap Validator [ OPTIONAL ]-->
    {!! Html::script('plugins/bootstrap-validator/bootstrapValidator.min.js') !!}

    <!--Form Wizard [ SAMPLE ]-->
	{!! Html::script('js/demo/form-wizard.js') !!}

	<!--Masked Input [ OPTIONAL ]-->
	{!! Html::script('plugins/masked-input/jquery.maskedinput.min.js') !!}
	
	<!--Form validation [ SAMPLE ]-->
	{!! Html::script('js/demo/form-validation.js') !!}

	<!--Dropzone [ OPTIONAL ]-->
	{!! Html::script('plugins/dropzone/dropzone.min.js') !!}

	<!--Form File Upload [ SAMPLE ]-->
	{!! Html::script('js/demo/form-file-upload.js') !!}
	
<script>
	$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
	});
</script>
@endsection