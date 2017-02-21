<?php  
	
	$idcom = new PDO("mysql:host=localhost;dbname=projetbdd","root","");


	if (isset($_POST)) {
		/*var_dump($_POST);exit();*/

		if ($_POST['instruction']=="nouveau") {

			$lib=$idcom->quote($_POST['lib']);
			$preSup=$idcom->quote($_POST['preSup']);
			$zone=(int) $_POST['zone'];
			$etat=$_POST['etat'];
			
			$insert = "INSERT INTO spot(lib_sp,visite,date_sp,precis_sp,etat_sp,validation,id_csp,id_zone,appli) VALUES($lib,0,NOW(),$preSup,$etat,0,2,$zone,2)";

			$ok=$idcom->exec($insert);
			
			if (!$ok) {

				$err= $idcom->errorInfo();
				
				echo $err[2];

			}else{
				echo "Ouais c bon ";
			}
		} elseif ($_POST['instruction']=="evaluation") {
			$eval=$idcom->quote($_POST['lib']);

			$query="INSERT INTO prestataire(ev_prest) VALUES($eval)";

			$exec=$idcom->exec($query);
			if (!$exec) {

				$err= $idcom->errorInfo();
				echo $err[2];
			}else{
				echo "prestataire evalue avec succes";
			}
		}

	} 

	
?>