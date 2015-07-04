






<div class="produktyBox" id="produktyBox">
    <div class="produkt hranovane" onclick="zobraz('seznamProduktu', 'brousene')">

        <h4 class="produktText">
            Hranované sklo 
        </h4>
        <img class="produktimg" src="./img/foto/buildings.jpg" >

    </div>
    <div class="produkt svetla" onclick="zobraz('seznamProduktuSvetla', 'Jiz brzy...')">
        <h4 class="produktText">
            Skleněná světla
        </h4>
        <img class="produktimg " src="./img/foto/drink.jpg" >

    </div>
    
    
    
    <div class="produkt produktR" onclick="zobraz('seznamProduktu', 'ploche')">
        <h4 class="produktText">
            Vázy z plochého skla
        </h4>
        <img class="produktimg" src="./img/foto/cerem.jpg">
    </div>
    
    <div class="produkt produktR" onclick="zobraz('seznamProduktuSperky', 'Již brzy...')">
        <h4 class="produktText sluzbaTextRR">
            Šperky
        </h4>
        <img class="produktimg" src="./img/foto/cerem.jpg">
    </div>
    
</div>


<script>
    
$(document).ready(function(){
    nastavVelikosti();
    
}); 

$(window).resize(function(){
    nastavVelikosti();
});

function nastavVelikosti(){
    
    var oknoHeight = $(window).height();
    var innerVyska = oknoHeight - $(".navbar-fixed-top").height() - $(".navbar-bottom").height();
    
    $(".produktyBox").height(innerVyska);
    
    
    
    
    
    
};
    
    
    
    
</script>











