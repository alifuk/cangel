<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <link href="favicon.ico" rel="icon" type="image/png" /> -->
        <script src="./js/jquery-1.9.1.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- styles needed by jScrollPane -->
        <link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />
        <link type="text/css" href="style/normalize.css" rel="stylesheet" media="all" />

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

            var api;
            var mouseover = true;
            var sliderPoprve = true;

            var kliknutoNaLogo = true;

            function produktyDoprava() {
                api.scrollBy(200, 0);
            }

            function produktyDoleva() {
                api.scrollBy(-200, 0);
            }



            $(document).ready(function () {

                //$("#hide").delay(200).fadeOut(500);
                
        
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

                        if (jssor_slider1 !== null) {
                            jssor_slider1.$GoTo(1);
                            jssor_slider1.$Play();
                        }


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



            function zobrazAj(stranka, parametr) {

                $.ajax({url: stranka + '.php',
                    data: {'param': parametr},
                    type: 'POST',
                    success: function (output) {
                        $("#" + spodniObsah).html(output);
                        /*$(".detailObsah").hide();
                         $(".detailObsah").addClass("displaynone");*/

                        if (stranka == slider) {
                            $("#" + spodniObsah).addClass("displaynone");

                        }




                        $("#" + spodniObsah).removeClass("displaynone");

                        hideAll();

                        $('#produktBar').jScrollPane();
                        /*$('#produktBar').jScrollPane().bind(
                         'mousewheel',
                         function (event, delta, deltaY)
                         {
                         api.scrollByY(delta * -50);
                         return false;
                         }
                         );*/


                        api = $('#produktBar').data('jsp');
                        $('#produktBar').jScrollPane(
                                {
                                    animateScroll: true,
                                    animateDuration: 300

                                }
                        );
                        scrolluj()


                        $('.noscroll').mouseenter(function () {
                            mouseover = false;
                        }).mouseleave(function () {
                            mouseover = true;
                            scrolluj();
                        });


                        function scrolluj() {
                            setTimeout(function () {

                                if (mouseover) {
                                    api.scrollBy(10, 0);
                                    scrolluj();
                                }

                            }, 300);
                        }








                        /*
                         checkuj()
                         function checkuj() {
                         var width = screen.width,
                         height = screen.height;
                         setInterval(function () {
                         if (screen.width !== width || screen.height !== height) {
                         width = screen.width;
                         height = screen.height;
                         api.reinitialise();
                         
                         }
                         checkuj();
                         }, 300);
                         }*/


                    }
                });

            }


            function zobraz(stranka, parametr) {

                if (stranka == "slider") {


                    if (kliknutoNaLogo == false) {
                        zobrazAj(stranka, parametr)
                    }
                    kliknutoNaLogo = true;

                } else {
                    kliknutoNaLogo = false;
                    zobrazAj(stranka, parametr)

                }





            }



            function hideAll() {


                sliderPoprve = false;
                if ($("#slider").html() === "") {
                    pokracujHideAll();
                } else {
                    $("#slider").fadeTo("slow", 0, function () {
                        $("#slider").html("");
                        //jssor_slider1.$Pause();
                        pokracujHideAll();

                    });
                }







            }

            function pokracujHideAll() {

                $("#" + horniObsah).fadeTo("slow", 0, function () {
                    $(this).addClass("displaynone");




                });






                $("#" + spodniObsah).fadeTo("slow", 1, function () {






                    /*setTimeout(function () {
                     alert($("#kurvaZasrana").height() + " " + $("#zmrd").height());
                     
                     if ($("#" + spodniObsah + " #kurvaZasrana").height() > $("#" + spodniObsah + " #zmrd").height()) {
                     $("#" + spodniObsah + " .detail").addClass("fixed");
                     } else {
                     
                     $("#" + spodniObsah + " .detail").removeClass("fixed");
                     }
                     
                     }, 2000);
                     */





                    //



                    /*$(".detailObsah").fadeTo("fast",0);
                     $(".detailObsah").removeClass("displaynone");
                     $(".detailObsah").fadeTo("slow",1);*/

                    tempdiv = horniObsah;
                    horniObsah = spodniObsah;
                    spodniObsah = tempdiv;




                });






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
                        <img src="logo.png" alt="The Studio" class="logo" onclick="if (!kliknutoNaLogo) {
                                    zobraz('slider');
                                }">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-center " id="bs-example-navbar-collapse-1" >

                    <ul class="nav navbar-nav" id="menu">
                        <li>
                            <div class="vypln"></div>
                            <a onclick="zobraz('novinky')">NOVINKY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>
                            <a onclick="zobraz('sluzby')">SLUŽBY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>   
                            <a onclick="zobraz('produkty')">PRODUKTY</a>
                        </li>
                        <li>
                            <div class="vypln"></div>   
                            <a onclick="zobraz('reference')">REFERENCE</a>
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



            <div style="float: right; width: 195px; height: 30px; padding-right: 15px;">
                <img src="./img/foto/instagram.png" class="ikonka">
                <img src="./img/foto/pinterest.png" class="ikonka">
                <img src="./img/foto/in.png" class="ikonka">
                <img src="./img/foto/twitter.png" class="ikonka">
                <img src="./img/foto/g.png" class="ikonka">
                <img src="./img/foto/facebook.png" class="ikonka">
            </div>
            <ul class="ul-dole">


                <li class="li-dole">
                    <a href="#" onclick="zobraz('kontakt', 'Kontakt')">Kontakt</a> 
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
            <span class="jazyky" style="line-height: 11px; padding: 0 0px; float: right; position: relative;"> CS 
                <img src="./img/foto/arrowUp.png" style="max-height: 12px;" id="uparrow">
                <img src="./img/foto/arrowDown.png"  style="max-height: 12px;" id="downarrow">
                <div class="jazykyBox" style="top: -72px;   left: -4px; position: relative; background-color: #FFF;">
                    <div style="width: 50px; height: 25px; padding: 5px;" class="jazycek">NJ
                        <div class="vyplnJazyky"></div></div>                    
                    <div style="width: 50px; height: 25px; padding: 5px;" class="jazycek">EN
                        <div class="vyplnJazyky"></div></div>


                </div>

                <div class="detailVypln" style="  top: -10px; width: 39px; left: -4px; height: 400px;  z-index: -100;"></div>
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

