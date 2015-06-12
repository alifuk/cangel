<?php
echo ' <h1 style="margin: 34px; display: block; text-align: center; text-transform: uppercase;"> ';
        if(htmlspecialchars($_POST["param"]) == "brousene") {
            echo "Broušené sklo";
        } else {
            echo htmlspecialchars($_POST["param"]);
        }
        echo '</h1> </div>';
?>



<div style="width:64px; margin: 21px auto;" class="noscroll" >

    <span class="glyphicon glyphicon-chevron-left smerovac" aria-hidden="true" onclick="produktyDoleva()"></span>
    <span class="glyphicon glyphicon-chevron-right smerovac" aria-hidden="true" onclick="produktyDoprava()"></span>


</div>


<div  id="produktBar" class="horizontal-only scroll-pane jspScrollable scroll-pane-arrows noscroll">

    <div style="width: auto; position: absolute; ">
        <table>
            <tr>


                <?php
                require_once './connect.php';

                $stmt = $conn->prepare("SELECT nadpis, nadpis, foto FROM detaily WHERE podkategorie = ?");
                $stmt->bind_param('s', $podKategorie);

                $podKategorie = htmlspecialchars($_POST["param"]);
                
                $stmt->execute();
                $stmt->bind_result($nazev, $nadpis, $foto);
                while ($stmt->fetch()) {
                    include './produktNahled.php';
                
                }
                $stmt->close();
                ?>


                <!--   
                <td onclick="zobraz('detail', 'bowl')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Beveling bowl.jpg"  >
                        <h4>Beveling bowl</h4>

                    </div>
                </td>

                -->


            </tr>

        </table>
    </div>






</div>