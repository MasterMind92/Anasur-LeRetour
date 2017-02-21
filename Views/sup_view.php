<?php 
    require_once '../Connexion/Connexion.php';
    $conx= new Connexion();
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
        <title>Superviseur</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">        
    </head>
    <body>
        <img src="../../Anasur/Views/image/BanniereAnasur.jpg" class="col-lg-12 img-responsive" alt="Image">
        <h1 class="text-center">Interface de supervision</h1>
        <div class="container">
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"class="active"><a href="#Assistant" aria-controls="Assistant Controlleur" role="tab" data-toggle="tab">Assistant Contr&ocirc;leur</a></li>
                    <li role="presentation"><a href="#Controlleur" aria-controls="Controlleur" role="tab" data-toggle="tab">Contr&ocirc;leur</a></li>
                    <li role="presentation"><a href="#Prestataire" aria-controls="Prestataire" role="tab" data-toggle="tab">Prestataire</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                 

                    <!--Partie assistant-->
                    <div role="tabpanel" class="tab-pane active" id="Assistant">
                        <h4 class="text-center">Liste des feuilles de ramassage</h4>
                        <?php
                            require_once '../Traitement/trait_acfr.php';
                        ?>
                    </div>
                    
                   <!--Partie controleur-->                    
                    <div role="tabpanel" class="tab-pane fade" id="Controlleur">
                        <h4 class="text-center">Liste des nouveaux depots</h4>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Localisation</th>
                                    <th>Accepter</th>
                                    <th>Refuser</th>
                                    <th>Validation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once '../Traitement/trait_afdp.php';
                                ?>    
                            </tbody>
                        </table>

                    </div>
                    
                    <!--Partie prestataire-->
                    <div role="tabpanel" class="tab-pane fade" id="Prestataire">
                        <h4 class="text-center">Liste des t&acirc;ches attribuées</h4>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Designation de la t&acirc;che</th>
                                    <th>Localisation</th>
                                    <th>Date d'apparition de la t&acirc;che</th>
                                    <th>Date de la fin de la t&acirc;che</th>
                                    <th>Etat</th>
                                    <th>Qualité du travail</th>
                                    <th>Nom du Prestataire</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //require_once '../Traitement/';
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/jquery.js"></script>

        <!-- Bootstrap JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/intcont.js"></script>
        
        <script type="text/javascript"></script>

    </body>
</html>
