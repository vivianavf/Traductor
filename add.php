<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
  if( $_GET["español"] || $_GET["ingles"] || $_GET["portugues"] || $GET["italiano"]){
    add($_GET["español"],$_GET["ingles"],$_GET["portugues"], $_GET["italiano"]);
  }

  function add($español, $ingles, $portugues, $italiano){
    $eflag = validar("diccionario.csv", $español); 
    if($eflag){
      echo '<p> Su palabra ya existe en la base de datos </p> <br>';
    }else{
      $array = array($español, $ingles, $portugues,$italiano);
      write("diccionario.csv", $array);
      echo '<p> Su palabra ha sido agregada con exito</p> <br>';      
    }  
    echo 'Diccionario Actualizado <br>';
    mostrar("diccionario.csv");
    return 0;
  }

  function validar($nombre, $español){
    $eflag = false;
    if(($fp=fopen($nombre, "r"))!==FALSE){
        while (($datos = fgetcsv($fp))!==FALSE){
          $numero = count($datos);
          for($i=0; $i<$numero; $i++){
            if($datos[$i]==$español){
              $eflag = true;              
            }
          }
          }
        fclose($fp);
      }
    return $eflag;
  }

  function write($ruta_csv, $array){
    $outputBuffer = fopen($ruta_csv, 'a');
    //fwrite($outputBuffer, "\n");
    fputcsv($outputBuffer, $array);   
    fclose($outputBuffer);
    return 0;
  }

  function mostrar($ruta_csv){
    if(($fp=fopen($ruta_csv, "r"))!==FALSE){
        while (($datos = fgetcsv($fp))!==FALSE){
          $numero = count($datos);
          for($i=0; $i<$numero; $i++){
            echo $datos[$i]."<br>";   
            }
          }
    }
    fclose($fp);
  }    
  ?> 
  
  <br>
  <form action="formulario.php">
  <button type="submit">Volver</button>
  </form> 
  
  </body>
</html>
