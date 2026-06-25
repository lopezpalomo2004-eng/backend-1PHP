<?php

require_once "../clases/persona.php";
require_once "../clases/animal.php";

$andres = new persona();
$andres->saludar();
echo "<br>";
$andres->presentarse();

echo "<br>";

$miPerro = new perro();
$miPerro->ladrar();
$miPerro->correr();



?>