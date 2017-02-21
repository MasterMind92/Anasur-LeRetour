<?php

$conx = new Connexion();

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
        <title>Interface du contrôleur</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <img src="../../Anasur/Views/image/BanniereAnasur.jpg" class="col-lg-12 img-responsive" alt="Image">
        <h1 class="text-center">Interface du contrôleur</h1>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div>
                        <!-- Nav tabs -->
                         <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Feuille de ramassage</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Depots &agrave; valider</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Suivi Evaluation Travaux Prestataire</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active in" id="home">
                                <h3 class="text-center">Feuilles de ramassage</h3>
                                <?php
                                require_once '../Traitement/trait_affichfr.php';
                                ?>
                            </div>
                            
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <table class="table table-striped table-hover">
		<thead>
                                            <tr>
                                                <th>Identifiant</th>
                                                    <th>Location</th>
                                                    <th>accepté</th>
                                                    <th>refusé</th>
                                                    <th>Validation</th>
                                            </tr>
		</thead>
                                      <tbody>
                                          <?php require_once '../Traitement/trait_valdp.php';?>
                                      </tbody>
                                </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <h3 class='text-center'>Evaluation Travaux Prestataire par Zone</h3>
                                <table class="table table-hover">
                                    <thead>
		<tr>
                                        <th>Raison Sociale</th>
                                        <th>Delais de ramassage</th>
                                        <th>Qualité du travail</th>
                                        <th>Evaluation de l'ass. Cont.</th>
                                        <th>Evaluation du travail du prestataire</th>
		</tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            require_once '../Traitement/trait_suip.php';
                                        ?>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
		
        <!-- Bootstrap JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/intcont.js"></script>
        
    </body>
</html>
