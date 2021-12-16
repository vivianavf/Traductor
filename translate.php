<html>
  <head>
  <link rel="stylesheet" href="styles.css">
    <title>PHP Test</title>
  </head>
  <body>
  <?php
  if( $_GET["palabra"] || $_GET["origen"] || $_GET["destino"]){
    translate($_GET["origen"],$_GET["destino"],$_GET["palabra"]);
  }
    function translate($origen, $destino, $palabras){   $español = 'es';
      $ingles = 'en';
      $portuges = 'pt';
      $italiano = 'it';
      $array = array('español', 'inglés', 'portugués', 'italiano');
      $traduccion = "xd";
      $indice = 0;
      $indice2 = 0;
      $mflag = false;
      $mensaje = "msj temporal";
      if(($fp=fopen("diccionario.csv", "r"))!==FALSE){
        while (($datos = fgetcsv($fp))!==FALSE){
          $numero = count($datos);
          for($i=0; $i<$numero; $i++){
            if($datos[$i]==$origen){
            $indice = $i;
          }
          if($datos[$i]==$destino){
            $indice2 = $i; 
          }
          }
          if($datos[$indice]==$palabras){
            $traduccion = $datos[$indice2];
            $mflag=true;
          }
          }
        fclose($fp);
      }

      if($mflag){
        $mensaje=$traduccion;
      }else{
        $mensaje = "No coincide el idioma con la palabra";
      }
      echo $mensaje;
      return $mensaje;      
    }
  ?> 
  <br>
  <form action="formulario.php">
  <button type="submit">Volver</button>
  </form>

  </body>
</html>