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
        $('.category-list-menu').css('width', (imageWidth + 1)  + 'px');
    }

    $(document).ready(function(){

        if ($('#isotope-container').length < 1) {
            return;
        }

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
        $('.category-list-menu').css('display', 'none');

        // Overlay close
        $('#category-overlay').click(function(e){
            $('.trigger-category-switch').removeClass('active');
            $('#category-overlay').removeClass('active');
            $('.category-list-menu').removeClass('active');
            setTimeout(function(){
                $('.category-list-menu').css('display', 'none');
            },500);
        });


        $('.trigger-category-switch').click(function(e){
            $(this).toggleClass('active');
            e.preventDefault();
            if ($('.category-list-menu').is('.active')) {
                $('#category-overlay').removeClass('active');
                $('.category-list-menu').removeClass('active');
                setTimeout(function(){
                    $('.category-list-menu').css('display', 'none');
                },500);
            } else {
                $('#category-overlay').addClass('active');
                $('.category-list-menu').css('display', 'block');
                setTimeout(function(){
                    $('.category-list-menu').addClass('active');
                },100);
            }


        });
        $('.category-switch').change(function(e){
            window.location = $(this).val();
        });

        $(window).resize(function(){
            updateSizes($('.isotope-item'));
            setTimeout(function(){
                $('#isotope-container').data('isotope').layout();
            },200);
        });

        setTimeout(function(){
            $(window).trigger('resize');
            setTimeout(function(){
                $('#isotope-container').animate({'opacity':1},500);
            },200);
        }, 500);


        $('.')

    });
})(jQuery);

