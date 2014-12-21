(function($){
    $(document).ready(function(){
        var isotope = $('#isotope-container').isotope({
            itemSelector: '.isotope-item'
        });
        $('.pagination').hide();
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
    });
})(jQuery);

