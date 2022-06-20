<?php
class MvcModelo{
  public static function redireccionMdl($urlMdl){
    if ($urlMdl == "registro"||
        $urlMdl == "inicio"||
        $urlMdl == "categorias"||
        $urlMdl == "archivos") {
      $pagina="Vistas/Paginas/".$urlMdl.".php";
    }else {
      $pagina="Vistas/Paginas/inicio.php";
    }
    return $pagina;
  }
}
 ?>
