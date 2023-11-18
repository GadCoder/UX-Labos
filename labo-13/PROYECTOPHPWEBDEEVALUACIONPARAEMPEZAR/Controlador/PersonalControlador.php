<?php
   $op=$_POST['op'];
   $pagina="";
   switch ($op)
   {  case 1: {   
           $pagina="../Seguridad/Personal/FrmLoginPersonal.php";
       break; }
       case 2: {          
           $pagina="../Seguridad/Personal/FrmPrincipalPersonal.php";
           break;}
   }
   header("Location:".$pagina);
?>

