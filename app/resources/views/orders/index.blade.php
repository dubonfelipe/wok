@extends('dashboard')



@section('pagecontent')

<div id="page-content">
    <div class="panel">
        <div class="panel-heading" style="text-align: center">
            <h3 class="panel-title" style="font-size: 2em"><strong>Menú</strong></h3>
        </div>
        <div class="panel-body" style="padding: 0 0 2% 0;">
            <div class="container-slider" style="background: #fff;margin-top: 0%">
            
                <span id="slideLeft" class="slide" style="float: left" onclick="scrollToLeft()"><i class="ion-chevron-left"></i></span>
                <span id="slideRight" class="slide" style="float: right" onclick="scrollToRight()"><i class="ion-chevron-right"></i></span>
                <div id="slider" class="head">
                    @for ($i = 0; $i < sizeof($categories); $i++)
                        @if ($i == 0)
                            <label id="ct-{{$i}}" class="category active" onclick="activeCategory(this)">
                                <i class="fa fa-fire" style="font-size: 35px;"></i>
                                <p >{{$categories[$i]->descripcion}}</p>
                            </label> 
                        @else
                            <label id="ct-{{$i}}" class="category" onclick="activeCategory(this)">
                                
                                @if($categories[$i]->descripcion=== 'Bebida')
                                    <i class="ion-wineglass" style="font-size: 35px;"></i>
                                @elseif($categories[$i]->descripcion=== 'Postre')
                                    <i class="ion-icecream" style="font-size: 35px;"></i>
                                @else
                                    <i class="ion-fork" style="font-size: 35px;"></i>
                                @endif
                                <p >{{$categories[$i]->descripcion}}</p>
                            </label> 
                        @endif
                    @endfor
                </div>
            </div>
            
            <div id="slider-body" style="padding: 1em">
                @for ($i = 0; $i < sizeof($categories); $i++)
                    @if ($i == 0)
                        <div id="slider-{{$i}}" class="row" >
                            @foreach ($categories[$i]->plates as $plate)
                                <div class="col-lg-3 col-md-3 col-sm-4" style="margin: 1% 0">
                                    <div class="card-body" >
                                        <div class="panel widget inFade" style="margin: 0%">
                                            <div class="widget-header bg-purple" >
                                                <img id="img" class="widget-bg img-responsive" src="{{asset('storage')}}/{{$plate->img}}" alt="Image">
                                            </div>
                                            <div class="widget-body text-center" style=" padding-top: 1em">
                                                <h4 class="mar-no text-main">{{$plate->descripcion}}</h4>
                                                <h5 class="text-muted mar-no" ><strong>Precio: </strong>Q.{{number_format($plate->monto,2, '.', ',')}}</h5>
                                                <p class="text-muted mar-no" >
                                                    {{$plate->resumen}}
                                                </p>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-4"><button onclick="restProducto('{{$plate->id_menu}}')" class="btn btn-circle" style="height: 2.5em; border: 1px solid"><i class="ion-minus-round"></i></button></div>
                                                    <div class="col-xs-4"><input id="amount-p{{$plate->id_menu}}" type="text" class="form-control" style="width: 100%; text-align: center" readonly value="0"></div>
                                                    <div class="col-xs-4"><button onclick="addProducto('{{$plate->id_menu}}')" class="btn btn-circle" style="height: 2.5em; border: 1px solid"><i class="ion-plus-round"></i></button></div>
                                                    <div class="col-xs-12"><hr></div>
                                                    <div class="col-xs-12"><button id="add-b{{$plate->id_menu}}" class="btn btn-lg btn-success btn-rounded" style=" height: 2.5em; border: 1px solid" onclick="addItem('{{$plate->id_menu}}','{{$plate->descripcion}}','{{$plate->resumen}}')" disabled><i class="ion-plus-circled"> </i> Agregar </button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>    
                    @else
                        <div id="slider-{{$i}}" class="row" style="display: none">
                            @foreach ($categories[$i]->plates as $plate)
                                <div class="col-lg-3 col-md-3 col-sm-4" style="margin: 1% 0">
                                    <div class="card-body" >
                                        <div class="panel widget inFade" style="margin: 0%">
                                            <div class="widget-header bg-purple" >
                                                <img class="widget-bg img-responsive" src="{{asset('storage')}}/{{$plate->img}}" alt="Image">
                                            </div>
                                            <div class="widget-body text-center" style=" padding-top: 1em">
                                                <h4 class="mar-no text-main">{{$plate->descripcion}}</h4>
                                                <h5 class="text-muted mar-no" ><strong>Precio: </strong> Q.{{number_format($plate->monto,2, '.', ',')}}</h5>
                                                <p class="text-muted mar-no" >
                                                    {{$plate->resumen}}
                                                </p>
                                                <br>
                                                <div class="row" >
                                                    <div class="col-xs-4"><button onclick="restProducto('{{$plate->id_menu}}')" class="btn btn-circle" style=" height: 2.5em; border: 1px solid"><i class="ion-minus-round"></i></button></div>
                                                    <div class="col-xs-4"><input id="amount-p{{$plate->id_menu}}" type="text" class="form-control" style="width: 100%; text-align: center" readonly value="0"></div>
                                                    <div class="col-xs-4"><button onclick="addProducto('{{$plate->id_menu}}')" class="btn btn-circle" style=" height: 2.5em; border: 1px solid"><i class="ion-plus-round"></i></button></div>
                                                    <div class="col-xs-12"><hr></div>
                                                    <div class="col-xs-12"><button id="add-b{{$plate->id_menu}}" class="btn btn-lg btn-success btn-rounded" style=" height: 2.5em; border: 1px solid"  onclick="addItem('{{$plate->id_menu}}','{{$plate->descripcion}}','{{$plate->resumen}}')"><i class="ion-plus-circled"> </i> Agregar </button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>    
                    @endif
                @endfor
            </div>
        </div>
    </div>
    <button id="button-order" class="btn btn-success flotante btn-icon btn-circle" onclick="openOrder()"><i class="ion-clipboard" style="font-size: 25px"></i></button>
    <div id="order-panel" class="orders border-r2 fadeInOrder">
        <span style="float: right"><button class="btn btn-danger btn-icon btn-circle" onclick="closeOrder()"><i class="ion-close-round" style="font-size: 12px"></i></button></span>
        <h4>ORDEN</h4>
        <hr>
        <div id="fill-order" style="display: none;">
            <div style="width: 95%;">
                <div class="row" style="">
                    <div class="col-xs-2" style="padding-bottom: 0%; padding-top: 0%">Cnt.</div>
                    <div class="col-xs-8" style="padding-bottom: 0%; padding-top: 0%">Descripción</div>
                    <div class="col-xs-2" style="padding-bottom: 0%; padding-top: 0%">Opciones</div>
                </div>
            </div>
            <hr style="margin-top: 5px; margin-bottom: 5px">
            <div id="list-item" class="item-menu">
            </div>
            <hr>
            <div style="width: 98%">
                <button class="btn btn-success" onclick="sellOrder(this)">Enviar orden</button>
            </div>
        </div>
        <div id="empty-order" style="width: 100%">
            <p>Sin articulos añadidos a la orden</p>
        </div>
        
    </div>
