<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_texto = $_POST["texto"];
    $_censura = $_POST["censura"];


   $_alfa = range('a','z') + range('A','Z');
   $_texto_censurado = str_replace($_alfa, $_censura, $_texto);

    if (empty($_texto) || empty($_censura)) {
       echo ("Por favor, insira os valores corretamente.");
          } else {
              echo $_texto_censurado;
   }
  }
?>

