<script src="./assets/js/jquery-3.7.1.js"></script>
<script src="./assets/js/leaflet.js"></script>
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/app.js"></script>
<style>

</style>
<script>
    if ($('.ty-compact-list').length > 4) {
        $('.ty-compact-list:gt(3)').hide();
        $('.show-more').show();
    }

    $('.show-more').on('click', function() {
        //toggle elements with class .ty-compact-list that their index is bigger than 2
        $('.ty-compact-list:gt(3)').toggle();
        //change text of show more element just for demonstration purposes to this demo
        $(this).text() === 'Show more' ? $(this).text('Show less') : $(this).text('Show more');
    });


    if ($('.ty-compact-list-units').length > 4) {
        $('.ty-compact-list-units:gt(3)').hide();
        $('.show-more-units').show();
    }

    $('.show-more-units').on('click', function() {
        //toggle elements with class .ty-compact-list that their index is bigger than 2
        $('.ty-compact-list-units:gt(3)').toggle();
        //change text of show more element just for demonstration purposes to this demo
        $(this).text() === 'Show more' ? $(this).text('Show Less') : $(this).text('Show More');
    });


    // $("span.show_text_new").click(function() {
    //     $(this).hide();
    //     $("span.hide_text_new").show();
    //     $("div.fade_text").hide();
    //     $("div#wrapped_text").css("height","auto");
    // });
    // $("span.hide_text_new").click(function() {
    //     $(this).hide();
    //     $("span.show_text_new").show();
    //     $("div.fade_text").hide();
    //     $("div#wrapped_text").css("height","auto");
    // });


    $("span.show_text_hany").click(function() {
        $(this).hide();
        $("span.hide_text_hany").show();
        // $("div.fade_text").hide();
        $("div#wrapped_text").css("height","auto");
    });
    $("span.hide_text_hany").click(function() {
        $(this).hide();
        $("span.show_text_hany").show();
        // $("div.fade_text").hide();
        $("div#wrapped_text").css("height","200");


        $('html, body').animate({
            scrollTop: $("#wrapped_text").offset().top - 200
        }, 10);
        // $('body').animate({
        //     scrollTop: eval($('#' + $(this).attr('target')).offset().top - 70)
        // }, 1000);

    });



</script>