</div>


@endsection

@section('script')

    <script>
        var categories = {!! json_encode($categories) !!};
        var id_table = {!! json_encode($id_table) !!};
        var id_bill = {!! json_encode($id_bill) !!};

        function scrollToRight() {
            document.getElementById('slider').scrollLeft += 50;
        }

        function scrollToLeft() {
            document.getElementById('slider').scrollLeft -= 50;
        }

        $(window).resize(function () 
       {
            if (document.getElementById('slider').offsetWidth == document.getElementById('slider').scrollWidth) {
                document.getElementById('slideRight').style.display = 'none';
                document.getElementById('slideLeft').style.display = 'none';
                //document.getElementById('slider').style.width = '100%';
            } else {
                document.getElementById('slideRight').style.display = 'block';
                document.getElementById('slideLeft').style.display = 'block';
                //Wdocument.getElementById('slider').style.width = '92.7%';
            }
       });

       function activeCategory(e) {
           let categories = document.getElementById('slider').getElementsByTagName('label');
           for (let i = 0; i < categories.length; i++) {
                document.getElementById('slider-'+i).style.display = 'none';
                if (categories[i].className.includes(' active')) {
                    categories[i].className = categories[i].className.replace(' active','');
                }
                if (e.id === categories[i].id) {
                    categories[i].className +=' active';
                    document.getElementById('slider-'+i).style.display = 'block';
                }
           }
       }

        function restProducto(id){
            let input = document.getElementById('amount-p'+id);
            if (Number(input.value) > 0) {
                input.value = Number(input.value)-1;
            }else{
                document.getElementById('add-b'+id).disabled = true;
            }
        }

        function addProducto(id) {
            let input = document.getElementById('amount-p'+id);
            input.value = Number(input.value)+1;
            if (Number(input.value) > 0) {
                document.getElementById('add-b'+id).disabled = false;
            }
        }

        function addItem(id, descripcion, resumen) {
            document.getElementById('fill-order').style.display = 'block';
            document.getElementById('empty-order').style.display = 'none';
            let amount = Number(document.getElementById('amount-p'+id).value)
            $('#list-item').append(`
                <div class="row item-order border-r1" style="padding: 5px">
                    <div class="col-sm-1" style="text-align: center; padding: 0; display: table-cell; vertical-align: middle;">
                        <button class="btn btn-icon btn-circle" style="border: 1px solid; margin-bottom: 2px" onclick="plusItemOrder('${id}')"><i class="ion-plus-round" style="font-size: 10px"></i></button>
                        <strong id="str-p${id}" class="item-amount">${amount}</strong>
                        <button class="btn btn-icon btn-circle" style="border: 1px solid; margin-top: 2px" onclick="minusItemOrder('${id}')"><i class="ion-minus-round" style="font-size: 10px"></i></button>
                    </div>
                    <div class="col-sm-10">
                        <p><strong>${descripcion}</strong></p>
                        ${resumen}
                    </div>
                    <div class="col-sm-1" style="text-align: center; padding: 0; display: table-cell; vertical-align: middle;">
                        <button class="btn btn-danger btn-icon btn-circle" style="margin-bottom: 2px"  onclick="deleteItemOrder(this)"><i class="ion-trash-a" style="font-size: 13px"></i></button>
                    </div>
                </div>
            `)
            document.getElementById('amount-p'+id).value = 0;
            document.getElementById('add-b'+id).disabled = true;
            
        }

        function plusItemOrder(id){
            let amount = Number(document.getElementById('str-p'+id).textContent);
            amount++;
            document.getElementById('str-p'+id).textContent = amount;
        }

        function minusItemOrder(id){
            let amount = Number(document.getElementById('str-p'+id).textContent);
            if (amount > 1) {
                amount--;
                document.getElementById('str-p'+id).textContent = amount;    
            }
        }

        function deleteItemOrder(e) {
            swal({
                title: "¿Está seguro de eliminar esta item de la orden?",
                text: "El item será eliminado de la orden actual",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "¡Sí, quiero eliminarlo!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: true
            }, function () {
                let item = e.parentNode.parentNode;
                item.parentNode.removeChild(item);
                if (document.getElementById('list-item').getElementsByClassName('item-order').length == 0) {
                    document.getElementById('fill-order').style.display = 'none';
                    document.getElementById('empty-order').style.display = 'block';
                }
            });
            
        }
       
        //Abrir lista de ordenes
        function openOrder(){
            $('#button-order').fadeOut();
            document.getElementById('order-panel').style.display = 'block';
        }
        function closeOrder(){
            document.getElementById('button-order').style.display = 'block';
            $('#order-panel').fadeOut();
        }

        function sellOrder(e){
            let itemsOrden = document.getElementById('list-item').getElementsByClassName('item-order');
            let detalle = [];
            for (let i = 0; i < itemsOrden.length; i++) {
                categories.forEach(categoria => {
                    categoria.plates.forEach(plato => {
                      //console.log(itemsOrden[i].getElementsByClassName('item-amount')[0].id);
                      if (itemsOrden[i].getElementsByClassName('item-amount')[0].id === ('str-p'+plato.id_menu)) {
                        plato['cantidad'] = Number(document.getElementById('str-p'+plato.id_menu).textContent);
                        detalle.push(plato);
                      }
                    });
                });
            }
            //console.log(id_bill);
            if (id_bill == null) {
                $.ajax({
                    type: 'post',
                    url: '{{ route('orders.store') }}',
                    data: {
                    '_token': "{{ csrf_token() }}",
                    'id_table': id_table,
                    'detalle': JSON.stringify(detalle)
                    },
                    success: function(data) {
                        if ((data.errors)) {
                            console.log('ERROR_FLAG');
                        } else {
                            console.log('SUCCESS_FLAG');
                            console.log(data);
                            location.href = data;
                        }
                    },
                })
            } else {
                $.ajax({
                    type: 'post',
                    url: '{{ route('orders.store.more') }}',
                    data: {
                    '_token': "{{ csrf_token() }}",
                    'id_table': id_table,
                    'id_bill': id_bill,
                    'detalle': JSON.stringify(detalle)
                    },
                    success: function(data) {
                        if ((data.errors)) {
                            console.log('ERROR_FLAG');
                        } else {
                            console.log('SUCCESS_FLAG');
                            console.log(data);
                            location.href = '/wok/public/tables';
                        }
                    },
                })
            }
            
        }
    </script>

