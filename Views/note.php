<?php 
	try {
		
		if ((isset($_POST['id'])) AND (isset($_POST['del'])) AND (isset($_POST['propr'])) AND (isset($_POST['eval']))) {
			$id= (int) $_POST['id'];
			$idcom= new PDO("mysql:host=localhost;dbname=projetbdd","root","");
				$sql="UPDATE prestataire SET del_prest='".$_POST['del']."', propr_prest='".$_POST['propr']."' ev_prest='".$_POST['eval']."' Where id_spot=$i";
				$exe=$idcom->query($sql);
				$res=$exe->fetch();
				if ($res) {
					echo "notes attribuées avec succès";
				}else{
					echo "Problème avec la base de données veuillez contactez un DBA";
				}
		}
		

	} catch (Exception $e) {
		echo $e;
	}
?>