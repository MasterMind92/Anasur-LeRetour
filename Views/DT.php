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


		<title>Directeur Technique</title>

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
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
					<div>

					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					  	<li role="presentation" class="active" ><a href="#NewSpots" aria-controls="home" role="tab" data-toggle="tab">Validation Nouveaux depots</a></li>
					    <li role="presentation" ><a href="#ValidSpot" aria-controls="home" role="tab" data-toggle="tab">Nouveaux depots valides</a></li>
					    <li role="presentation"><a href="#F2Route" aria-controls="#F2Route" role="tab" data-toggle="tab">Feuilles de ramassage</a></li>
					    <li role="presentation"><a href="#Notes" aria-controls="profile" role="tab" data-toggle="tab">Notes Prestataires</a></li>
					    <li role="presentation"><a href="#G2Plaintes" aria-controls="" role="tab" data-toggle="tab">Gestion des plaintes </a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    
					    <div role="tabpanel" class="tab-pane fade in active" id="NewSpots">

										<!-- NOUVEAUX SPOTS RENSEIGNES  -->
                                <table id="Nouveaux" class="table table-striped table-hover">
                                    <caption> <h2 class="text-center">Nouveaux depots en attente de validation</h2> </caption>
                                    <thead>
                                        <tr>
                                            <th>libelle Depot</th>
                                            <th>Localisation</th>
                                            <th>Date et Heure</th>
                                            <th>Reponse Hierarchique</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    for ($i = 0;$i < count($tabnv);$i++):
                                    
                                    $tableZ = $manZ->recup_zone($id);
                                
                                    $tableC = $manC->recup_com($tableZ['id_com']);
                                    $com = $tableZ['id_com'];
                                    
                                    if ($tabnv[$i]->getVal_sp()==null): 
                                    ?>  
                                	 <form id="<?php echo $tabnv[$i]->getId_sp() ; ?>" method="">
                                    <tr>  
	                                    <td> <?php echo $tabnv[$i]->getLib_sp() ; ?> </td>
	                                    <td> <?php echo $tableC['lib_com'] . " " . $tableZ['lib_zone']; ?> </td>
	                                    <td> <?php echo$tabnv[$i]->getDate_sp(); ?> </td>
	                                    <td> en cours </td>
	                                    <td> <button type="submit" class="btn btn-primary">Valider</button> </td>
                                    	<input type="hidden" value="" />
                                    
                                    </tr>
                                    </form>

                                	
                                	<?php  
                                	
                                    endif;
                                    endfor;
                                    ?>                                
                                   
                                    </tbody>
                                </table>
						</div>
					
					    <div role="tabpanel" class="tab-pane fade" id="ValidSpot">
					    		
							<table class="table table-striped table-hover">

								<legend><h2 class="text-center">Nouveaux Depot Valid&eacute;s</h2> </legend>
								<thead>
									<tr>
                                        <th>libelle Depot</th>
                                        <th>Localisation</th>
                                        <th>Date et Heure</th>
                                    </tr>
								</thead>
								<tbody>
									<?php
                                    
                                    for ($i = 0;$i < count($tabnv);$i++):
                                    
                                    $tableZ = $manZ->recup_zone($id);
                                
                                    $tableC = $manC->recup_com($tableZ['id_com']);
                                    $com = $tableZ['id_com'];
                                    
                                    if ($tabnv[$i]->getVal_sp()=='2' ): 
                                    ?>  
                                	 <form id="<?php echo $tabnv[$i]->getId_sp() ; ?>" >
                                    <tr class="champ">  
	                                    <td> <?php echo $tabnv[$i]->getLib_sp() ; ?> </td>
	                                    <td> <?php echo $tableC['lib_com'] . " " . $tableZ['lib_zone']; ?> </td>
	                                    <td> <?php echo$tabnv[$i]->getDate_sp(); ?> </td>
	                                    	
                                    </tr>
                                    </form>

                                	<?php
	                                    endif;
	                                    endfor;
                                    ?>
								</tbody>
							</table>
					    </div>

					    <div role="tabpanel" class="tab-pane fade" id="F2Route" >
				    	
                            <h3 class="text-center">Feuilles de ramassage</h3>
                            <?php
                            require '../Traitement/trait_affichdt.php';
                            ?>
                        
					    </div>

					    <div role="tabpanel" class="tab-pane fade" id="Notes" >
					    	<table class="table table-hover">
					    		<thead>
					    			<tr>
					    				<th>Raison Sociale</th>
					    				<th>Duree effectuee par travaux</th>
					    				<th>Qualite du travail </th>
					    				<th>Evaluation de l'assistant controlleur</th>
					    				<th>Evaluation du travail du prestataires</th>
					    				
					    			</tr>
					    		</thead>
					    		<tbody>
					    			<tr>
					    				<td>ITA-LABO</td>
					    				<td>5 jours</td>
					    				<td>C</td>
					    				<td>5/8</td>
					    				<td>C</td>
					    			</tr>
					    			<tr>
					    				<td>DKS</td>
					    				<td>2 jours</td>
					    				<td>B</td>
					    				<td>8/10</td>
					    				<td>B</td>
					    			</tr>
					    			<tr>
					    				<td>BORED</td>
					    				<td>12 jours</td>
					    				<td>B</td>
					    				<td>2/2</td>
					    				<td>A</td>
					    			</tr>
					    		</tbody>
					    	</table>
					    </div>

					    <div role="tabpanel" class="tab-pane fade" id="G2Plaintes" >
					    	<legend><h2 class="text-center">Fiche de gestionnaire des plaintes </h2></legend>

								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th><label for="">Nom Plaignant</label></th>
											<th><label for="">Contact</label></th>
											<th><label for="">Commune</label></th>
											<th><label for="">Zone</label></th>
											<th><label for="">Nature de la plainte</label></th>
											<th><label for="">Prise en charge </label></th>
											<th><label for=""></label></th>
											
										</tr>
									</thead>
									<tbody>

										<!-- Infos du Spot -->
										
										<tr>
											<td>Bonjour</td>
											<td>Bonjour</td>
											<td>Bonjour</td>
											<td>Bonjour</td>
											<td>Charge</td>
											<td>
												<span class="label label-success">Oui</span>
											</td>
											
										</tr>

										

									</tbody>
								</table>

					    </div>


					  </div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<script type="text/javascript">

			$(function () {
				$('.SpotTab').click(function (e) {
				  e.preventDefault();
				  $(this).tab('show');
				});


				$("form ").submit(function (e) {
					e.preventDefault();

					var idSpot= $(this).attr('id');
					
					$.get("../Traitement/trait_validsp.php",{id_sp:idSpot},function  (data) {
						alert(data);
					});
				});
				

			});

		</script>
	</body>
</html>