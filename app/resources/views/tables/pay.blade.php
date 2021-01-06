@extends('dashboard')

 @section('pad')
  
<div id="page-head">
                    
    <div class="pad-all text-center">
        <h3>Facturación de venta</h3>
    </div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            {!! Form::open(['route'=>['bill.sell'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
                {!! Form::hidden('id_bill', $id_bill, ['id'=>'id_bill','name'=>'id_bill']) !!}
                {!! Form::hidden('id_table', $id_table, ['id'=>'id_table','name'=>'id_table']) !!}
                {!! Form::hidden('id_pedido', $id_pedido, ['id'=>'id_pedido','name'=>'id_pedido']) !!}
                {!! Form::hidden('id_cliente', null, ['id'=>'id_cliente','name'=>'id_cliente']) !!}
                <div class="form-group">
                    <label class="col-md-2 control-label">Compra</label>
                    <div class="col-md-9">
                        <div class="radio" ><!-- Inline radio buttons -->
                            <input id="demo-inline-form-radio" class="magic-radio" value="C/F" type="radio" name="inline-form-radio" onchange="changeTypePay(0)" checked>
                            <label for="demo-inline-form-radio">C/F</label>

                            <input id="demo-inline-form-radio-2" class="magic-radio" value="NIT" type="radio" name="inline-form-radio" onchange="changeTypePay(1)">
                            <label for="demo-inline-form-radio-2">NIT</label>
                        </div>
                    </div>
                </div>
                <div id="registro" hidden>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">NIT</label>
                        <div class="col-md-9">
                            {!! Form::text('nit', null, ['class'=>'form-control', 'id'=>'nit', 'placeholder'=>'Ingrese el nit del cliente', 'autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">Nombre</label>
                        <div class="col-md-9">
                            {!! Form::text('nombre', null, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Ingrese el nombre del cliente', 'autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">DPI</label>
                        <div class="col-md-9">
                            {!! Form::text('dpi', null, ['class'=>'form-control', 'id'=>'dpi', 'placeholder'=>'Ingrese el DPI del cliente', 'autocomplete'=>'off']) !!}
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">Correo</label>
                        <div class="col-md-9">
                            {!! Form::text('correo', null, ['class'=>'form-control', 'id'=>'correo', 'placeholder'=>'Ingrese el correo del cliente', 'autocomplete'=>'off']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">Tipo de pago</label>
                        <div class="col-md-9">
                            <select name="tipopago" id="tipopago" class="form-control" required>
                                    <option value="EF" selected>Efectivo</option>
                                    <option value="TJ">Tarjeta de Crédito/Débito</option>
                            </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input"></label>
                    <div class="col-md-9">
                        {!! Form::submit('Facturar', ['id'=>'guardar', 'class'=>'btn btn-primary btn-rounded']) !!}  
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 60%">Descripción</th>
                                <th style="width: 10%">Cantidad</th>
                                <th style="width: 30%">Precio unitario</th>
                                <th style="width: 30%">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $item)
                                <tr>
                                    <td>{{$item->descripcion}}</td>
                                    <td>{{$item->cantidad}}</td>
                                    <td>{{number_format($item->precio_unitario,2, '.', ',')}}</td>
                                    <td>{{number_format(($item->cantidad * $item->precio_unitario),2, '.', ',')}}</td>
                                </tr>    
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td><strong>Total:</strong></td>
                                <td><strong>{{number_format($total,2, '.', ',')}}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        function changeTypePay(type) {
            console.log(type);
            if (type === 1) {
                document.getElementById('nit').required = true;
                document.getElementById('nombre').required = true;
                /*document.getElementById('dpi').required = true;
                document.getElementById('correo').required = true;*/
                document.getElementById('registro').style.display = 'block';
            }else{
                document.getElementById('nit').required = false;
                document.getElementById('nombre').required = false;
                document.getElementById('registro').style.display = 'none';
                //document.getElementById('registro').hiden();
            }
        }
        function getPersonForNit (nit) {
                $.ajax({
                    type: 'post',
                    url: '{{ route('persona.nit') }}',
                    data: {
                    '_token': "{{ csrf_token() }}",
                    'id': nit,
                    },
                    success: function(data) {
                        if ((data.errors)) {
                            console.log('ERROR_FLAG');
                        } else {
                            console.log('SUCCESS_FLAG');
                            console.log(data);
                            if(data!=null){
                                document.getElementById("nombre").value = data.nombre; 
                                document.getElementById("correo").value = data.correo; 
                                document.getElementById("id_cliente").value = data.id_cliente;
                            }
                        }
                    },
                }); 
            }
        $(document).ready(function() {
            $('#nit').change(function(){
                getPersonForNit(document.getElementById('nit').value);
            }); 
	    });
    </script>
@endsection