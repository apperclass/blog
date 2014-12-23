<?php get_header(); ?>
<div id="main-content" class="main-content post-index">

    <div class="row">
        <div id="isotope-container">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="blog-article isotope-item">
                <div class="box">
                    <div class="wrap-picture">
                        <a href="<?php the_permalink(); ?>"><img src="http://placehold.it/350x260" alt=""></a>
                    </div>
                    <div class="article-body">
                        <h2><?php the_category( ', ' ); ?></h2>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <footer class="post-info">
                        <div class="author"><span class="icon icon-user"></span> <?php the_author(); ?></div>
                        <div class="date"><span class="icon icon-clock"></span> <?php echo get_the_date(); ?></div>
                    </footer>
                 </div>
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