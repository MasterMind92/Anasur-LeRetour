<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion </title>

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

    <div class="navbar">
        <a class="navbar-brand" href="#">logo ITA</a>
        <!-- <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Link</a>
            </li>
        </ul> -->
        <!-- FORMULAIRE DE CONNEXION  -->
        <form id="Conx" method="POST" action="Interface.php" class="navbar-form pull-right">
            <input type="text" class="form-control" required  name="pseudo" placeholder="Entrez votre pseudo" style="width: 200px;">
            <input type="password" class="form-control" required name="mdp" placeholder="Entrez votre mot de passe" style="width: 200px;">
            <button type="submit" class="btn btn-info">Connexion</button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                
            </div>

            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <!-- FORMULAIRE D'INSCRIPTION  -->
                <form id="Inscription" class="form-horizontal" action="" method="POST" role="form">
                    <legend> <h2 class="text-center">Inscription</h2>  </legend>
                
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <label for="">label :</label>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" class="form-control" id="" name="" placeholder="Input field">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <label for="">label :</label>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" class="form-control" id="" name="" placeholder="Input field">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <label for="">label :</label>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" class="form-control" id="" name="" placeholder="Input field">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <label for="">label :</label>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" class="form-control" id="" name="" placeholder="Input field">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <label for="">label :</label>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" class="form-control" id="" name="" placeholder="Input field">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <label for="">label :</label>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" class="form-control" id="" name="" placeholder="Input field">
                            </div>
                        </div>
                    </div>
                
                    <button type="submit" class="btn btn-info btn-block">Valider</button>
                </form>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
        <h4 class="text-center">
            &copy;ITA S.A. tous droits reserves          
        </h4>
    </nav>


    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script type="text/javascript">
        $(function () {

            /*FONCTION D'ENVOI DES DONNEES A LA PAGE DE TRAITEMENT*/
            
            $("#Conx").submit(function (e) {
                
                /*e.preventDefault();*/

                $.post("../Traitement/authentification.php",$(this).serialize(),function (data) {
                    alert(data);
                });

            });
        });
    </script>

 </body>
</html>