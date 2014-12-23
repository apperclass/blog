(function($){

    function getWidth(max, count, min){
        if (count < 1) {
            return max;
        } else if ((max/count) > min ) {
            return max/count;
        }
        return getWidth(max, count-1, min);
    }

    $(document).ready(function(){

        // Isotope
        var isotope = $('#isotope-container').isotope({
            itemSelector: '.isotope-item'
        });
        $('.pagination').hide();

        // Infinite Scroll
        $('#isotope-container').infinitescroll({
            navSelector  : ".pagination",
            nextSelector : ".pagination .next",
            itemSelector : ".blog-article",
            loading: {
                selector: '#infinite-scrolling-loading',
                finishedMsg: '',
                img: 'wp-content/themes/apperclass/assets/images/loader3.gif',
                msgText: ''
            }
        },function(elements){
            $(elements).imagesLoaded( function(){
                var width = $('#isotope-container').width();
                $(elements).css('width', getWidth(width, 5, 250) + 'px');
                isotope.isotope( 'appended', elements );
            });
        });

        // Switch category menu
        $('.category-list-menu').hide();
        $('.category-switch').change(function(e){
            window.location = $(this).val();
        });

        $(window).resize(function(){
            var width = $('#isotope-container').width();
            $('.isotope-item').css('width', getWidth(width, 5, 240) + 'px');
            setTimeout(function(){
                $('#isotope-container').data('isotope').layout();
            },50);
        });

        $(window).trigger('resize');
    });
})(jQuery);

