<?php 
/**@package*/
/* @internal Esta es la version 2*/

/**
@author Daniel Garcia Lopez;
@version 1;
*/
$np = 65;

/**
* Pintara si el numero es primo
*SI el numero es primo pintara que es primo si no que no
*/
function pintar() {

if(primo(np)){

	echo "el numero es primo";

}

else {
	echo "el numero $np es compuesto";
}

}
/**
*Verifica si el numero es primo
* @return devuelve un booleano true si es primo falso si no 
* @param $num int $num numero primo que comprobaremos
*/
function primo($num) {

	if($num == 1 || $num==2 || $num == 3 || $num == 5 || $num == 7) {
		return true;
	}

	if($num>=8) {
	
		if($num%2==0 || $num%3==0 || $num%5==0) {
		return false;
		}
	}
if($num > = 8 {
		if($num%2>=1 || $num%3>=1 || $num%5>=1) {
		return true;
		}
}
}
?>
