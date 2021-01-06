 <nav id="mainnav-container">
                <div id="mainnav">


                    <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                    <!--It will only appear on small screen devices.-->
                    <!--================================-->
                    <div class="mainnav-brand">
                        <a href="{{ url('/') }}" class="brand">
                            <img src="{{asset('img/logo.png')}}" alt="Nifty Logo" class="brand-icon">
                            <span class="brand-text">WOK</span>
                        </a>
                        <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                    </div>
                    



                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="{{asset('img/profile-photos/1.png')}}" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">{{Auth::user()->lname}} {{Auth::user()->fname}}</p>
                                            <span class="mnp-desc">{{ Auth::user()->rol }} </span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="{{route('perfil.index')}}" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> Perfil
                                        </a>
                                        <a href="{{asset('logout')}}" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Cerrar sesión
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                               <div id="mainnav-shortcut" class="hidden">
                                    <ul class="list-unstyled shortcut-wrap">
                                        <li class="col-xs-3" data-content="My Profile" data-original-title="" title="">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="demo-pli-male"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages" data-original-title="" title="">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="demo-pli-speech-bubble-3"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity" data-original-title="" title="">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="demo-pli-thunder"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen" data-original-title="" title="">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="demo-pli-lock-2"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!--================================-->
                                <!--End shortcut buttons-->

                                <ul id="mainnav-menu" class="list-group">
                        
                                    <!--Category name-->
                                    <li class="list-header">Navegación</li>
                        
                                    <!--Menu list item-->
                                    <li class="active-sub active">
                                        <a href="{{route('home')}}">
                                            <i class="demo-pli-home"></i>
                                            <span class="menu-title">Inicio</span>
                                        </a>
                                    </li>
                                    <!--Menu list item-->
                                    @if(Auth::user()->rol == "Admin")
                                        <li>
                                            <a href="#">
                                                <i class="demo-pli-split-vertical-2"></i>
                                                <span class="menu-title">FEL</span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse" aria-expanded="false">
                                                <li><a href="{{route('certificators.index')}}">Add Certificador</a></li>
                                                <li class="list-divider"></li>
                                                <li><a href="{{route('feltypes.index')}}">Add tipo de FEL</a></li>
                                                <li><a href="{{route('phrases.index')}}">Add frases</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-group"></i>
                                                <span class="menu-title">Franquicia & Usuarios</span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse" aria-expanded="false">
                                                <li><a href="{{route('typefranchise.index')}}">Add tipo franquicia</a></li>
                                                <li class="list-divider"></li>
                                                <li><a href="{{route('administrators.index')}}">Add administrador</a></li>
                                                <li><a href="{{route('owner.index')}}">Add propietario</a></li>
                                                <li><a href="{{route('typeEmployee.index')}}">Add tipo empleado </a></li>
                                            </ul>
                                        </li>

                                        <a href="{{route('bancos.index')}}">
                                            <i class="fa fa-bank"></i>
                                            <span class="menu-title">Add Banco</span>
                                        </a>
                                    @endif
                               
                                    @if(Auth::user()->rol == "Administrador" )
                                        <li>
                                            <a href="#">
                                                <i class="ion-ios-nutrition"></i>
                                                <span class="menu-title">Menú</span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse" aria-expanded="false">
                                                <li><a href="{{route('typeFoods.index')}}">Tipos de platillo</a></li>
                                                <li><a href="{{route('typePrice.index')}}">Tipos de precio</a></li>
                                                <li><a href="{{route('recetaMenu.index')}}">Items Menú</a></li>
                                            </ul>
                                        </li>
                                    @endif

                                    @if(Auth::user()->rol == "Propietario" || Auth::user()->rol == "Administrador" || Auth::user()->rol == "Contador")
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file-text"></i>
                                                <span class="menu-title">Reportes</span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse" aria-expanded="false">
                                                <li><a href="#">Ventas</a></li>
                                                @if(Auth::user()->rol != "Contador")
                                                    <li><a href="#">Clientes</a></li>
                                                    <li><a href="#">Ordenes</a></li>
                                                @endif
                                                @if(Auth::user()->rol == "Propietario")
                                                    <li><a href="#">Inventario</a></li>
                                                @endif
                                            </ul>
                                        </li>
                                    @endif

                                    @if(Auth::user()->rol == "Propietario" || Auth::user()->rol == "Contador")
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-print"></i>
                                                <span class="menu-title">FEL (Factura Electronica)</span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse" aria-expanded="false">
                                                <li><a href="#">Configurar FEL</a></li>
                                                <li><a href="#">FEL emitidas</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                    @if(Auth::user()->rol == "Propietario" || Auth::user()->rol == "Gerente")
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-cubes"></i>
                                                <span class="menu-title">Franquicia</span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse" aria-expanded="false">
                                                <li><a href="{{route('negocio.index')}}">Negocios</a></li>
                                                <li><a href="{{route('proveedor.index')}}">Proveedores</a></li>
                                                <li><a href="{{route('gestionEmpleado.index')}}">Empleados</a></li>
                                                <li><a href="{{route('pagos.index')}}">Pagos</a></li>
                                                <li><a href="{{route('tables.index')}}">Mesas</a></li>
                                                @if(Auth::user()->rol == "Propietario")
                                                    <li class="list-divider"></li>
                                                    <li><a href="{{route('contador.index')}}">Contador</a></li>
                                                @endif
                                            </ul>
                                        </li>
                                    @endif
                                    @if(Auth::user()->rol == "Gerente" || Auth::user()->rol == "Cajero")
                                        <a href="{{route('delivery.index')}}">
                                            <i class="fa fa-fax icon-3x"></i>
                                            <span class="menu-title">Delivery</span>
                                        </a>
                                        <a href="{{route('llevarPay.index')}}">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span class="menu-title">Para llevar</span>
                                        </a>
                                        <a href="{{route('pedidosLlevar.index')}}">
                                            <i class="fa fa-list-ul"></i>
                                            <span class="menu-title">Pedidos para llevar</span>
                                        </a>
                                        <a href="{{route('corteCaja.index')}}">
                                            <i class="fa fa-calculator"></i>
                                            <span class="menu-title">Corte Caja</span>
                                        </a>
                                        <a href="{{route('pedidoDelivery.index')}}">
                                            <i class="fa fa-motorcycle"></i>
                                            <span class="menu-title">Pedidos adomicilio</span>
                                        </a>
                                        <a href="{{route('clientes.index')}}">
                                            <i class="fa fa-group"></i>
                                            <span class="menu-title">Clientes</span>
                                        </a>
                                        
                                        <a href="{{route('viewOrder.index')}}">
                                            <i class="fa fa-navicon"></i>
                                            <span class="menu-title">Ordenes</span>
                                        </a>
                                    @endif
                                    @if(Auth::user()->rol == "Cocinero")
                                    @endif
                                    @if(Auth::user()->rol == "Mesero")
                                    @endif
                                    @if(Auth::user()->rol == "Cajero")
                                    @endif
                                    @if(Auth::user()->rol == "Delivery")
                                    @endif
                                </div>
                                <!--================================-->
                                <!--================================-->



                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>


