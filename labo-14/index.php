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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">
        .div_cuerpo {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <form name="form" id="form">
        <input type="hidden" name="op" id="op">

        <div class="container div_cuerpo" id="div_cuerpo1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h4>UNIVERSIDAD PERUANA SIMON BOLIVAR</h4>

                </div>
                <div class="alert alert-info">
                    <h4><strong>
                            <center> SISTEMA VIRTUAL DE EVALUACION EN LINEA</center>
                        </strong></h4>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3">
                            <center> <img src="./imagenes/seguridadloguin.png"></center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 error text-center">Acceso al Sistema
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <HR size="3px" color="#0000ff">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 soluc">
                            <center>
                                <button class="btn btn-success btn-xlarge" id="personalBtn">
                                    <center> <img src="./imagenes/personal.png" width="100px" height="100px"></center><br>
                                    Personal
                                </button>
                                <button class="btn btn-warning btn-xlarge" id="alumnoBtn">
                                    <center> <img src="./imagenes/alumno.png" width="100px" height="100px"></center><br>
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
    <script>
        $(document).ready(() => {
            $("#personalBtn").click(() => {
                $("#form").attr("action", "../../Controlador/PersonalControlador.php");
                $("#form").attr("method", "POST");
                $("#op").val("1");
                $("#form").submit();


            });
            $("#alumnoBtn").click(() => {
                $("#form").attr("action", "../../Controlador/EstudianteControlador.php");
                $("#form").attr("method", "POST");
                $("#op").val("1");
                $("#form").submit();

            })

        })
    </script>
</body>

</html>