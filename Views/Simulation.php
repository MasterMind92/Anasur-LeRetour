<?php  
	
	$idcom = new PDO("mysql:host=localhost;dbname=projetbdd","root","");

	if (isset($_GET['ok']) ) {
		
		$reponse = $idcom->exec("INSERT INTO spot(lib_sp,precis_sp,etat_sp,date_sp) VALUES ('Insertion Simulee','A ITA-Marcory', 1, NOW())");
	}

?> 