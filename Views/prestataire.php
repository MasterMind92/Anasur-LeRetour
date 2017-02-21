<?php 

require_once '../Connexion/Connexion.php';
$conx = new Connexion();
require '../Controller/Mgr_depot.php';
require '../Controller/Mgr_agent.php';
require '../Controller/Mgr_feuille.php';
require '../Controller/Mgr_prest.php';
require '../Controller/Mgr_commune.php';
require '../Controller/Mgr_zone.php';



$conx = new Connexion();

$manD = new Mgr_depot($conx);
$manP = new Mgr_prest($conx);
$manZ = new Mgr_zone($conx);
$manC = new Mgr_commune($conx);


$tableD = array();
$tableZ = array();
$tableC = array();
$tableP = array();

//var_dump($tableD);

$log = 'PDG_DKS';
$mdp = "12345678";

$id = '8';
$manF = new Mgr_feuille();

$res = $manF->recup_fr($id);

$tableP = $manP->recup_prestC('2');

$tabnv = $manD->list_nvdep();
// var_dump($tabnv);
// exit();


?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Prestataire</title>

		<!-- Bootstrap CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Interface des Prestataires</h1>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Taches </a></li>
			    <!--  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> </a></li> -->
			    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Listes des taches effectuees</a></li>
			    <!--<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> -->
			  </ul>


			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane fade in active" id="home">
			    	<?php
                    require '../Traitement/trait_affichfr.php';
                    ?>
			    	
			    </div>

			    <div role="tabpanel" class="tab-pane fade  " id="profile">
		    		<table class="table table-striped table-hover">
		    			<thead>
		    				<tr>
		    					<th>Nom</th>
		    					<th>Prenoms</th>
		    					<th>Contact</th>
		    					<th>E-mail </th>
		    					<th>Disponibilite</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				<tr>
		    					<td>Madi</td>
		    					<td>Josue </td>
		    					<td>Madijosue@gmail.com </td>
		    					<td>47 00 84 84 </td>
		    					<td> <span class="label label-danger">INDISPONIBLE</span></td>
		    				</tr>
		    				<tr>
		    					<td>Kadjo</td>
		    					<td>Priscille </td>
		    					<td>Priscille225@gmail.com </td>
		    					<td>47 01 84 54 </td>
		    					<td> <span class="label label-success">DISPONIBLE</span></td>
		    				</tr>
		    			</tbody>
		    		</table>
				</div>

			    <div role="tabpanel" class="tab-pane fade " id="messages">
			    	<table class="table table-striped table-hover">
			    		<thead>
			    			<tr>
			    				<th>Expediteur</th>
			    				<th>Contenu du message</th>
			    				<th>Localisation</th>
			    				<th>Action &agrave; mener </th>
			    				<th>Statut</th>
			    			</tr>
			    		</thead>
			    		<tbody>
			    			<tr>
			    				<td>Anasur</td>
			    				<td> un depot sauvage d'ordure menag&egrave;re a ete signale </td>
			    				<td>Koumassi, vers le marche </td>
			    				<td> Degager le depot </td>
			    				<td> <span class="label label-success">EFFECTU&Eacute;</span> </td>
			    			</tr>
			    		</tbody>
			    	</table>
			    </div>
			    <div role="tabpanel" class="tab-pane fade " id="settings">...</div>
			  </div>
			</div>
		</div>
		
		<!-- jQuery -->
                <script src="../js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
                <script src="../js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(function () {
				/*$('[data‐toggle=\'tooltip\']').click(function () {
					$(this).popover('toggle').on("show");
				});*/
				
			});
		</script>
	</body>
</html>