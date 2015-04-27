<?php

for ($i = 0; $i < 3; $i++) {
    echo '
<div class="novinka">
    
    
    <img src="./img/foto/cerem350.jpg" class="novinkaFotka" style="float: left;">
    
    <div class="novinkaObsah" style="right: 0;">
        <p class="datum">24.5.2015</p>
        <h2>' . htmlspecialchars($_POST["param"]) . '</h2>
        <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;"> 
        <h4>' . htmlspecialchars($_POST["param"]) . '</h4>
    </div>
    
    
</div>

<div class="novinka">
    
    <img src="./img/foto/buildings350.jpg" class="novinkaFotka" style="float: right;">
    <div class="novinkaObsah" style="left: 0;">
        <p class="datum">24.5.2015</p>
        <h2>' . htmlspecialchars($_POST["param"]) . '</h2>
        <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;"> 
        <h4>' . htmlspecialchars($_POST["param"]) . '</h4>
    </div>
    
</div>';
}
?>
