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


</script>