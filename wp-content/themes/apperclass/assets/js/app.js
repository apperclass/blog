(function($){

    function getWidth(max, count, min){
        if (count < 1) {
            return max;
        } else if ((max/count) > min ) {
            return max/count;
        }
        return getWidth(max, count-1, min);
    }

    function updateSizes($elements){
        var width = $('#isotope-container').width();
        var boxWidth =  getWidth(width, 5, 250);
        $elements.css('width', boxWidth + 'px');
        var imageWidth = boxWidth - 10 ;
        var imageHeight = imageWidth * 0.75;
        var $images = $elements.find('img');
        $images.css('width', imageWidth  + 'px');
        $images.css('height', imageHeight + 'px');
    }

    $(document).ready(function(){
        $('#isotope-container').css('opacity',0);
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
            updateSizes($(elements));
            isotope.isotope( 'appended', elements );
        });

        // Switch category menu
        $('.category-list-menu').hide();
        $('.category-switch').change(function(e){
            window.location = $(this).val();
        });

        $(window).resize(function(){
            updateSizes($('.isotope-item'));
            setTimeout(function(){
                $('#isotope-container').data('isotope').layout();
            },50);
        });

        setTimeout(function(){
            $(window).trigger('resize');
            $('#isotope-container').css('opacity', 1);
        }, 200);

    });
})(jQuery);

