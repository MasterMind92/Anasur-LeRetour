<?php 
	$idcom= new PDO("mysql:host=localhost;dbname=projetbdd","root","");
	//(isset($_POST['id'])) AND 
	if (isset($_POST['ac'])) {
		
		$ac=(int)$_POST['ac'];

		$sql="UPDATE spot SET validation=1,id_cont= WHERE id_reg=$ac AND validation=0 ";
		$exe=$idom->query($sql);

		if ($exe) {
			echo "feuille de route validée avec succès";
		}else{
			echo "Erreur de lors de la soumission";
		}
	}
?>