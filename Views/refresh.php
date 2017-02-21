<?php  
	
	session_start();

	$idcom = new PDO("mysql:host=localhost;dbname=projetbdd","root","");
	
	/*Etapes de l'algo
			
		CAS INITIAL
		tester le nombre nouvel enregistrements existant 
		s'il n'en existe pas enregistrer l'idmax 
		et ne rien ramener 

		Sinon si idmax existe deja 
		demander le nombre de nouvel enregistrement a partir de l'idmax deja existant
		s'il ya de nouvo enregistrements
			compter leur nombre 
			effectuer un traitement sur tout les nouvo enregistrements
			et ramener le code sous forme de code html  
	*/

	/*variable de l'id maximal*/

	$nbenreg=0;

	$file = fopen("data/idMaxPrecedent.txt","w");
	$preced = fgets($file,1);
	

	$idmax;

	if (isset($_GET)) {


		$idmax = $_GET['idmax'];

		if ($idmax == $preced) {
			
			return "";
			/*
			$query="SELECT MAX(id_sp) FROM spot";
			
			$id = $idcom->query($query);

			$idmax= $id->fetchAll(PDO::FETCH_NUM);

			$idmax[0][0] = (int) $idmax[0][0];

			var_dump($idmax[0][0]);*/

		}else{

			/*requete nombre d'enregistrements */
			$req="SELECT COUNT(id_sp) FROM spot where id_sp > $idmax";

			/*requete initiale*/
			$result=$idcom->query($req);

			/*requete des infos des nouveaux enregistrements */
			$infos="SELECT * FROM spot where id_sp > $idmax";

			/**/
			$exec= $idcom->query($infos);			
			
			/*var_dump($idmax);exit();*/
			$enreg = $exec->fetchAll(PDO::FETCH_ASSOC);	
			
			/*var_dump($enreg); exit();*/
			
			/**/
			$nbenreg = count($enreg)-1;

			/*var_dump($nbenreg);exit();*/
			
			foreach ($enreg as $value) {
				
				echo "<tr>";
				echo "<td>".$value['lib_sp']."</td>";
				echo "<td>".$value['precis_sp']."</td>";
				echo "<td>".$value['date_sp']."</td>";
				
				if ($value['etat_sp'] == 1) {

					echo "<td><div class=\"radio\"><label><input type=\"radio\" name=".$value['id_sp']." value=\"1\" checked=\"checked\"></label></div></td>";
					echo "<td><div class=\"radio\"><label><input type=\"radio\" name=".$value['id_sp']." value=\"0\" ></label></div></td>";

				}else {

					echo "<td><div class=\"radio\"><label><input disabled type=\"radio\" name=".$value['id_sp']." value=\"0\" ></label></div></td>";
					echo "<td><div class=\"radio\"><label><input disabled type=\"radio\" name=".$$value['id_sp']." value=\"1\" checked=\"checked\"></label></div></td>";
				
				}
				echo "</tr>";
			}
			

			/*identifiant maximum */
			/*$idmax=$enreg[$nbenreg]['id_sp'];*/
			/*$js=json_encode($enreg);
			var_dump($js);*/
			
			fwrite($file,$idmax,1);
			
			fclose($file);
		}
		

		
	} 

?>