<html>
  <head>
  <link rel="stylesheet" href="styles.css">
    <title>PHP Test</title>
  </head>
  <body>
  <?php
  require_once ('vendor/autoload.php');
  use \Statickidz\GoogleTranslate;

  if($_GET["palabra"]){
    $source = $_GET["origen"];
    $target = $_GET["destino"];
    $text = $_GET["palabra"];
    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);
    echo $result;
  }else{
    echo "Escriba una palabra";
  }

  ?> 
  <br>
  <form action="formulario.php">
  <button type="submit">Volver</button>
  </form>
  </body>
</html>