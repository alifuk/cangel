<div class="sluzbaBox" id="sluzbaBox">

    <div class="sluzba" onclick="zobraz('sluzba', 'foukane')" style="z-index: 10; left: 0%;  ">

        <div style="background-image: url(./img/foto/image2.jpg); background-position: center center; width: 100%; position: relative; height: 100%;" class="sloupec">
            <div style="display: table; width: 100%; position: absolute; height: 100%;  " class="sloupec kurvenina">
                <div style="display: table-cell; vertical-align: middle;">
                    <h4 class="sluzbaText">
                        Zakázková výroba ručně foukaného a uměleckého skla 
                    </h4> 
                </div>

            </div>
        </div>


    </div>
    <div class="sluzba" onclick="zobraz('sluzba', 'foukane')" style="z-index: 10; left: 25%;  ">

        <div style="background-image: url(./img/foto/drink.jpg); background-position: center center; width: 100%; position: relative; height: 100%;" class="sloupec">
            <div style="display: table; width: 100%; position: absolute; height: 100%; " class="sloupec kurvenina">
                <div style="display: table-cell; vertical-align: middle;">
                    <h4 class="sluzbaText">
                        Zakázková výroba ručně foukaného a uměleckého skla 
                    </h4> 
                </div>

            </div>
        </div>


    </div>
    <div class="sluzba" onclick="zobraz('sluzba', 'foukane')" style="z-index: 10; left: 50%;  ">

        <div style="background-image: url(./img/foto/forest.jpg); background-position: center center; width: 100%; position: relative; height: 100%;" class="sloupec">
            <div style="display: table; width: 100%; position: absolute; height: 100%; " class="sloupec kurvenina">
                <div style="display: table-cell; vertical-align: middle;">
                    <h4 class="sluzbaText">
                        Zakázková výroba ručně foukaného a uměleckého skla 
                    </h4> 
                </div>

            </div>
        </div>


    </div>
    <div class="sluzba" onclick="zobraz('sluzba', 'foukane')" style="z-index: 10; left: 75%;  ">

        <div style="background-image: url(./img/foto/cerem.jpg); background-position: center center; width: 100%; position: relative; height: 100%;" class="sloupec">
            <div style="display: table; width: 100%; position: absolute; height: 100%; " class="sloupec kurvenina">
                <div style="display: table-cell; vertical-align: middle;">
                    <h4 class="sluzbaText">
                        Zakázková výroba ručně foukaného a uměleckého skla 
                    </h4> 
                </div>

            </div>
        </div>


    </div>

    <!--
    <div class="sluzba sluzbaR" onclick="zobraz('sluzba', 'pelcove')" style="z-index: 11; left: 25%">
        <h4 class="sluzbaText">
            Výroba sklářských dřevěných a pecoldových forem
        </h4>
        <img class="sluzbaimg " src="./img/foto/drink.jpg" >

    </div>
    <div class="sluzba sluzbaR" onclick="zobraz('sluzba', 'brouseni')" style="z-index: 12; left: 50%">
        <h4 class="sluzbaText">
            Broušení, řezání a vrtání skla
        </h4>
        <img class="sluzbaimg" src="./img/foto/forest.jpg">
    </div>
    <div class="sluzba sluzbaR sluzbaRR" onclick="zobraz('sluzba', 'piskovani')" style="z-index: 13; left: 75%">
        <h4 class="sluzbaText sluzbaTextRR">
            Pískování a lepení skla
        </h4>
        <img class="sluzbaimg" src="./img/foto/cerem.jpg">
    </div>
</div>
    
    -->

    <script>

        $(document).ready(function () {
            $(".sloupec").width($(window).width() / 4);
            $(".sloupec").height($(window).height());
        });

        $(window).resize(function () {
            $(".sloupec").width($(window).width() / 4);
            $(".sloupec").height($(window).height());
        });

    </script>





