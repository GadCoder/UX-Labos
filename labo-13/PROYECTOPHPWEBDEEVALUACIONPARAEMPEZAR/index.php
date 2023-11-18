<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SUNAT">
    <title>.:: Pagina de Mensajes ::.</title>    
    <link rel="stylesheet" href="./css/bootstrap.min_1.css">
    <script src="./jquery-ui/jquery.js"></script>   
    <script src="./js/bootstrap.min1.js" ></script>
   
    <style type="text/css">		    
          .div_cuerpo
          {
            margin-top: 15px;
           }
    </style>
    <script>
         function estudiante()
         {
                document.form.action="../../Controlador/EstudianteControlador.php";
                document.form.method="POST";
                document.form.op.value="1";
                document.form.submit();
             
         }    

         function personal()
         {
                document.form.action="../../Controlador/PersonalControlador.php";
                document.form.method="POST";
                document.form.op.value="1";
                document.form.submit();
             
         }   



    </script>
    
</head>

<body>
    <form  name="form">
        <input type="hidden" name="op">
        
	<div class="container div_cuerpo" id="div_cuerpo1">	
        <div class="panel panel-primary">
            <div class="panel-heading text-center" >
                <h4>UNIVERSIDAD PERUANA SIMON BOLIVAR</h4>
               
            </div>
            <div class="alert alert-info">
                                    <h4><strong><center> SISTEMA VIRTUAL DE EVALUACION EN  LINEA</center></strong></h4>                            
                        </div>
            <div class="panel-body">
			    <div class="row">
                                
			    	<div class="col-md-6 col-md-offset-3">
                                    <center>  <img  src="./imagenes/seguridadloguin.png"></center>
			    	</div>
			    </div>			
			    <div class="row">
			    	<div class="col-md-6 col-md-offset-3 error text-center">Acceso al Sistema
			    	</div>
				</div>
			    <div class="row">
			    	<div class="col-md-6 col-md-offset-3"><HR size="3px" color="#0000ff">
			    	</div>
				</div>			
			   
			    <div class="row">
			    	<div class="col-md-6 col-md-offset-3 soluc">
                                    <center> 
                                        <button    class="btn btn-success btn-xlarge"    onclick="personal()"   >
                                            <center>  <img  src="./imagenes/personal.png" width="100px" height="100px"></center><br>
                                            Personal
                                        </button> 
                                        <button    class="btn btn-warning btn-xlarge" onclick="estudiante()"  >
                                            <center>  <img  src="./imagenes/alumno.png" width="100px" height="100px"></center><br>
                                            Alumno
                                        </button> 
               
                                    </center>
                                    
                                    
			    	</div>
			    </div>			
			   
            </div>
            <div class="panel-footer text-center">
                Sistema Virtual Evaluacion en Linea - Derechos reservados &copy; 2015-2016
            </div>            
        </div>					
	</div>
    </form>
</body>
</html>

