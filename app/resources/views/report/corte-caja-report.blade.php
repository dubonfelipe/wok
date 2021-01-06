<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Proyectos</title>
	<style>
	h1{
		font-weight: bold;
		text-align: center;
		text-transform: uppercase;
		margin-bottom: 0px;
		padding-bottom: opx;
	}
	h2{
		color: #02556e;
		margin-top:35px;
		text-transform: uppercase;
		text-align: center;
	}
	h3{
		text-align: center;
		text-transform: uppercase;
		margin-top:0px;
		margin-bottom: 18px;
	}
	h4{
		text-align: center;
		color: #f68628;
		font-size: 18px;
		font-weight: normal;
		text-transform: uppercase;
		margin-top:0px;
		margin-bottom: 18px;
	}
	h5{
		text-align: left;
		color: #2ebeef;
		font-size: 16px;
		font-weight: normal;
		margin-top:0px;
	}
	p{
		text-align : justify;
	}

	tr:nth-child(even){
		background-color: #f5f5dc;
	}
	th, td {
		text-align: left;
		padding-right: 15px;
		padding-left: 15px;
	}
	.contenido{
		font-size: 20px;
	}
	.frame{
		padding: 40px;
		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
		font-size: 12px;
	}

	.subtitle{
		font-weight: bold;
		font-size: 14px;
	}
	.logos{
		width: 60%;
		margin: 0 auto;
	}

	.numbers{
		text-align: left;
		font-weight: bold;
		font-size: 24px;
		margin-bottom: 0px;
		padding-bottom: 5px;
		padding-bottom: 7px;
	}

	.color-indico{
		color:white;
		background-color: #02556e;
	}

	.color-indico-2{
		font-weight: bold;
		color:white;
		background-color: #95b1c2;
	}
	.color-blue{
		color:white;
		background-color: #2ebeef;
	}
	.color-blue-2{
		font-weight: bold;
		color:white;
		background-color: #abe1fa;
	}
	.color-red{
		color:white;
		background-color: #a03522;
	}
	.color-red-2{
		font-weight: bold;
		color:white;
		background-color: #d6acaa;
	}
	.color-orange{
		color:white;
		background-color: #f68628;
	}
	.color-orange-2{
		font-weight: bold;
		color:white;
		background-color: #fdcdab;
	}

	#segundo{
		color:#44a359;
	}
	#tercero{
		text-decoration:line-through;
	}

	.custom-legend {
		position: absolute;
		top: 130%;
		left: 53%;

		margin-bottom: 0px;
		font-size: 16px;
		min-width: 75px;
	}
	</style>
</head>
<body>

  <div class="frame">
		<div class="logos">
			<img src="{{asset('storage/dosoftware.png')}}" alt="{{asset('storage/dosoftware.png')}}" width="10%" height="3%" style="padding-bottom:0; cursor: pointer;">
		</div>
    <h1>Corte de Caja</h1>

		<!--<h4 style="color:red">Este reporte en PDF aún está en desarrollo.</h4>-->
    <div style="margin-bottom: 20px;">
    <div class="logos">            
            <img src="{{base_path('storage/dosoftware.png')}}" alt="logo-dosoftware" width="auto" height="5%" style="padding-bottom:0; float:left;">
            
            </div> 
			<table class="table table-bordered" style="width:100%">
        <thead>
		  <tr>
            <th>Tipo de Franquicia</th>
            <th class="color-indico">{{ $tipo_franquicia }}</th>
      </tr>
      <tr>
            <th>Dirección</th>
            <th class="color-blue">{{ $direccion }}</th>
      </tr>
      <tr>
            <th>Fecha y hora corte de caja</th>
            <th class="color-red">{{ $corte->fecha_cierre }}</th>
      </tr>
            <tr>
            <th>Empleado que ejecuto el cierrre</th>
            <th class="color-orange">{{ $corte->usr }}</th>
          </tr>
        </thead>
        <tbody>
		  
        </tbody>
      </table>

		</div>

		<div style="margin-bottom: 20px;">

			<table class="table table-bordered" style="width:100%">
      <thead>
                    <tr>
                        <th class="min-tablet">Descripcion</th>
                        <th class="min-tablet">Efectivo</th>
                        <th class="min-tablet">Tarjeta</th>
                        <th class="min-tablet"></th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>Cantidad de efectivo inicial en caja</td>
                            <td>+ Q.{{number_format($corte->ef_caja,2, '.', ',')}}</td>
                            <td>+ Q.{{number_format(0,2, '.', ',')}}</td>
                            <td></td>
                        </tr>  
                    @if($corte->cierre_ef!=null)
                        @foreach ($ventasef as $item)
                            <tr>
                                <td>{{$item->dsc}}</td>
                                <td>+ Q.{{number_format($item->ef,2, '.', ',')}}</td>
                                <td>+ Q.{{number_format(0,2, '.', ',')}}</td>
                                <td></td>
                            </tr>    
                        @endforeach
                        @foreach ($ventastj as $item)
                            <tr>
                                <td>{{$item->dsc}}</td>
                                <td>+ Q.{{number_format(0,2, '.', ',')}}</td>
                                <td>+ Q.{{number_format($item->tj,2, '.', ',')}}</td>
                                <td></td>
                            </tr>    
                        @endforeach
                        @foreach ($pagos as $item)
                            <tr>
                                <td>{{$item->dsc}}</td>
                                <td>- Q.{{number_format($item->ef,2, '.', ',')}}</td>
                                <td>- Q.{{number_format(0,2, '.', ',')}}</td>
                                <td></td>
                            </tr>    
                        @endforeach
                    @endif
                </tbody>
                @if($corte->cierre_ef!=null)
                    <tr>                        
                        <td class="">Sub-Total: </th>
                        <td class="color-indico">Q.{{number_format($corte->cierre_ef,2, '.', ',')}}</th>
                        <td class="color-indico">Q.{{number_format($corte->cierre_tj,2, '.', ',')}}</th>
                        <td class="color-blue"><strong>Total: Q.{{number_format($corte->cierre_ef + $corte->cierre_tj,2, '.', ',')}} </strong></th>
                        
                    </tr>
                @endif
      </table>

		</div>


	
</body>
</html>
