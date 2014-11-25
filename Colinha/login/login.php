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
        <link rel="shortcut icon" href="../image/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/default.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <script src="../js/modernizr.custom.js"></script>

        <script src="http://assets.codepen.io/assets/libs/fullpage/jquery-ab8e840c3dad7ccf2deadb8c40d53bdb.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../dist/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="../dist/css/bootstrap-theme.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="../dist/js/bootstrap.min.js"></script>

        <script>
            $(function () {
                $(".menu").click(function () {
                    $(".menu").toggleClass("open");
                });
            });

        </script>


        <script>
            // This is called with the results from from FB.getLoginStatus().
            function statusChangeCallback(response) {
                console.log('statusChangeCallback');
                console.log(response);
                // The response object is returned with a status field that lets the
                // app know the current login status of the person.
                // Full docs on the response object can be found in the documentation
                // for FB.getLoginStatus().
                if (response.status === 'connected') {
                    // Logged into your app and Facebook.
                    testAPI();
                } else if (response.status === 'not_authorized') {
                    // The person is logged into Facebook, but not your app.
                    document.getElementById('status').innerHTML = 'Please log ' +
                            'into this app.';
                } else {
                    // The person is not logged into Facebook, so we're not sure if
                    // they are logged into this app or not.
                    document.getElementById('status').innerHTML = 'Please log ' +
                            'into Facebook.';
                }
            }

            // This function is called when someone finishes with the Login
            // Button.  See the onlogin handler attached to it in the sample
            // code below.
            function checkLoginState() {
                FB.getLoginStatus(function (response) {
                    statusChangeCallback(response);
                });
            }

            window.fbAsyncInit = function () {
                FB.init({
                    appId: '577982128970459',
                    cookie: true, // enable cookies to allow the server to access 
                    // the session
                    xfbml: true, // parse social plugins on this page
                    version: 'v2.1' // use version 2.1
                });

                // Now that we've initialized the JavaScript SDK, we call 
                // FB.getLoginStatus().  This function gets the state of the
                // person visiting this page and can return one of three states to
                // the callback you provide.  They can be:
                //
                // 1. Logged into your app ('connected')
                // 2. Logged into Facebook, but not your app ('not_authorized')
                // 3. Not logged into Facebook and can't tell if they are logged into
                //    your app or not.
                //
                // These three cases are handled in the callback function.

                FB.getLoginStatus(function (response) {
                    statusChangeCallback(response);
                });

            };

            // Load the SDK asynchronously
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            // Here we run a very simple test of the Graph API after login is
            // successful.  See statusChangeCallback() for when this call is made.
            function testAPI() {
                console.log('Welcome!  Fetching your information.... ');
                FB.api('/me', function (response) {
                    console.log('Successful login for: ' + response.name);
                    document.getElementById('status').innerHTML =
                            'Thanks for logging in, ' + response.name + '!';
                });
            }
        </script>
    </head>
    <body class="cbp-spmenu-push">
        <?php
        include("../include/header.php");
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Login -->


                    <!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
                    -->

                    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                    </fb:login-button>

                    <div id="status">
                    </div>

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
                            <img src="image/JogarAgora.png" width="90%"/>                            
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
