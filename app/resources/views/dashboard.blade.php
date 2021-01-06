<!DOCTYPE html>
<html lang="es_GT">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>WOK</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
   
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/plugins/sweetalert/sweetalert.css')!!}
    {!!Html::style('css/plugins/toastr/toastr.min.css')!!}

    <!--Nifty Stylesheet [ REQUIRED ]-->
   
    {!!Html::style('css/nifty.min.css')!!}


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
   
    {!!Html::style('css/demo/nifty-demo-icons.min.css')!!}


    <!--Switchery [ OPTIONAL ]-->
    {!!Html::style('plugins/switchery/switchery.min.css')!!}


    <!--Bootstrap Select [ OPTIONAL ]-->
    {!!Html::style('plugins/bootstrap-select/bootstrap-select.min.css')!!}

    <!--Nifty Ion Icon [ DEMONSTRATION ]-->
  
     {!!Html::style('plugins/ionicons/css/ionicons.min.css')!!}


    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    
     {!!Html::style('plugins/pace/pace.min.css')!!}
     {!!Html::script('plugins/pace/pace.min.js')!!}

     
    <!--Bootstrap Select [ OPTIONAL ]-->

    {!!Html::style('plugins/bootstrap-select/bootstrap-select.min.css')!!}

     <!--Bootstrap Tags Input [ OPTIONAL ]-->
    {!!Html::style('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.css')!!}

    <!--Select2 [ OPTIONAL ]-->
    {!!Html::style('plugins/select2/css/select2.min.css')!!}
    <!--Font-awesome -->
    {!!Html::style('plugins/font-awesome/css/font-awesome.min.css')!!}
    

    <!--DataTables [ OPTIONAL ]-->
    
    
    {!!Html::style('plugins/datatables/media/css/dataTables.bootstrap.css')!!}
    {!!Html::style('plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css')!!}


  

    <!--FooTable [ OPTIONAL ]-->
    {!!Html::style('plugins/fooTable/css/footable.core.css')!!}

    <!--Switchery-->
    
    {!!Html::style('css/plugins/switchery/switchery.css')!!}

    <!--Toastr-->
   
    {!!Html::style('css/plugins/toastr/toastr.min.css')!!}


    <!--Bootstrap Validator [ OPTIONAL ]-->

    {!!Html::style('plugins/bootstrap-validator/bootstrapValidator.min.css')!!}
            
    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

     {!!Html::style('css/themes/type-e/theme-dust.min.css')!!}




        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
        @include('template/navbar')
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    
                    <div class="pad-all text-center">
                        @section('pad')
                        @show
                       
                    </div>

                     <div id="page-title">
                       @section('title')
                       @show
                    </div>

                    @section('breadcrumb')
                    @show

                </div>
            


                
                <!--Page content-->
                <!--===================================================-->
                 @yield('pagecontent')
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================
             @include('template/aside')-->
            <!--===================================================-->
            <!--END ASIDE-->
             @include('template/mainnavigation')
            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
           
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        @include('template/footer')
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


   
    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->



    <!--jQuery [ REQUIRED ]-->
   

    {!! Html::script('js/jquery.min.js'); !!}

    <!--BootstrapJS [ RECOMMENDED ]-->

    {!! Html::script('js/bootstrap.min.js'); !!}


    <!--NiftyJS [ RECOMMENDED ]-->

    {!! Html::script('js/nifty.min.js'); !!}

    

    <!--Bootstrap Validator [ OPTIONAL ]-->
    {!! Html::script('plugins/bootstrap-validator/bootstrapValidator.min.js') !!}


    <!--Masked Input [ OPTIONAL ]-->
    {!! Html::script('plugins/masked-input/jquery.maskedinput.min.js') !!}


    <!--DataTables [ OPTIONAL ]-->
    {!! Html::script('plugins/datatables/media/js/jquery.dataTables.js') !!}
    {!! Html::script('plugins/datatables/media/js/dataTables.bootstrap.js') !!}
    {!! Html::script('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') !!}

    {!! Html::script('js/demo/tables-datatables.js') !!}
    

    <!--Bootbox Modals [ OPTIONAL ]-->
    {!!Html::script('plugins/bootbox/bootbox.min.js')!!}



    <!--=================================================-->
    
  

    
    <!--Flot Chart [ OPTIONAL ]-->
    
    {!! Html::script('plugins/flot-charts/jquery.flot.min.js'); !!}
    {!! Html::script('plugins/flot-charts/jquery.flot.resize.min.js'); !!}
    {!! Html::script('plugins/flot-charts/jquery.flot.tooltip.min.js'); !!}





    <script type="text/javascript">
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>
    

    <!--Sparkline [ OPTIONAL ]-->    
     {!! Html::script('plugins/sparkline/jquery.sparkline.min.js'); !!}

    


      <!--Toast-->
    {!! Html::script('js/toastr/toastr.min.js') !!}
    <!-- Flot -->
    {!! Html::script('js/plugins/flot/jquery.flot.js'); !!}
    {!! Html::script('js/plugins/flot/jquery.flot.tooltip.min.js'); !!}
    {!! Html::script('js/plugins/flot/jquery.flot.resize.js'); !!}
    {!! Html::script('js/plugins/sweetalert/sweetalert.min.js') !!}


     <!--Skycons [ OPTIONAL ]-->
    {!! Html::script('plugins/skycons/skycons.min.js') !!}

   
      <!--Gauge js [ OPTIONAL ]-->
     {!! Html::script('plugins/gauge-js/gauge.min.js') !!}

    <!--Bootstrap Select [ OPTIONAL ]-->   
    {!! Html::script('plugins/bootstrap-select/bootstrap-select.min.js') !!}


    <!--Bootstrap Wizard [ OPTIONAL ]-->
    {!! Html::script('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') !!}
   
    @section('script')
    @show
    

</body>
</html>
