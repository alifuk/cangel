<?php
echo ' <h1 style="margin: 34px; display: block; text-align: center; text-transform: uppercase;"> ' . htmlspecialchars($_POST["param"]) . '</h1> </div>';
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
                $dir = './img/small/';
                $files1 = array_diff(scandir($dir), array('..', '.'));;
                //print_r($files1);
                /*foreach ($files1 as $file) {

                    echo "<td onclick=zobraz('detail' ,  'hodinky')>
                    <div class=\"sProdukt pulseHover\">
                        <img src=\"./img/small/" . $file . " \"><h4>Hodinky S3000</h4> 

                    </div>
                </td>";
                }*/
                ?>
   
               
                <td onclick="zobraz('detail', 'flatvase')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Flat vase.jpg"  >
                        <h4>Flat vase</h4>

                    </div>
                </td>

                 

            </tr>

        </table>
    </div>






</div>