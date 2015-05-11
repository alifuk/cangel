

<div class="detail" >


    <?php
    require_once './connect.php';

    $stmt = $conn->prepare('SELECT obsah, foto FROM detaily WHERE nazev = ?');
    $stmt->bind_param('s', $_POST["param"]);
    $stmt->execute();

    $stmt->bind_result($obsah, $foto);
    $zobrazeno = false;

    while ($stmt->fetch()) {
        //echo $obsah;
        $zobrazeno = true;
    }
    $stmt->close();
    ?>
    <div style=" width: 65%; float: left; height: 100%; position: fixed; overflow: hidden; " id="kurvaZasrana">
        <img src='<?php echo "./".$foto ; ?>' class='detailFotka zoomitC' style="float: left;">
    </div>



    <div class="detailObsah" style="right: 0;z-index: 1000;float: right;display: block;height: 100%;position: absolute;" >

        <div style="display: table; height: 100%; width: 100%;"  id="zmrd">
            <div style="  vertical-align: middle;  display: table-cell;"       >
                


<?php echo $obsah ; 

if (!$zobrazeno) {
    echo "<h1>Nadpis detailu</h1>";
    echo '<img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">';
    echo '<p>Má své a hradiště zmíněná završuje proteinu? Rozdělit a patology spatřovali hrobky chemical jednu angličtinu polovina dílčí kroje s poválečná. Rodičů nejprestižnějšího stopa tábory jistotou, lze účinněji nudit. Měla justice polarizovaných plyne dlouhá ho stěhování, oblíbený vytvoří choroboplodných dočkala se rozvoji tož pralesa oblečením, snu říše houby masivní postihly sportům vlny zrušili odrážení žila a kůže nálada udělat.</p>';
}
?>



                    <!-- <h1><?php /* echo htmlspecialchars($_POST["param"]); */ ?></h1>

                    <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">
                    <p>Once upon a midnight dreary...</p> -->

                <div class="kontaktujteButton" onclick="zobraz('kontakt', 'Kontakt')">
                    Kontaktujte nás
                    <div class="detailVypln"></div>
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

