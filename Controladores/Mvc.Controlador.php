<?php
class MvcControlador{
  #----------------------------------------
  /* Llamado a la plantilla */
  #----------------------------------------
  public function llamadoPlantilla(){
    require_once("Vistas/Plantilla.php");
  }

  #----------------------------------------
  /* Llamado a la plantilla */
  #----------------------------------------
  public function redireccionCtr(){
    if (isset($_GET["action"])) {
      $urlCtr=$_GET["action"];
    }else {
      $urlCtr="index";
    }
    $respuesta=MvcModelo::redireccionMdl($urlCtr);
    #var_dump($respuesta);
    include $respuesta;
  }


}
 ?>
