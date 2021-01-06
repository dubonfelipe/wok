<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WOK | Inicio</title>

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
   
     {!!Html::style('css/bootstrap.min.css')!!}


    <!--Nifty Stylesheet [ REQUIRED ]-->
   
     {!!Html::style('css/nifty.min.css')!!}


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
   
     {!!Html::style('css/demo/nifty-demo-icons.min.css')!!}

    <!--Nifty Ion Icon [ DEMONSTRATION ]-->
  
     {!!Html::style('plugins/ionicons/css/ionicons.min.css')!!}

    
</head>

<body class="gray-bg">

    <div id="container" class="cls-container">
    <!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>
		
        <div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
                        <h3 >Bienvenido a</h3>
                        <h3>Working On Kitchen</h3>
                        <p>Inicia Sesión para continuar.</p>
                       <!-- @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                Los datos no coinciden

                            </div>
                        @endif-->
                        @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    {{$errors->first()}}

                                </div>
                        @endif
                    </div>
                    <form role="form" action="login" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Correo" required="">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Contraseña" required="">
                        </div>
                        <button type="submit" class="btn btn-success block full-width m-b">Iniciar</button>
                    </form>
                </div>
                <div class="pad-all">
		            <a href="password/mail" class="btn-link mar-rgt">Olvide mi Contraseña</a>
                    <p class="m-t"> <small>Desarrollado por DO Software  &copy; {{ date("Y") }}
                            </small> </p>
		            <div class="media pad-top bord-top">
		                <div class="pull-right">
		                    <a href="https://www.facebook.com/DOSoftwareWeb" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
		                </div>
		            </div>
		        </div>
            </div>
        <div>
   
        <!-- DEMO PURPOSE ONLY -->
		<!--===================================================
		<div class="demo-bg">
		    <div id="demo-bg-list">
		        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
		        <img class="demo-chg-bg bg-trans active" src="img/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-1.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
		    </div>
		</div>-->
		<!--===================================================-->
		
    </div>

    <!-- Mainly scripts -->

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/nifty.min.js')!!}

    <script>
    $(document).on('nifty.ready', function() {
        var $target 	= $('#bg-overlay');
        $('<img/>').attr('src' , '{{url('img/wok-2.jpg')}}').on('load', function(){
            $target.css('background-image', 'url("  {{url('img/wok-2.jpg')}} ")').addClass('bg-img');

            $(this).remove();
        });
    });
    </script>
</body>

</html>
