

<div class="novinka current">

    <div style="  width: 60%;  position: relative;  height: 100%;  overflow: hidden;  display: table;  float: left;">
        <img src="./img/reference/reymont1.jpg" class="novinkaFotka" >
    </div>
    <div class="novinkaObsah" style="right: 0;">
        <div class='novinkaInner'>
            <p class="datum">7.6.2015</p>
            <h2>Lukáš Rejmont – Trofeje pro surfaře</h2>
            <img src="./img/foto/separator.png" style="margin: 0px auto 10px auto; max-width: 400px;"> 
            <h4>Lukášem jsme byli osloveni k výrobě trofejí v podobě surfařské vlny a medailí pro Quiksilver and Roxy Czech & Slovak Surfing Championship konané ve Francii.</h4>
        </div>
    </div>


</div>

<div class="novinka">

    <div style="  width: 60%;  position: relative;  height: 100%;  overflow: hidden;  display: table;  float: right;">
        <img src="./img/reference/bubles.jpg" class="novinkaFotka" >
    </div>

    <div class="novinkaObsah" style="left: 0;">
        <div class='novinkaInner'>

            <p class="datum">7.6.2015</p>
            <h2>Qubus – Yellow vase, Soap bubles</h2>
            <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;"> 
            <h4>Studiem Qubus jsme byli osloveni k výrobě designových produktů, které se z části tvarovali do forem a z části tvarovaných z volné ruky.</h4>
        </div>
    </div>

</div>

<div class="novinka ">

    <div style="  width: 60%;  position: relative;  height: 100%;  overflow: hidden;  display: table;  float: left;">
        <img src="./img/reference/vases1.jpg" class="novinkaFotka">
    </div>
    <div class="novinkaObsah" style="right: 0;">
        <div class='novinkaInner'>
            <p class="datum">7.6.2015</p>
            <h2>Křehký – Limited colection vases</h2>
            <img src="./img/foto/separator.png" style="margin: 0px auto 10px auto; max-width: 400px;"> 
            <h4>Studiem Křehký jsme byli osloveni k výrobě výrobků z části foukaných do kovových forem a z části tvarovaných z volné ruky.</h4>
        </div>
    </div>


</div>

<div style="height: 30px;"></div>
<script>
    $(".navigation").hide();

    $(".navigation").show(500);

    $('div.novinka').first();

    $('.novinka').height(($(window).height() - $(".navbar-fixed-top").height() - $(".navbar-bottom").height()) / 2 +1);

    $('a.display').on('click', function (e) {
        e.preventDefault();
        var t = $(this).text(),
                that = $(this);

        //alert($('.current').next('div.novinka').length);
        if (that.hasClass("down") && $('.current').next('div.novinka').length > 0) {



            var $next = $('.current').next('.novinka');
            var top = $next.offset().top;

            $('.current').removeClass('current');

            $('body').animate({
                scrollTop: top
            }, function () {
                $next.addClass('current');
            });
        } else if (that.hasClass("up") && $('.current').prev('div.novinka').length > 0) {
            var $prev = $('.current').prev('.novinka');
            var top = $prev.offset().top;

            $('.current').removeClass('current');

            $('body').animate({
                scrollTop: top
            }, function () {
                $prev.addClass('current');
            });
        }
    });




</script>