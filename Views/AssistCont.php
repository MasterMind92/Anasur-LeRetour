<?php
//obenir tout les fichers d'un repertoire 
/* foreach(glob("../Models/*.php") as $file){
  require $file;
  }

  foreach(glob("../Controller/*.php") as $file){

  require $file;
  } */
/*var_dump($_SESSION);
var_dump($_SESSION['agent']->getId_ag());
exit();*/

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

$manF = new Mgr_feuille();

$res = $manF->recup_fr($_SESSION['agent']->getId_ag());
/*var_dump($res);
 exit();*/

if (is_object($res)) {

    /*$res->setId_fr('8');*/

    $tableD = $manD->list_dep($res);

    /*var_dump($tableD);
     exit(); */   
}

// var_dump($res);
 // exit(); 


$tableP = $manP->recup_prestC($_SESSION['agent']->getId_ag());

$tabnv = $manD->list_nvdep();

/*var_dump($tabnv);*/

/*var_dump($tableP); 
exit();*/

/* var_dump($tableP);
  var_dump($tableD);
  exit();
 */

/* var_dump($tableZ);

  var_dump($tableC);
  var_dump($id);

  echo $tableC['lib_com']." ". $tableZ['lib_zone']." ";
  exit(); */

/* CHECKLIST 
 * 	
 * 	RECUPERER LES INFOS 
 * 	VERIFIER QUE LES REQUETES MARCHENT
 * 	AFFICHER LES INFOS 
 *
 *
 *
 *
 *
 *
 *
 *
 *
 */



/* var_dump($preced); exit(); */

