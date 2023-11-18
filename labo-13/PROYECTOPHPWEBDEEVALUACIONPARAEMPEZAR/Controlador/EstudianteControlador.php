<?php
  $op=$_POST['op'];
  $pagina="";
  switch ($op)
  {   case 1:
      {
      $pagina="../Seguridad/Estudiante/FrmLoginEstudiante.php";
        break;
      }
  }
  header('Location:'.$pagina);
?>

