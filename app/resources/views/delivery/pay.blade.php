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
            {!! Form::open(['route'=>['deleveryPay.store'],'class'=>'panel-body form-horizontal form-padding','method'=>'POST']) !!}
                {!! Form::hidden('id_bill', $id_bill, ['id'=>'id_bill','name'=>'id_bill']) !!}
                {!! Form::hidden('id_table', $id_table, ['id'=>'id_table','name'=>'id_table']) !!}
                {!! Form::hidden('id_pedido', $id_pedido, ['id'=>'id_pedido','name'=>'id_pedido']) !!}
                
                <div id="registro" >
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">NIT</label>
                        <div class="col-md-9">
                            {!! Form::text('nit', $cliente->nit_cliente, ['class'=>'form-control', 'id'=>'nit', 'placeholder'=>'Ingrese el nit del cliente', 'autocomplete'=>'off', 'required'=>'', 'readonly'=>'']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">Nombre</label>
                        <div class="col-md-9">
                            {!! Form::text('nombre', $cliente->nombre, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Ingrese el nombre del cliente', 'autocomplete'=>'off','required'=>'', 'readonly'=>'']) !!}
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">DPI</label>
                        <div class="col-md-9">
                            {!! Form::text('dpi', $cliente->dpi, ['class'=>'form-control', 'id'=>'dpi', 'placeholder'=>'Ingrese el DPI del cliente']) !!}
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="demo-text-input">Correo</label>
                        <div class="col-md-9">
                            {!! Form::text('correo', $cliente->correo, ['class'=>'form-control', 'id'=>'correo', 'placeholder'=>'Ingrese el correo del cliente','readonly'=>'']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="demo-text-input">Tipo de pago</label>
                    <div class="col-md-9">
                        <select name="tipopago" id="tipopago" class="form-control" required>
                                <option value="EF" selected>Efectivo</option>
                                <option value="TJ" >Tarjeta de Crédito/Débito</option>
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
    </script>
  
@endsection