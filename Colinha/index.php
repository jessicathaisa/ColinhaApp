<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Colinha</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
        <meta name="description" content="Blueprint: Slide and Push Menus" />
        <meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>

        <script src="http://assets.codepen.io/assets/libs/fullpage/jquery-ab8e840c3dad7ccf2deadb8c40d53bdb.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="dist/css/bootstrap-theme.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="dist/js/bootstrap.min.js"></script>

        <script>
            $(function () {
                $(".menu").click(function () {
                    $(".menu").toggleClass("open");
                });
            });

        </script>
    </head>
    <body class="cbp-spmenu-push">
        <?php
        include("include/header.php");
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="image/Telefone.png" width="100%"/>

                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1  class="text-muted"><strong>Na Correria?</strong></h1>
                            <h2 class="text-muted">Precisa de uns testes rápidos antes da prova?<br>
                                Jogue agora e aprenda brincando!</h2>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4 text-center">
                            <img src="image/AndroidBreve.png" width="94%"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4 text-center">
                            <a href="login/login.php"><img src="image/JogarAgora.png" width="90%"/></a>
                        </div>                            
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <center>
                                <img src="image/Moeda.png" width="50%"/>
                                <img src="image/ExpMoedas.png" width="70%"/>
                            </center>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img src="image/Ranking.png" width=50%"/>
                                <img src="image/ExpRanking.png" width="70%"/>
                            </center>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img src="image/Favoritar.png" width="50%"/>
                                <img src="image/ExpCola.png" width="70%"/>
                            </center>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </body>
</html>
