

<div class="novinka current">

    <div style="  width: 60%;  position: relative;  height: 100%;  overflow: hidden;  display: table;  float: left;">
        <img src="./img/WEB/foto/reference_berdych1.jpg" class="novinkaFotka" style="float: left;">
    </div>
    <div class="novinkaObsah" style="right: 0;">
        <div class='novinkaInner'>
            <p class="datum">7.6.2015</p>
            <h2>Jakub Berdych - Dlouhodobá spolupráce na výrobě jeho produktů</h2>
            <img src="./img/foto/separator.png" style="margin: 0px auto 10px auto; max-width: 400px;"> 
            <h4>Panem Berdychem, jsme byli osloveni ohledně možné spolupráce na výrobě jeho produktové kolekce. Po výrobě pár vzorků a potom co se p. Berdychovi kvalita provedení líbila, jsme zahájili výrobu ve větší míře.</h4>
        </div>
    </div>


</div>

<div class="novinka">

    <img src="./img/WEB/foto/reference_kovac1.JPG" class="novinkaFotka" style="float: right;">
    <div class="novinkaObsah" style="left: 0;">
        <div class='novinkaInner'>

            <p class="datum">7.6.2015</p>
            <h2>Emil Kováč – Designové barevné skleničky</h2>
            <img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;"> 
            <h4>Panem Kováčem, jsme byli osloveni ohledně vzorování a případné větší výroby designových skleniček. Po výrobě pár vzorků a potom co se p. Kováčovi kvalita provedení líbila, jsme zahájili výrobu dle zakázek.</h4>
        </div>
    </div>

</div>


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