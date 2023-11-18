<html>
    <head> 
        <title>VENTANA  PRINCIPAL DEL  SISTEMA VIRTUAL DE  EVALUACION EN LINEA DE LA  UNIVERSIDAD PERUANA SIMON BOLIVAR</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="../../css/jquery.ui.base.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/jquery.ui.all.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/jquery.ui.theme.css" rel="stylesheet" type="text/css"/>          
        <link href="../../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">    
        <script src="../../js/jquery.js"></script>
        <script src="../../jquery/jquery.alerts.js" type="text/javascript"></script>
        <script src="../../js/javascript.js"></script>     
        <script src="../../jquery-ui/jquery.js"></script>
        <script src="../../jquery-ui.js"></script>
        <script src="../../js/jquery.dataTables.min1.js"></script>
         <script src="../../js/dataTables.bootstrap.min1.js"></script>
         <script src="../../js/dataTables.responsive.min1.js"></script>
         <script src="../../js/responsive.bootstrap.min1.js"></script>    
         <link rel="stylesheet" href="../../css/bootstrap.min_1.css">
        <script src="../../js/bootstrap.min1.js" ></script>        
         <link href="../../css/style1.css" rel='stylesheet' type='text/css' />
         <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css" />
         <link rel="stylesheet" type="text/css" href="../../css/responsive.bootstrap.min.css">
      
         <script type="text/javascript">
                jQuery(function ($) {
                    $('#carousel1').carousel({
                        interval: 10000
                    });

                    var clickEvent = false;

                    $('#carousel1').on('click', '.nav a', function () {
                        clickEvent = true;
                        $('.nav li').removeClass('active');
                        $(this).parent().addClass('active');
                    }).on('slid.bs.carousel', function (e) {
                        if (!clickEvent) {
                            var count = $('.nav').children().length - 1;
                            var current = $('.nav li.active');
                            current.removeClass('active').next().addClass('active');
                            var id = parseInt(current.data('slide-to'));
                            if (count == id) {
                                $('.nav li').first().addClass('active');
                            }
                        }
                        clickEvent = false;
                    });
                });
            </script>
        
          <style>
                body {
                    padding-top: 20px;
                }
                #carousel1 .nav a small {
                    display: block;
                }
                #carousel1 .nav {
                    background: #eee;
                }
                .nav-justified > li > a {
                    border-radius: 0px;
                }
                .nav-pills > li[data-slide-to="0"].active a {
                    background-color: #b4d9a7;
                }
                .nav-pills > li[data-slide-to="1"].active a {
                    background-color: #4f77cb;
                }
                .nav-pills > li[data-slide-to="2"].active a {
                    background-color: #d11e4f;
                }
                </style>

    </head>
