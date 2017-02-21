<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Receptionniste</title>

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
					    <li role="presentation"  ><a href="#FrmPlainte" aria-controls="profile" role="tab" data-toggle="tab"> Enregistrement des Plaintes</a></li>

					    <li role="presentation" class="active"><a href="#FichePlainte" aria-controls="home" role="tab" data-toggle="tab">Gestionnaire de Plaintes re&ccedil;ues</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    
					    <div role="tabpanel" class="tab-pane fade in active" id="FichePlainte">

							<form action="" method="POST" role="form">

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
								
							</form>
						</div>
					
					    <div role="tabpanel" class="tab-pane fade" id="FrmPlainte">
					    		
							<form id="Plainte" class="form-horizontal">
								<fieldset>

								<!-- Form Name -->
								<legend> <h2 class="text-center">Formulaire d'enregistrement de plainte</h2> </legend>

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="nom_eco">Nom</label>  
								  <div class="col-md-5">
								  <input id="nom_eco" name="nom_eco" type="text" required placeholder="" class="form-control input-md">
								    
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="prenom_eco">Prenoms</label>  
								  <div class="col-md-5">
								  <input id="prenom_eco" name="prenom_eco" type="text" required placeholder="" class="form-control input-md">
								    
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="cont_eco">Contact</label>  
								  <div class="col-md-5">
								  <input id="cont_eco" name="cont_eco" type="text" required placeholder="" class="form-control input-md">
								    
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="email_eco">E-mail</label>  
								  <div class="col-md-5">
								  <input id="email_eco" name="email_eco" type="text" placeholder="" class="form-control input-md">
								    
								  </div>
								</div>

								<!-- Select Basic -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="commune">Commune</label>
								  <div class="col-md-5">
								    <select id="commune" name="commune" class="form-control">
								      <option value=-1>Choisissez une commune/ville</option>
										<option  value="1">Abobo</option>
										<option  value="2">Adjame</option>
										<option  value="3">Anyama</option>
										<option  value="4">Attecoube</option>
										<option  value="5">Cocody</option>
										<option  value="6">Koumassi</option>
										<option  value="7">Marcory</option>
										<option  value="8">Plateau</option>
										<option  value="9">Treichville</option>
										<option  value="10">Port-Bouet</option>
										<option  value="11">Yopougon</option>
								    </select>
								  </div>
								</div>

								<!-- Select Basic -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="zone">Zone</label>
								  <div class="col-md-5">
								    <select id="zone" name="zone" class="form-control">
								      <option value="-1">Choisissez une zone</option>
								    </select>
								  </div>
								</div>

								<!-- Select Basic -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="naturePlainte">Nature plainte</label>
								  <div class="col-md-5">
								    <select id="naturePlainte" name="naturePlainte" class="form-control">
								      <option value="-1">Choisissez la nature de la plainte</option>
								      <option value="3">Depot d'ordure</option>
								      <option value="1">Eaux usees</option>
								      <option value="2">autres nuisances</option>
								    </select>
								  </div>
								</div>

								<!-- Select Basic -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="CatPlainte">Categorie Plainte</label>
								  <div class="col-md-5">
								    <select id="CatPlainte" name="CatPlainte" class="form-control">
								      <option value="-1">Choisissez une categorie</option>
								    </select>
								  </div>
								</div>

								<!-- Textarea -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="desc_pl">Commentaire</label>
								  <div class="col-md-5">                     
								    <textarea class="form-control" rows="4" id="descr_pl" placeholder="Expliquez ce qui s'est passe" name="descr_pl"></textarea>
								  </div>
								</div>

								<!-- Button -->
								<div class="form-group">
								  <div class="col-md-5 col-md-offset-4">
								    <button id="Valider" name="Valider" class="btn btn-success btn-block">Valider</button>
								  </div>
								</div>

								</fieldset>
							</form>
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

				var Commune = $("#Plainte").find("select[name='commune']");
              

                Commune.change(function () {

                    // alert($(this).find("option").length);

                    var commune = $(this).val();
                    //alert(Zone);

                    $.get("../data/" + commune + ".html", function (data) {
                        // $("#ZoneInt").children().appendTo(data);
                        if ($("#zone").has("option:eq(1)")) {

                            var compteur = $("#zone").find('option').length;

                            $("#zone > option:gt(0)").remove();

                        }

                        $("" + data + "").insertAfter("#zone > option:eq(0)");

                    });
                });

                $("#Plainte").on("submit",function (e) {
                	
                	e.preventDefault();


                	$.post("../Traitement/trait_plainte.php",$(this).serialize(),function (data) {
                		alert(data);
                	});

                });

			});

		</script>
	</body>
</html>