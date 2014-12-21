<?php get_header(); ?>
<div id="main-content" class="main-content">

    <div class="row">
        <div id="isotope-container">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="blog-article isotope-item">
                <a href="<?php the_permalink(); ?>" class="box">
                    <div class="wrap-picture">
                        <img src="http://placehold.it/350x260" alt="">
                    </div>
                    <div class="article-body">
                        <h2>Development</h2>
                        <h1><?php the_title(); ?></h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula [...]</p>
                    </div>
                    <footer>
                        <div class="author"><span class="icon icon-user"></span> Matteo Orioli</div>
                        <div class="date"><span class="icon icon-clock"></span> December 27, 2014</div>
                    </footer>
                 </a>
            </article>

            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div id="infinite-scrolling-loading"></div>
        <div class="pagination"><?php echo paginate_links( ); ?></div>
    </div>

</div>
<?php get_footer(); ?>