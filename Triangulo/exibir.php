<?php
require_once 'Triangulo.php';
$Triangulo = new Triangulo();
$Triangulo->setBase($_POST['base']);
$Triangulo->setAltura ($_POST['altura']);
$Triangulo->area ();
$Triangulo->exibir ();


