<?php
/*Autor @pedro_drosa
*09/12/2018
*conta o numero de vogais presentes em um texto
*/
function contar_vogais($texto){
	$vogaisEncontradas = array();
	$vogais = array('a','A','e','E','i','I','o','O','u','U');
	$letras = str_split($texto);
	$totletras = count($letras);
	
	for ($i=0; $i < $totletras ; $i++) { 
		if (in_array($letras[$i],$vogais)) {
			$vogaisEncontradas[] = $letras[$i];
		}
	}//end for
		return count($vogaisEncontradas);
}//end function

function contar_consoantes($texto){
	$consoantesEncontradas =array();
	$vogais = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','x','y','z','w','B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','X','Y','Z','W');
	$texto = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $_POST['texto']) );
	$letras = str_split($texto);
	$totletras = count($letras);
	for ($i=0; $i < $totletras ; $i++) { 
		if (in_array($letras[$i],$vogais)) {
			$consoantesEncontradas[] = $letras[$i];
		}
	}//end for
		return count($consoantesEncontradas);
}//end function
