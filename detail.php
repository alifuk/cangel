

<div class="detail" >


    <?php
    require_once './connect.php';

    $stmt = $conn->prepare('SELECT obsah, foto, nazev, podkategorie, material, kodProduktu, rozmery FROM detaily WHERE nadpis = ?');
    $stmt->bind_param('s', $_POST["param"]);
    $stmt->execute();

    $stmt->bind_result($obsah, $foto, $nazev, $podkategorie, $material, $kodProduktu, $rozmery);
    $zobrazeno = false;

    while ($stmt->fetch()) {
        $zobrazeno = true;
    }
    $stmt->close();
    ?>
    <div style=" width: 65%; float: left; height: 100%; position: fixed; overflow: hidden; " id="kurvaZasrana">
        <img src='<?php echo "./img/small/" . $foto; ?>' class='detailFotka zoomitC' style="float: left;">
    </div>



    <div class="detailObsah" style="right: 0;z-index: 1000;float: right;display: block;height: 100%;position: absolute;" >

        <div style="display: table; height: 100%; width: 100%;"  id="zmrd">
            <div style="  vertical-align: middle;  display: table-cell; padding: 0 22px; text-align: left;"       >

                <h1 style="text-align: center; margin: 10px 0;"><?php echo $nazev; ?></h1>
                <h4 style="text-align: center;"><?php
    if (trim($podkategorie) == "brousene") {
        echo "Hranované sklo";
    } else{
        echo $podkategorie;
    }
    ?></h4>
                <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px; min-width: 100%;">

                <p>
                <table style="margin: 0;">
                    <tr><td><b>Materiály:</b> </td><td style="margin-left: 10px;"> <?php echo $material; ?></td></tr>
                    <tr><td><b>Design: </b> </td><td> The Studio, 2020</td></tr>                        
                </table><br>

                <b>Detail produktu:</b> <?php echo $obsah; ?>
                <br><br>
                Veškeré produkty jsou dostupné v těch barevných kombinacích, které jsou níže.<br>
V případě zájmu o tento produkt, nás neváhejte kontaktovat.
                <br><br>
                <b>Rozměry (HxWxD):</b> <?php echo $rozmery; ?><br>
                <b>Kod produktu:</b> <?php echo $kodProduktu; ?><br>
                ostatní barevné varianty:
                </p>
                <div style="margin: 0 auto;  text-align: center;">
                    <img src="./img/foto/image1.jpg" style="margin: 10px ; max-width: 100px; min-width: 20px;  left: 0;  position: static;  display: inline-block; transform: translate( 0%, 0%);">
                    <img src="./img/foto/image1.jpg" style="margin: 10px ; max-width: 100px; min-width: 20px;  left: 0;  position: static;  display: inline-block; transform: translate( 0%, 0%);">
                    <img src="./img/foto/image1.jpg" style="margin: 10px ; max-width: 100px; min-width: 20px;  left: 0;  position: static;  display: inline-block; transform: translate( 0%, 0%);">







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

