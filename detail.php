<div class="detail">


    <img src="./img/foto/image3.JPG" class="detailFotka zoomit" style="float: left;">

    <div class="detailObsah" style="right: 0;">

        <div class="outer" >
            <div class="middle">
                <div class="innerShow">



                    <?php
                    require_once './connect.php';

                    $stmt = $conn->prepare('SELECT obsah FROM detaily WHERE nazev = ?');
                    $stmt->bind_param('s', $_POST["param"]);
                    $stmt->execute();

                    $stmt->bind_result($obsah);
                    $zobrazeno = false;
                    while ($stmt->fetch()) {
                        echo $obsah;
                        $zobrazeno = true;
                    }
                    $stmt->close();
                    
                    if(!$zobrazeno){
                        echo "<h1>Nadpis detailu</h1>";
                        echo '<img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">';
                        echo '<p>Má své a hradiště zmíněná završuje proteinu? Rozdělit a patology spatřovali hrobky chemical jednu angličtinu polovina dílčí kroje s poválečná. Rodičů nejprestižnějšího stopa tábory jistotou, lze účinněji nudit. Měla justice polarizovaných plyne dlouhá ho stěhování, oblíbený vytvoří choroboplodných dočkala se rozvoji tož pralesa oblečením, snu říše houby masivní postihly sportům vlny zrušili odrážení žila a kůže nálada udělat.</p>';
                    }
                    ?>



                    <!-- <h1><?php /*echo htmlspecialchars($_POST["param"]);*/ ?></h1>

                    <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">
                    <p>Once upon a midnight dreary...</p> -->

                    <div class="kontaktujteButton" onclick="zobraz('kontakt', 'Kontakt')">
                        Kontaktujte nás
                        <div class="detailVypln"></div>
                    </div>
                    

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