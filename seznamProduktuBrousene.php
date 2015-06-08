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
                $files1 = array_diff(scandir($dir), array('..', '.'));
                ;
                //print_r($files1);
                /* foreach ($files1 as $file) {

                  echo "<td onclick=zobraz('detail' ,  'hodinky')>
                  <div class=\"sProdukt pulseHover\">
                  <img src=\"./img/small/" . $file . " \"><h4>Hodinky S3000</h4>

                  </div>
                  </td>";
                  } */
                ?>



                <td onclick="zobraz('detail', 'bowl')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Beveling bowl.jpg"  >
                        <h4>Beveling bowl</h4>

                    </div>
                </td>

                <td onclick="zobraz('detail', 'brick')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Brick.jpg"  >
                        <h4>Brick</h4>

                    </div>        
                </td>

                <td onclick="zobraz('detail', 'hexagon')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Hexagon a.jpg"  >
                        <h4>Hexagon</h4>

                    </div>        
                </td>
                <td onclick="zobraz('detail', 'iron big')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Iron big a.jpg"  >
                        <h4>Iron big</h4>

                    </div>
                </td>

                <td onclick="zobraz('detail', 'iron small')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Iron small a.jpg"  >
                        <h4>Iron small</h4>

                    </div>        
                </td>
                <td onclick="zobraz('detail', 'lux')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Lux.jpg"  >
                        <h4>Lux</h4>

                    </div>
                </td>

                <td onclick="zobraz('detail', 'pentagon')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Pentagon.jpg"  >
                        <h4>Pentagon</h4>

                    </div>        
                </td>
                <td onclick="zobraz('detail', 'pyramid')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Pyramid a.jpg"  >
                        <h4>Pyramid</h4>

                    </div>
                </td>

                <td onclick="zobraz('detail', 'rectangle')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Rectangle big.jpg"  >
                        <h4>Rectangle big</h4>

                    </div>        
                </td>
                <td onclick="zobraz('detail', 'rectangle small')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Rectangle small a.jpg"  >
                        <h4>Rectangle small</h4>

                    </div>
                </td>

                <td onclick="zobraz('detail', 'rhombus')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Rhombus.jpg"  >
                        <h4>Rhombus</h4>

                    </div>        
                </td>
                <td onclick="zobraz('detail', 'square big')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Square big a.jpg"  >
                        <h4>Square big</h4>

                    </div>
                </td>

                <td onclick="zobraz('detail', 'square small')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Square small a.jpg"  >
                        <h4>Square small</h4>

                    </div>        
                </td>
                <td onclick="zobraz('detail', 'tainted')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Tainted square.jpg"  >
                        <h4>Tainted</h4>
                    </div>
                </td>

                <td onclick="zobraz('detail', 'tiffany')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Tiffany.jpg"  >
                        <h4>Tiffany</h4>

                    </div>        
                </td>
                <td onclick="zobraz('detail', 'triangle')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Triangle big.jpg"  >
                        <h4>Triangle</h4>

                    </div>
                </td>

                <td onclick="zobraz('detail', 'triangle small')">
                    <div class="sProdukt pulseHover">
                        <img src="./img/small/Triangle small.jpg"  >
                        <h4>Triangle small</h4>

                    </div>        
                </td>




            </tr>

        </table>
    </div>






</div>