

<div class="detail" >


    <?php
    require_once './connect.php';

    $stmt = $conn->prepare('SELECT obsah, foto, nazev, podkategorie, material, kodProduktu FROM detaily WHERE nadpis = ?');
    $stmt->bind_param('s', $_POST["param"]);
    $stmt->execute();

    $stmt->bind_result($obsah, $foto, $nazev, $podkategorie, $material, $kodProduktu);
    $zobrazeno = false;

    while ($stmt->fetch()) {
        //echo $obsah;
        $zobrazeno = true;
    }
    $stmt->close();
    ?>
    <div style=" width: 65%; float: left; height: 100%; position: fixed; overflow: hidden; " id="kurvaZasrana">
        <img src='<?php echo "./" . $foto; ?>' class='detailFotka zoomitC' style="float: left;">
    </div>



    <div class="detailObsah" style="right: 0;z-index: 1000;float: right;display: block;height: 100%;position: absolute;" >

        <div style="display: table; height: 100%; width: 100%;"  id="zmrd">
            <div style="  vertical-align: middle;  display: table-cell; padding: 0 22px; text-align: left;"       >

                <h1 style="text-align: center; margin: 10px 0; text-height: 48px;"><?php echo $nazev; ?></h1>
                <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px; min-width: 100%;">

                <p>

                <?php echo $obsah; ?>
                <br><br>
                <div style="margin: 0 auto;  text-align: center;">
                    





                    <!-- <h1><?php /* echo htmlspecialchars($_POST["param"]); */ ?></h1>

                    <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">
                    <p>Once upon a midnight dreary...</p> -->

                    <div class="kontaktujteButton" onclick="zobraz('kontakt', 'Kontakt')">
                        <div class="detailVypln"></div>
                        <span class="textik">Kontaktujte nás</span> 

                    </div>


                </div>
            </div>


            <!--
            <p class="datum">24.5.2015</p>
            <h2>Nadpis Novinky</h2>
            <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;"> 
            <h4>V záři reflektorů: Pět značek světového designu představuje výběr ze sedacího nábytku těch nejlepších světových značek zastupovaných na českém trhu firmou STOPKA. </h4> -->
        </div>




    </div>

