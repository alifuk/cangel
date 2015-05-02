<div class="detail">


    <img src="./img/foto/buildings.jpg" class="detailFotka zoomit" style="float: left;">

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
                    while ($stmt->fetch()) {
                        echo $obsah;
                    }
                    $stmt->close();
                    ?>



                    <!-- <h1><?php echo htmlspecialchars($_POST["param"]); ?></h1>

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