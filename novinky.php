
<!--
<div class="navigation">
    <a href="#" id="display1" class="display up"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a><br>
    <a href="#" id="display" class="display down"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a><br>
</div>
-->




<div class="novinka current">

    <div style="  width: 60%;  position: relative;  height: 100%;  overflow: hidden;  display: table;  float: left;">
        <img src="./img/foto/cerem.jpg" class="novinkaFotka" style="float: left;">
    </div>
    <div class="novinkaObsah" style="right: 0;">
        <div class='novinkaInner'>
            <p class="datum">7.6.2015</p>
            <h2>Spuštění webových stránek</h2>
            <img src="./img/foto/separator.png" style="margin: 0px auto 10px auto; max-width: 400px;"> 
            <h4>Firma <b>The Studio</b> spouští nové webové stránky, na kterých jsme pracovali několik měsíců.<br>
                Nové internetové stránky v moderním designu, jsou zaměřeny především na přehledné a aktuální informování našich zákazníků. Na stránkách najdete aktuality z naší činnosti, nabídku služeb, nabídku našich produktů, kontakty a mnoho dalších informací.
                Nově spuštěné stránky budeme průběžně doplňovat, pokud Vám nějaké informace na nových stránkách budou chybět, neváhejte nás kontaktovat s návrhem na vylepšení.    

            </h4>
        </div>
    </div>


</div>



<!--
<div class="novinka">

    <img src="./img/foto/buildings350.jpg" class="novinkaFotka" style="float: right;">
    <div class="novinkaObsah" style="left: 0;">
        <div class='novinkaInner'>

            <p class="datum">24.5.2015</p>
            <h2>Nadpis Novinky</h2>
            <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;"> 
            <h4>V záři reflektorů: Pět značek světového designu představuje výběr ze sedacího nábytku těch nejlepších světových značek zastupovaných na českém trhu firmou STOPKA. </h4>
        </div>
    </div>

</div>
-->

<script>
    $(".navigation").hide();

    $(".navigation").show(500);

    $('div.novinka').first();

    $('.novinka').height(($(window).height() - $(".navbar-fixed-top").height() - $(".navbar-bottom").height()) / 2);

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