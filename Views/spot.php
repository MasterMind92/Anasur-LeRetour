<?php 
	try {
		
		if ((isset($_POST['id'])) AND (isset($_POST['validation']))) {
			$id= (int) $_POST['id'];
			if ($_POST['validation']=="yes") {
				$idcom= new PDO("mysql:host=localhost;dbname=projetbdd","root","");
				$sql="UPDATE spot SET id_csp=1 Where id_sp=$id";
				$exe=$idcom->query($sql);
				
				if ($exe) {
					echo "nouveau dépot ajouté avec succès";
				}else{
					echo "Problème avec la base de données veuillez contactez un DBA";
				}
			}
		}
		

	} catch (Exception $e) {
		echo $e;
	}
?>