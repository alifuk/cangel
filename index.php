<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <link href="favicon.ico" rel="icon" type="image/png" /> -->
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css">

        <script>
            $(document).ready(function () {
                $("#inner").delay(200).fadeIn(1000);
                var ubehlo2sec = false;
                var nactenoGal = false;

                setTimeout(function () {
                    ubehlo2sec = true;

                }, 2000);


                $.ajax({url: 'slider.php',
                    /*data: {menu: slozka},*/
                    type: 'POST',
                    success: function (output) {
                        nactenoGal = true;
                        $("#slider").html(output);
                        skryjUvod();
                    }
                });

                function skryjUvod() {

                    if (nactenoGal && ubehlo2sec) {

                        $("#hide").delay(200).fadeOut(500);
                        jssor_slider1.$GoTo(1);
                        jssor_slider1.$Play();
                    }


                }

            });


            function hideIt() {
                $("#slider").fadeOut(1000);
            }


        </script>


    </head>
    <body style="background:#fff; margin: 0px; ">


        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigations</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="logo.png" alt="The Studio" style="" class="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav" id="menu">
                        <li>
                            <div class="vypln"></div>
                            <a href="#" onclick="hideIt()">NOVINKY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>
                            <a href="#">SLUŽBY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>   
                            <a href="#">PRODUKTY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>   
                            <a href="#">REFERENCE</a>
                        </li>                        
                        <li>
                            <div class="vypln"></div>   
                            <a href="#">KONTAKT</a>
                        </li>
                    </ul>


                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.container -->
        </nav> <!-- Navigation -->




        <div id="slider">

        </div>





        <nav class="navbar navbar-default navbar-fixed-bottom navbar-small">
            <div class="container-fluid">


                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="...">
                    </a>
                </div>





            </div>
        </nav>



        <div id="hide" style="">
            <div class="outer">
                <div class="middle">
                    <div class="inner" id="inner">

                        <img alt="the studio" src="logo.jpg" class="pulse" width="400px;">

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>