@endsection

<style>
   
    .flotante{
       position: fixed;
       z-index: 10;
       right: 25px;
       top: 16%;
    }

    .item-menu{
        width: 98%; 
        padding-left: 5px;
        overflow-y: auto;
    }

    .orders{
        display: none;
        position: fixed;
        z-index: 10;
        right: 15px;
        top: 10%;
        max-height: 80%;
        background: #fff;
        padding: 15px;
        width: 475px;
        border: 2px solid #fe6d33;
    }
    .item-order{
        border: 1px solid rgb(230, 230, 230);
        padding-top: 1%;
        display: table;
    }
    

    .item-order [class*="col-"] {
        float: none;
        display: table-cell;
        vertical-align: top;
    }
    span.slide{
        height: 6.5em;
        padding: 10px 1%;
        cursor: pointer;
        color: black;
    }

    span.slide:hover{
      
      padding: 10% 1.2%;
      cursor: pointer;
      border-radius: 2px 2px 2px 2px;
      -moz-border-radius: 2px 2px 2px 2px;
      -webkit-border-radius: 2px 2px 2px 2px;
      -webkit-box-shadow: 0px 0px 7px 2px rgba(209,209,209,1);
      -moz-box-shadow: 0px 0px 7px 2px rgba(209,209,209,1);
      box-shadow: 0px 0px 7px 2px rgba(209,209,209,1);
    }

    div.container-slider{
      width: 95%;
      margin: 2%;
      padding: 2%;
    }

    

    .active{
        color: #fe6d33;
        
    }

    .category{
        padding: 5px;
        margin: 0% 10px;
        border-radius: 10px 10px 10px 10px;
        -moz-border-radius: 10px 10px 10px 10px;
        -webkit-border-radius: 10px 10px 10px 10px;
    }

    .category:hover{
        opacity: 0.6;
        transition: opacity .25s ease-in-out;
        -moz-transition: opacity .25s ease-in-out;
        -webkit-transition: opacity .25s ease-in-out;
    }

    .category:active{
        opacity: 0.5;
        transition: opacity .25s ease-in-out;
        -moz-transition: opacity .25s ease-in-out;
        -webkit-transition: opacity .25s ease-in-out;

        color: #fe6d33;
        transition: color .25s ease-in-out;
        -moz-transition: color .25s ease-in-out;
        -webkit-transition: color .25s ease-in-out;
    }

    
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

    div.head{
      width: 94.7%;
      height: 6.6em;
      padding-top: 0.7em;
      padding-bottom: 0em;
      padding-left: 1%;
      overflow-x: auto;
      white-space: nowrap;
      text-align: center;
      border-bottom: 1px solid lightgray;
      color: black;
      margin: 0 auto;
    }

    div.card-body{
        border: 1px solid lightgray;
    }

    div.card-body:hover{
        cursor: pointer;
        -webkit-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.75);

        transition: -webkit-box-shadow .30s ease-in-out;
        -moz-transition: -webkit-box-shadow .30s ease-in-out;
        -webkit-transition: -webkit-box-shadow .30s ease-in-out;
    }  

       
    

    ::-webkit-scrollbar {
      width: 20px;
      height: 7px; 
      display: none;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 2px grey; 
      border-radius: 10px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: black; 
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: black; 
    }

    div.inFade{
      animation-duration: 0.7s;
      animation-name: slidein;
    }

    div.fadeInOrder{
      animation-duration: 0.7s;
      animation-name: slideInOrder;
    }

      

    @keyframes slidein {
      from {
        margin-left: 5%;
        width: 100%;
        opacity: 0.0;
      }

      to {
        margin-left: 0%;
        width: 100%;
      }
    }

    @keyframes slideInOrder {
      from {
        margin-left: 5%;
        opacity: 0.0;
      }

      to {
        margin-left: 0%;
      }
    }
    

    @media only screen and (max-width: 497px){
        div.container-slider{
            width: 96%;
            margin: 2%;
            padding: 2%;
        }
      div.head{
        width: 90%;
        height: 6.6em;
        padding-top: 0.7em;
        padding-bottom: 0em;
        padding-left: 1%;
        overflow-x: auto;
        white-space: nowrap;
        text-align: center;
        border-bottom: 1px solid lightgray;
        margin: 0 auto;
        
      }
    }

    @media only screen and (max-width: 768px) and (min-width: 497px){
        div.container-slider{
            width: 95%;
            margin: 2%;
            padding: 2%;
        }
        div.head{
            width: 92.5%;
            height: 6.6em;
            
            padding-top: 0.7em;
            padding-bottom: 0em;
            padding-left: 1%;
            overflow-x: auto;
            white-space: nowrap;
            text-align: center;
            border-bottom: 1px solid lightgray;
            margin: 0 auto;
        }
    }

    @media only screen and (max-width: 1024px) and (min-width: 769px){
        div.container-slider{
            width: 95%;
            margin: 2%;
            padding: 2%;
            align-content: center;
            text-align: center;
        }
        div.head{
            width: 92.5%;
            height: 6.6em;
            
            padding-top: 0.7em;
            padding-bottom: 0em;
            padding-left: 1%;
            overflow-x: auto;
            white-space: nowrap;
            text-align: center;
            border-bottom: 1px solid lightgray;
            margin: 0 auto;
        }

        
    }

    @media only screen and (min-width: 1024px) and (min-height: 1024px){
        .item-menu{
            width: 98%; 
            padding-left: 5px;
            max-height: 500px;
            overflow-y: auto;
        }
    }

    @media only screen and (min-width: 1024px) and (max-height: 1024px) and (min-height: 768px){
        .item-menu{
            width: 98%; 
            padding-left: 5px;
            max-height: 435px;
            overflow-y: auto;
        }
    }
    /* ipad vertical*/
    @media only screen and (max-width: 768px) and (max-height: 1024px) and (min-height: 800px){
        .item-menu{
            width: 98%; 
            padding-left: 5px;
            max-height: 400px;
            overflow-y: auto;
        }
    }
    /* ipad horizontal*/
    @media only screen and (min-width: 768px) and (max-width: 1024px) and (max-height: 1024px) and (min-height: 768px){
        .item-menu{
            width: 98%; 
            padding-left: 5px;
            max-height: 325px;
            overflow-y: auto;
        }
    }
    /* iphone X vertical*/
    @media only screen and (min-width: 375px) and (max-width: 414px) and (max-height: 812px) and (min-height: 736px){
        .item-menu{
            width: 98%; 
            padding-left: 5px;
            max-height: 350px;
            overflow-y: auto;
        }

        .orders{
            display: none;
            position: fixed;
            z-index: 10;
            right: 15px;
            top: 10%;
            max-height: 80%;
            background: #fff;
            padding: 15px;
            width: 95%;
            border: 2px solid #fe6d33;
        }
    }
    /* iphone X horizontal*/
    @media only screen and (min-width: 736px) and (max-width: 812px) and (min-height: 375px) and (max-height: 414px){
        .item-menu{
            width: 98%; 
            padding-left: 5px;
            max-height: 72px;
            overflow-y: auto;
        }

        .orders{
            display: none;
            position: fixed;
            z-index: 10;
            right: 15px;
            top: 10%;
            max-height: 80%;
            background: #fff;
            padding: 15px;
            width: 80%;
            border: 2px solid #fe6d33;
        }
    }
    /* iphone 6/7/8 y iphone 6/7/8 plus vertical*/
    @media only screen and (min-width: 375px) and (max-width: 414px) and (max-height: 736px) and (min-height: 667px){
        .item-menu{
            width: 98%; 
            padding-left: 5px;
            max-height: 285px;
            overflow-y: auto;
        }

        .orders{
            display: none;
            position: fixed;
            z-index: 10;
            right: 15px;
            top: 10%;
            max-height: 80%;
            background: #fff;
            padding: 15px;
            width: 95%;
            border: 2px solid #fe6d33;
        }
    }
    /* iphone 6/7/8 horizontal*/
    @media only screen and (min-width: 568px) and (max-width: 667px) and (min-height: 320px) and (max-height: 375px){
        .item-menu{
            width: 98%; 
            padding-left: 5px;
            max-height: 70px;
            overflow-y: auto;
        }

        .orders{
            display: none;
            position: fixed;
            z-index: 10;
            right: 15px;
            top: 10%;
            max-height: 80%;
            background: #fff;
            padding: 15px;
            width: 80%;
            border: 2px solid #fe6d33;
        }
    }

</style>