<body>
  <form    name="form">
  <input type="hidden"  name="op">    
        
   <div class="wrapper">

            <div id="contenedor"      style="visibility: visible;display:block;">
                <div class="header">
                    <div class="container header_top">
                        <div >
                             <img src="../../imagenes/encabezado.jpg" width="100%" /></td>         
                        </div>   
                         <nav class="navbar navbar-default" role="navigation">
       
    <div class="navbar-header">       
       
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
         
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
   
  </div>  
    
  <div class="collapse navbar-collapse navbar-ex1-collapse">     
    <ul class="nav navbar-nav">      
      <li class="dropdown">
        <a href="" >
        <img src="../../imagenes/main.png"     alt="Ir Principal">   Principal</b>
        </a>        
      </li>
    </ul>   
       <ul class="nav navbar-nav">      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="../../imagenes/mantenimiento.png"     alt="Ir Mantenimiento">  Mantenimientos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">        
                                <li><a href="">Semestre</a></li>
                                <li><a href="">Carrera Profesional</a></li>
                                <li><a href="">Alumno</a></li>
                                <li><a href="">Docente</a></li>
                                <li><a href="">Materia</a></li>
                                <li><a href="">Unidad Tematica</a></li>
                                <li><a href="">Tema</a></li>
                                <li><a href="">Tipo Examen</a></li>
                                <li><a href="">Rol</a></li>                                
                                <li><a href="">Nivel Dificultad</a></li>                                   
        </ul>
      </li>
      
    </ul> 
        <ul class="nav navbar-nav">   
      <li class="divider-vertical"></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <img src="../../imagenes/banco.png"     alt="Banco preguntas">Banco Preguntas<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">                    
                    <li><a href="">Registrar Pregunta Examen Supervisado</a></li>
                     <li class="divider"></li>
                    <li><a href="">Registrar Pregunta Examen Training</a></li>                  
                  </ul>
        </li>
      
    </ul>
      
     <ul class="nav navbar-nav">   
      <li class="divider-vertical"></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../../imagenes/organizacion.png"   width=18px" height="18px"  alt="Banco preguntas"></i>Organizacion<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">                    
                    <li><a href="">Registrar Estructura Examen </a></li>  
                               
                                <li><a href="">Programar Horario Examen</a></li>
                                 <li><a href="">Programar Materia x Semestre</a></li>
                                 <li><a href="">Asignar Docente x Materia x Semestre</a></li>    
                                <li><a href="">Generar Examen</a></li>
                                <li><a href="">Ver Resultados de Examen</a></li>
                  </ul>
        </li>
      
    </ul>   
      <ul class="nav navbar-nav">   
      <li class="divider-vertical"></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <img src="../../imagenes/banco.png"     alt="Banco preguntas">Aplicacion Examen<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">                    
                    <li><a href="">Realizar Calificacion Examen </a></li>
                     <li class="divider"></li>
                    <li><a href="">Resultados Examen </a></li>                  
                  </ul>
        </li>
      
    </ul>  
    <ul class="nav navbar-nav">   
      <li class="divider-vertical"></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <img src="../../imagenes/candado1.png"     alt="Configuracion">Seguridad<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">                    
            <li><a href=""><img src="../../imagenes/gestionarusuarios.png"  width="35px" height="35px"   alt="Gestionar Usuario y Privilegios">Gestionar Usuario<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y Privilegios</a></li>
                  
                  </ul>
        </li>      
      
    </ul> 
      <ul class="nav navbar-nav navbar-right">   
      <li class="divider-vertical"></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <img src="../../imagenes/configuracion.png"     alt="Configuracion"> Configuracion<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">                 
            <li><a href=""><img src="../../imagenes/actualizar.png"     alt="Configuracion"> Actualizar Informacion</a></li>
            <li class="divider"></li>
            <li><a href=""><img src="../../imagenes/llaves.png"     alt="Configuracion"> Cambiar Contraseña</a></li>
           <li class="divider"></li>
           <li><a href=""><img src="../../imagenes/exit.png"     alt="Salir"> Salir</a></li>      
                
        </ul>
        </li>      
    </ul>  
  </div>
    
</nav>
      </div>
                </div> 
           
           <div class="container banner"  style="overflow: scroll ">
	 	<div class="row">                    
	 		    
                         <div style="width:100%;height: 100%;text-align: center;">

                           <div  id="contenido" style="background:white;"  >
                                                  
                            <div id="carousel1" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                         <img alt="Bootstrap template"   width="100%" height="100%"  src="../../imagenes/principal2.png">   
                                        <div class="carousel-caption">                                            
                                        </div>
                                    </div>
                                    <div class="item">
                                         <img alt="Bootstrap template"    width="100%" height="100%" src="../../imagenes/principal3.png">  
                                        <div class="carousel-caption">
                                            <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
                                                <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
                                                <a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
                                                <a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
                                                <a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="Bootstrap template"    width="100%" height="100%" src="../../imagenes/principal1.png">                                      
                                    </div>
                                </div>
                                
                            </div>
                         </div> 
                            
                          <div  id="contenidoalternativo" style="background:white;display:none;width:100%;height:100%;float:left;" >
                           <div id="carousel1" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                         <img alt="Bootstrap template"   width="100%" height="100%"  src="../../imagenes/principal2.png">   
                                        <div class="carousel-caption">                                            
                                        </div>
                                    </div>
                                    <div class="item">
                                         <img alt="Bootstrap template"    width="100%" height="100%" src="../../imagenes/principal3.png">  
                                        <div class="carousel-caption">
                                            <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
                                                <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
                                                <a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
                                                <a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
                                                <a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="Bootstrap template"    width="100%" height="100%" src="../../imagenes/principal1.png">                                      
                                    </div>
                                </div>
                                
                            </div>
                          </div>  
                      </div>         
                
	          </div> 
       </div>
      </div>
         <div class="container footer">    
         
     	<div class="footer_bottom">
           
     	  <div class="copy">
		    <p>Derechos  Reservados  por Ing.Ivan Petrlik </p>
		  </div>
		  <ul class="social">
			<li><a href=""> <i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
		  </ul>
		  <div class="clearfix"> </div>
     	</div>
     </div>           
   </div>              
</div> 
</form>
</body>
</html>

