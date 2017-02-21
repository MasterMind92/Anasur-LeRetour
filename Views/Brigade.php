<?php 


?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Brigade</title>

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
			<h1 class="text-center">Interface de la Brigade</h1>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ordre de mission </a></li>
			    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Retour de Mission</a></li>
			    <!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
			    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> -->
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane fade in active" id="home">
			    	<table class="table table-striped table-hover">
			    		<thead>
			    			<tr>
			    				<th>Localisation</th>
			    				<th>Motif</th>
			    				<th>Travail a faire</th>
			    				<th>Niveau d'Alerte</th>
			    				<th>Statut</th>

			    			</tr>
			    		</thead>
			    		<tbody>
			    			<tr>
			    				<td>Adjame Liberte</td>
			    				<td>Etablissement en bordure de route, individus plus ou moins recalcitrants</td>
			    				<td>Deguerpir l'etablissement et maitriser les fauteurs de troubles </td>
			    				<td> <span class="label label-warning">Jaune</span>  </td>
			    				<td>En cours...</td>
			    			</tr>
			    		</tbody>
			    	</table>
			    </div>
			    <div role="tabpanel" class="tab-pane fade  " id="profile">
			    	<table class="table table-hover">
			    		<thead>
			    			<tr>
			    				<th>Lieu d'intervention</th>
			    				<th>Motif</th>
			    				<th>Action effectuee</th>
			    				<th>Description de l'intervention</th>
			    				<th>Recommandation</th>
			    			</tr>
			    		</thead>
			    		<tbody>
			    			<tr>
			    				<td></td>
			    				<td></td>
			    				<td></td>
			    				<td></td>
			    			</tr>
			    		</tbody>
			    	</table>
				</div>
			    <div role="tabpanel" class="tab-pane fade " id="messages">...</div>
			    <div role="tabpanel" class="tab-pane fade " id="settings">...</div>
			  </div>

			</div>
		</div>
		
		<!-- jQuery -->
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		
	</body>
</html>