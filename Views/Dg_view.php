<?php 
    require_once '../Traitement/stat.php';    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Interface du D.G</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <style>
            .total
            {
                background-color: rgb(248,148,8);
            }
            .total :hover
            {
                background-color: rgb(248,148,8);                
            }
        </style>
    </head>
    <body>
        <img src="../../Anasur/Views/image/BanniereAnasur.jpg" class="col-lg-12 img-responsive" alt="Image">
        <h1 class="text-center">Interface du D.G</h1>
        <div class="container">
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"class="active"><a href="#bord" aria-controls="bord" role="tab" data-toggle="tab">Tableau de bord</a></li>
                    <li role="presentation"><a href="#bordp" aria-controls="bordp" role="tab" data-toggle="tab">Tableau de bord (%)</a></li>
                    <li role="presentation"><a href="#camenber" aria-controls="camenber" role="tab" data-toggle="tab">Statistiques</a></li>
                </ul>
                <div class="tab-content">

                    <!--Partie assistant-->
                    <div role="tabpanel" class="tab-pane active" id="bord">
                        <h4 class="text-center">Tableau de bord</h4>
                        <table class="table table-hover" >
                            <thead>
                               <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Janvier</th>
                                    <th>Fevrier</th>
                                    <th>Mars</th>
                                    <th>Avril</th>
                                    <th>Mai</th>
                                    <th>Juin</th>
                                    <th>Juillet</th>
                                    <th>Aôut</th>
                                    <th>Septembre</th>
                                    <th>Octobre</th>
                                    <th>Novembre</th>
                                    <th>Decembre</th>
                </tr>
                            </thead>
                            <tbody>
                                <tr class="total">
                                    <td colspan="2">Nombre de Plaintes</td>
                                    <?php require_once '../Traitement/npl.php';?>
                                </tr>
                               <tr>
                                    <td></td>
                                    <td>Re&ccedil;ues</td>
                                    <?php require_once '../Traitement/nplr.php';?>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Traitées</td>
                                    <?php require_once '../Traitement/nplt.php';?>
                                </tr>
                                <tr class="total">
                                    <td colspan="2">Nombre de sites</td>
                                    <?php require_once '../Traitement/ndp.php';?>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Controlés</td>
                                    <?php require_once '../Traitement/ndpc.php';?>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Non controlés</td>
                                    <?php require_once '../Traitement/ndpnc.php';?>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Créés</td>
                                    <?php require_once '../Traitement/ndpcr.php';?>
                </tr>
                <tr class="total">
                                    <td colspan="2">Nombre de Prestataire</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Actifs</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Non actifs</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Evalués</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                               </tr>
                               <tr>
                                    <td></td>
                                    <td>Non evalués</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                            </tr>
                        </tbody>
                    </table>   
                </div>

                <div role="tabpanel" class="tab-pane fade in" id="bordp">
                    <h4 class="text-center">Tableau de bord en pourcentage</h4>
                    <table class="table table-hover" >
                            <thead>
                               <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Janvier</th>
                                    <th>Fevrier</th>
                                    <th>Mars</th>
                                    <th>Avril</th>
                                    <th>Mai</th>
                                    <th>Juin</th>
                                    <th>Juillet</th>
                                    <th>Aôut</th>
                                    <th>Septembre</th>
                                    <th>Octobre</th>
                                    <th>Novembre</th>
                                    <th>Decembre</th>
                </tr>
                            </thead>
                            <tbody>
                <tr class="total">
                                    <td colspan="2">Nombre de Plaintes</td>
                                    <?php require_once '../Traitement/ppl.php';?>
                </tr>
                               <tr>
                                    <td></td>
                                    <td>Re&ccedil;ues</td>
                                    <?php require_once '../Traitement/pplr.php';?>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Traitées</td>
                                    <?php require_once '../Traitement/pplt.php';?>
                </tr>
                <tr class="total">
                                    <td class="total" colspan="2">Nombre de sites</td>
                                    <?php require_once '../Traitement/pdp.php';?>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Controlés</td>
                                    <?php require_once '../Traitement/pdpc.php';?>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Non controlés</td>
                                    <?php require_once '../Traitement/pdpnc.php';?>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Créés</td>
                                    <?php require_once '../Traitement/pdpcr.php';?>
                </tr>
                <tr class="total">
                                    <td colspan="2">Nombre de Prestataire</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Actifs</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Non actifs</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                </tr>
                <tr>
                                    <td></td>
                                    <td>Evalués</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                               </tr>
                               <tr>
                                    <td></td>
                                    <td>Non evalués</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                            </tr>
                        </tbody>
                    </table>   
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="camenber">
                    <h4 class="text-center">Histogrammes</h4>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <img src="../Traitement/stplr.php" class="img-responsive" alt="Image">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <img src="../Traitement/stplt.php" class="img-responsive" alt="Image">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../Traitement/stdpcr.php" class="img-responsive" alt="Image">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <img src="../Traitement/stdpc.php" class="img-responsive" alt="Image">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <img src="../Traitement/stdpnc.php" class="img-responsive" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
    </body>
</html>
