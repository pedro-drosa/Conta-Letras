<?php
include "functions.php";
$resultado ='';
$vogais = 0;
$consoantes = 0;
if (isset($_POST['enviar'])) {
	$texto = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $_POST['texto']) );
	$vogais = contar_vogais($texto);
	$consoantes = contar_consoantes($texto);
}
include "template.php";
