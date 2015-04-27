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


        <!-- styles needed by jScrollPane -->
        <link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />

        <!-- latest jQuery direct from google's CDN -->

        <!-- the mousewheel plugin - optional to provide mousewheel support -->
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>

        <!-- the jScrollPane script -->
        <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>



        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css">

        <script>
            var spodniObsah = "obsah1";
            var horniObsah = "obsah2";

            $(document).ready(function () {





                $("#hide").delay(200).fadeOut(500);
                $("#" + spodniObsah).fadeTo("normal", 0);
                $("#inner").delay(200).fadeIn(1000);
                var ubehlo2sec = false;
                var nactenoGal = false;




                setTimeout(function () {
                    ubehlo2sec = true;
                    skryjUvod();
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



                $("#downarrow").hide();
                $(".jazyky").hover(function () {

                    $("#uparrow").hide();
                    $("#downarrow").show();

                }, function () {
                    $("#uparrow").show();
                    $("#downarrow").hide();


                });










            });

            function zobraz(stranka) {
                $.ajax({url: stranka + '.php',
                    /*data: {menu: slozka},*/
                    type: 'POST',
                    success: function (output) {
                        $("#" + spodniObsah).html(output);
                        $("#" + spodniObsah).removeClass("displaynone");

                        hideAll();



                        /*$(".sluzbaR").mouseenter(function () {
                         $(".sluzbaBox").addClass("boxDoleva");
                         
                         });
                         
                         $(".sluzbaR").mouseleave(function () {
                         
                         $(".sluzbaBox").removeClass("boxDoleva");
                         });
                         
                         */
                    }
                });
            }

            function zobraz(stranka, parametr) {
                $.ajax({url: stranka + '.php',
                    data: {'param': parametr},
                    type: 'POST',
                    success: function (output) {
                        $("#" + spodniObsah).html(output);
                        $("#" + spodniObsah).removeClass("displaynone");

                        hideAll();



                        /*$(".sluzbaR").mouseenter(function () {
                         $(".sluzbaBox").addClass("boxDoleva");
                         
                         });
                         
                         $(".sluzbaR").mouseleave(function () {
                         
                         $(".sluzbaBox").removeClass("boxDoleva");
                         });
                         
                         */


                        $('#produktBar').jScrollPane();
                    }
                });
            }



            function hideAll() {
                if ($("#slider").html() === "") {
                    pokracujHideAll();
                } else {
                    $("#slider").fadeTo("slow", 0, function () {
                        $("#slider").html("");
                        pokracujHideAll();

                    });
                }







            }

            function pokracujHideAll() {

                $("#" + horniObsah).fadeTo("slow", 0, function () {
                    $(this).addClass("displaynone");
                });
                $("#" + spodniObsah).fadeTo("slow", 1);

                tempdiv = horniObsah;
                horniObsah = spodniObsah;
                spodniObsah = tempdiv;
            }


        </script>


    </head>
    <body style="background:#fff; margin: 0px; /*overflow: hidden;*/">


        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigations</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="logo.png" alt="The Studio" style="padding: 0 0 0 20px;" class="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-center " id="bs-example-navbar-collapse-1" >

                    <ul class="nav navbar-nav" id="menu">
                        <li>
                            <div class="vypln"></div>
                            <a href="#" onclick="zobraz('novinky')">NOVINKY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>
                            <a href="#" onclick="zobraz('sluzby')">SLUŽBY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>   
                            <a href="#" onclick="zobraz('produkty')">PRODUKTY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>   
                            <a href="#" onclick="zobraz('reference')">REFERENCE</a>
                        </li>    
                    </ul>


                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.container -->
        </nav> <!-- Navigation -->




        <div id="slider"></div>

        <div id="obsah1" >

        </div>

        <div id="obsah2">

        </div>





        <nav class="navbar-bottom" >


            <!-- <img src="./img/foto/copyright.gif" style="float: left; max-height: 24px; padding: 6px 0 0 15px;" /> -->
            <span style="line-height: 31px; padding-left: 20px; float: left;"> © The Studio 2015</span>



            <div style="float: right; width: 172px; height: 30px; padding-right: 15px;">
                <img src="./img/foto/facebook.png" class="ikonka">
                <img src="./img/foto/instagram.png" class="ikonka">
                <img src="./img/foto/pinterest.png" class="ikonka">
                <img src="./img/foto/twitter.png" class="ikonka">
                <!--<img src="./img/foto/in.png" class="ikonka"> -->
                <img src="./img/foto/g.png" class="ikonka">
            </div>
            <ul class="ul-dole">


                <li class="li-dole">
                    <a href="#">Kontakt</a> 
                    <div class="vyplnDole"></div>
                </li>
                <li class="li-dole">
                    <a href="#" onclick="zobraz('kariera')">Kariéra</a> 
                    <div class="vyplnDole"></div>
                </li>
                <li class="li-dole">

                    <a href="#" onclick="zobraz('onas')">O nás</a> 
                    <div class="vyplnDole"></div>

                </li>

            </ul>
            <span class="jazyky" style="line-height: 11px; padding: 0 0px; float: right;"> CS 
                <img src="./img/foto/arrowUp.png" style="max-height: 12px;" id="uparrow">
                <img src="./img/foto/arrowDown.png"  style="max-height: 12px;" id="downarrow">
                <div class="jazykyBox" style="top: -68px;   left: -5px; position: relative; background-color: #FFF;">
                    <div style="width: 50px; height: 25px; padding: 5px;">NJ</div>
                    <div style="width: 50px; height: 25px; padding: 5px;">EN</div>



                </div>
            </span>




            <!--
            <ul class="ikony-right" id="menu-dole">
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
            </ul>


            -->

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