<script>
/*
     * LetterAvatar
     *
     * Artur Heinze
     * Create Letter avatar based on Initials
     * based on https://gist.github.com/leecrossley/6027780
     */
    (function(w, d){


        function LetterAvatar (name, size) {

            name  = name || '';
            size  = size || 60;

            var colours = [
                    "#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50",
                    "#f1c40f", "#e67e22", "#e74c3c", "#ecf0f1", "#95a5a6", "#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d"
                ],

                nameSplit = String(name).toUpperCase().split(' '),
                initials, charIndex, colourIndex, canvas, context, dataURI;


            if (nameSplit.length == 1) {
                initials = nameSplit[0] ? nameSplit[0].charAt(0):'?';
            } else {
                initials = nameSplit[0].charAt(0) + nameSplit[1].charAt(0);
            }

            if (w.devicePixelRatio) {
                size = (size * w.devicePixelRatio);
            }

            charIndex     = (initials == '?' ? 72 : initials.charCodeAt(0)) - 64;
            colourIndex   = charIndex % 20;
            canvas        = d.createElement('canvas');
            canvas.width  = size;
            canvas.height = size;
            context       = canvas.getContext("2d");

            context.fillStyle = colours[colourIndex - 1];
            context.fillRect (0, 0, canvas.width, canvas.height);
            context.font = Math.round(canvas.width/2)+"px Arial";
            context.textAlign = "center";
            context.fillStyle = "#FFF";
            context.fillText(initials, size / 2, size / 1.5);

            dataURI = canvas.toDataURL();
            canvas  = null;

            return dataURI;
        }

        LetterAvatar.transform = function() {

            Array.prototype.forEach.call(d.querySelectorAll('img[avatar]'), function(img, name) {
                name = img.getAttribute('avatar');
                img.src = LetterAvatar(name, img.getAttribute('width'));
                img.removeAttribute('avatar');
                img.setAttribute('alt', name);
            });
        };


        // AMD support
        if (typeof define === 'function' && define.amd) {

            define(function () { return LetterAvatar; });

        // CommonJS and Node.js module support.
        } else if (typeof exports !== 'undefined') {

            // Support Node.js specific `module.exports` (which can be a function)
            if (typeof module != 'undefined' && module.exports) {
                exports = module.exports = LetterAvatar;
            }

            // But always support CommonJS module 1.1.1 spec (`exports` cannot be a function)
            exports.LetterAvatar = LetterAvatar;

        } else {

            window.LetterAvatar = LetterAvatar;

            d.addEventListener('DOMContentLoaded', function(event) {
                LetterAvatar.transform();
            });
        }

    })(window, document);


</script>
