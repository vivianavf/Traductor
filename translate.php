<html>
  <head>
  <link rel="stylesheet" href="styles.css">
    <title>PHP Test</title>
  </head>
  <body>
  <?php
  require_once ('vendor/autoload.php');
  use \Statickidz\GoogleTranslate;


echo $result;
  if( $_GET["palabra"] || $_GET["origen"] || $_GET["destino"]){
    $source = $_GET["origen"];
    $target = $_GET["destino"];
    $text = $_GET["palabra"];
    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);
    echo $result;
  }

  ?> 
  <br>
  <form action="formulario.php">
  <button type="submit">Volver</button>
  </form>
  </body>
</html>