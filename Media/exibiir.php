<?php
require_once 'Notas.php';
$Media = new Media();
$Media->setNota1($_POST['nota1']);
$Media->setNota2 ($_POST['nota2']);
$Media->setNota3 ($_POST['nota3']);
$Media->setNota4 ($_POST['nota4']);
$Media->exibir ();
$Media->Media ();