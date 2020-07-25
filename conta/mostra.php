<?php

require_once 'Contaa1.php';


$contaa1 = new Contaa1();
$contaa1->setSaqu($_POST['saque']);
$contaa1->setDepo($_POST['depo']);
$contaa1->saque ();
$contaa1->deposito ();

