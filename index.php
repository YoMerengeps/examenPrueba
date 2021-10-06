<?php

require_once 'persona.php';

$persona1 = new persona;
$persona1->nombre = 'Marlon';
$persona1->peso = 60;
$persona1->altura = 1.72;
$persona1->calcularIMC();