/* $idmax[0][0]=(int) $idmax[0][0]; */
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assistant Controlleur</title>

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
                            <li role="presentation" >
                                <a href="#KnownSpots" aria-controls="KnownSpots" role="tab" data-toggle="tab"> Depot Connus</a>
                            </li>
                            <li role="presentation" >
                                <a href="#NewSpots" aria-controls="NewSpots" role="tab" data-toggle="tab">Nouveaux Depots</a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#ValidSpots" aria-controls="ValidSpots" role="tab" data-toggle="tab">Evaluation Depot-Presataire</a>
                            </li>
                        </ul>


                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade  " id="KnownSpots">

                                <form id="SpotFrm">

                                    <legend><h2 class="text-center">Verification des depots connus</h2></legend>


                                    <div class="row">
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <select  id="idcom" class="form-control" required="required">
                                                <option value="-1">Choisissez une commune </option>
                                                <option value="1">Abobo</option>
                                                <option value="2">Adjame</option>
                                                <option value="3">Anyama</option>
                                                <option value="4">Attecoube</option>
                                                <option value="5">Cocody</option>
                                                <option value="6">Koumassi</option>
                                                <option value="7">Marcory</option>
                                                <option value="8">Plateau</option>
                                                <option value="9">Treichville</option>
                                                <option value="10">Port-Bouet</option>
                                                <option value="11">Yopougon</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6  col-sm-6  col-md-6  col-lg-6" >
                                            <select name="prest" id="prest" class="form-control" required="required">
                                                <option value="-1">Choisissez le prestataire destinataire de la feuille </option>


                                            </select>
                                        </div>
                                    </div>

                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th><label for="">Libelle du depot</label></th>
                                                <th><label for="">Localisation</label></th>
                                                <th><label for="">Date et Heure de passage</label></th>
                                                <th><label for="">Rempli</label></th>
                                                <th><label for="">Vide</label></th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            for ($i = 0; $i < count($tableD); $i++) {

                                                $tableZ = $manZ->recup_zone($id);
                                                $tableC = $manC->recup_com($tableZ['id_com']);
                                                $com = $tableZ['id_com'];
                                                /* var_dump($tableZ); */
                                                /* $tableP= $manP->recup_prestC($com); */

                                                /* $id= $tableD[$i]->getId_zone();
                                                  $loc= $F->fcz($id); */

                                                echo "<tr>";
                                                echo "<td>" . $tableD[$i]->getLib_sp() . "</td>";
                                                echo "<td>" . $tableC['lib_com'] . " " . $tableZ['lib_zone'] . "</td>";
                                                echo "<td>" . $tableD[$i]->getDate_sp() . "</td>";
                                                /* echo "<td>".$tableD[$i]->date_sp."</td>"; */

                                                if ($tableD[$i]->getEtat() == 1) {
                                                    echo "<td><div class=\"radio\"><label><input type=\"radio\" name=" . $tableD[$i]->getId_sp() . " value=\"1\" checked=\"checked\"></label></div></td>";
                                                    echo "<td><div class=\"radio\"><label><input type=\"radio\" name=" . $tableD[$i]->getId_sp() . " value=\"0\" ></label></div></td>";
                                                } else {
                                                    echo "<td><div class=\"radio\"><label><input type=\"radio\" name=" . $tableD[$i]->getId_sp() . " value=\"1\" ></label></div></td>";
                                                    echo "<td><div class=\"radio\"><label><input type=\"radio\" name=" . $tableD[$i]->getId_sp() . " value=\"0\" checked=\"checked\"></label></div></td>";
                                                }

                                            }
                                            ?>


                                        </tbody>
                                    </table>

                                    <!-- BOUTON DE SOUMISSION  -->
                                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                                        <input type="submit" class="btn btn-primary btn-lg btn-block "/>
                                    </div>
                                </form>
                            </div>

                            <div role="tabpanel" class="tab-pane fade " id="NewSpots">

                                <form id="NSpotFrm" action="" method="POST"  class="form-horizontal" role="form">
                                    <legend> <h2 class="text-center">Renseignement de nouveaux Depot</h2> 	</legend>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                <input type="text" class="form-control" id="lib_sp"  name="lib_sp" placeholder="libelle Depot">
                                            </div>
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

                                                <select name="commune" id="commune" class="form-control" required="required">

                                                    <option value=-1>Commune</option>
                                                    <option  value=1>Abobo</option>
                                                    <option  value=2>Adjame</option>
                                                    <option  value=3>Anyama</option>
                                                    <option  value=4>Attecoube</option>
                                                    <option  value=5>Cocody</option>
                                                    <option  value=6>Koumassi</option>
                                                    <option  value=7>Marcory</option>
                                                    <option  value=8>Plateau</option>
                                                    <option  value=9>Treichville</option>
                                                    <option  value=10>Port-Bouet</option>
                                                    <option  value=11>Yopougon</option>		
                                                </select>

                                                                                        <!-- <input type="text" class="form-control" id="loc_sp"  name="loc_sp" placeholder="localisation"> -->
                                            </div>

                                            <!-- Zone en fonction de la commune  -->
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                <select title="quartier de l'incident" name="Zone" id="Zone" class="form-control" required="required">
                                                    <option value="-1">Choisissez la zone</option>
                                                </select>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                <input type="text" class="form-control" id="pre_sup"  name="pre_sup" placeholder="Precisions Supplementaires">
                                            </div>

                                            <!-- BOUTON DE SOUMISSION -->
                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                                <input type="submit" class="btn btn-primary btn-block"/>
                                            </div>

                                        </div>						
                                    </div>
                                </form>

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
                                        if (!empty($tableP[0])):

                                    ?> 
                                            
                                    <?php
                                    for ($i = 0;$i < count($tabnv);$i++):
                                        $tableZ = $manZ->recup_zone($id);
                                        $tableC = $manC->recup_com("".$tabnv[$i]->getId_zone()."");
                                        $com = $tableZ['id_com'];
                                    ?>  
                                    <tr>   
                                    <td> <?php echo $tabnv[$i]->getLib_sp() ; ?> </td>
                                    <td> <?php echo $com." ".$tableC['lib_zone'] ; ?> </td>
                                    <td> <?php echo$tabnv[$i]->getDate_sp(); ?> </td>
                                    <td> en cours </td>
                                    </tr>
                                    <?php
                                    endfor;
                                        
                                    else:
                                    ?> 
                                    <td colspan='4'><h2 class="text-center">Aucun Depot Disponible dans cette commune</h2>  </td>

                                    <?php  
                                    endif;
                                    ?>

                                                                   
                                    
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in active" id="ValidSpots">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nom prestataire</th>
                                            <th>Evaluation de la t&acirc;che</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    for ($i = 0; $i < count($tableP); $i++):
                                    ?>
                                    <tr>
                                        <td> <?php echo $tableP[$i]->getRs_prest(); ?></td>

                                        <td>				    						
                                            <a class="btn btn-primary"  data-note="Non-effectue" data-toggle="modal" href='#modal-id'>Noter</a>	
                                        </td>
                                    </tr>
                                    <?php
                                    endfor;
                                    ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>Quelle note voulez-vous donner au prestataire ? </p>
                            <div class="btn-group">
                                <button class="btn btn-danger"  data-note="Non-effectue" >Non-effectue</button>
                                <button class="btn btn-warning" data-note="Mal fait" >Mal fait</button>
                                <button class="btn btn-success" data-note="Acceptable" >Acceptable</button>
                                <button class="btn btn-info" >Propre</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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

                    var element = $("#Nouveaux tr:last").html();

                    /*console.log(element);*/

                    /************************************************************************
                     *          Recuperation des id des depots valides par l'assist.Cont
                     **************************************************************************/

                     $("#SpotFrm").submit(function (e) {
                         e.preventDefault();

                         var donnee=$(this).serialize();

                         console.log(donnee);
                         $.post("../Traitement/creationfr.php", {donnee:donnee} , function (data) {
                             alert(data);
                         })
                     });



                    $("#EvalFrm .btn").on('click', function (e) {
                        var Ev = {};

                        Ev.instruction = "evaluation";
                        Ev.lib = $(this).text();

                        $.post('IO.php', Ev, function (data) {
                            alert(data);
                        });
                    })

                    /************************************************************************
                     *			Recuperation des valeurs du formulaire des nouveaux depots
                     **************************************************************************/

                    $("#NSpotFrm ").on('submit', function (e) {

                        e.preventDefault();

                        var valeurs = {};

                        valeurs.lib_sp = $(this).find("#lib_sp").val();
                        valeurs.id_zone = $(this).find("#Zone").val();
                        
                        /*valeurs.preSup=$(this).find("#pre_sup").val();*/


                        var today = new Date();
                        var dd = today.getDate();
                        var MM = today.getMonth() + 1; //January is 0!
                        var yyyy = today.getFullYear();
                        var hh = today.getHours();
                        var mm = today.getMinutes();
                        var ss = today.getSeconds();

                        if (dd < 10) {
                            dd = '0' + dd;
                        }
                        if (MM < 10) {
                            MM = '0' + MM;
                        }

                        if (hh < 10) {
                            hh = '0' + hh;
                        }
                        if (mm < 10) {
                            mm = '0' + mm;
                        }

                        if (ss < 10) {
                            ss = '0' + ss;
                        }

                        valeurs.date_sp = yyyy + '-' + MM + '-' + dd + ' ' + hh + ':' + mm + ':' + ss;
                        valeurs.etat_sp = 1;


                        $.post("../Traitement/trait_depot.php", valeurs, function (data) {
                            alert(data);
                        });

                        console.log(valeurs);
                    });

                    /**********************************************************************
                     *	Partie relative a la gestion de la liste en fonction des communes
                     ***********************************************************************/


                    var CommuneN = $("#NSpotFrm").find("select[name='commune']");
                    var Prest = $("#SpotFrm").find("#idcom");

                   

                    Prest.change(function () {

                        var commune = $(this).val();

                        alert(commune);

                        //recuperation des prestataires
                        $.get("../Traitement/prest.php", {idcom: commune}, function (data) {

                            // $("#ZoneInt").children().appendTo(data);

                            alert(data);

                            console.log(data);

                           
                            if ($("#prest").has("option:eq(1)")) {

                                $("#prest > option:gt(0)").remove();
                            }

                            $(""+ data +"").insertAfter("#prest > option:eq(0)");
                        });

                    });


                    CommuneN.change(function () {

                        // alert($(this).find("option").length);

                        var commune = $(this).val();
                        
                        alert(commune);

                        $.get("../data/" + commune + ".html", function (data) {
                            // $("#ZoneInt").children().appendTo(data);
                            if ($("#Zone").has("option:eq(1)")) {

                                var compteur = $("#Zone").find('option').length;

                                $("#Zone > option:gt(0)").remove();

                            }

                            $("" + data + "").insertAfter("#Zone > option:eq(0)");

                        });
                    });


                    /************************************************************************
                     *			Recuperation des valeurs de chaque depot
                     *			Pour la creation de la feuille de route 
                     **************************************************************************/
                    $("#KnownSpots").on('submit', function (e) {

                        e.preventDefault();

                        var valeurs = {};

                        valeurs = $(this).find(":checked[type='radio']").get();

                        console.log(valeurs);
                    });

                    $('#modal-id').on('hidden.bs.modal', function (e) {
                        alert($(this).attr('data-note'));
                    });

                });



            </script>

    </body>
</html>
