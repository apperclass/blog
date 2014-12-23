(function($){
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
                selector: '#infinite-scrolling-loading'
            }
        },function(elements){
            console.log(isotope);
            isotope.isotope( 'appended', elements );
        });

        // Switch category menu
        $('.category-list-menu').hide();
        $('.category-switch').change(function(e){
            window.location = $(this).val();
        });

    });
})(jQuery);

