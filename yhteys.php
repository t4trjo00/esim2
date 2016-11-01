<?php
$palvelin="mysql:host=localhost; dbname=esim2";
try {
	$db=new PDO($palvelin, "phpuser","phppass");
	//echo "yhteys ok";
	
} 
catch (Exception $e) {
	echo "Tietokantaan ei saada yhteyttä, ota yhteys ylläpitoon";
	echo "voi himskatti ku ei toiminukkaan tämä";
}



?>