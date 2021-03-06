<?php get_header(); ?>
<div id="main-content" class="main-content post-index">

    <div class="row">
        <div class="columns small-12 large-8"></div>
        <div class="columns small-12 large-4">
            <div class="category-switch-component">
                <div class="trigger-category-switch"><span class="show">Show: </span> <?php $cat = single_cat_title('', false); echo $cat ? $cat : 'All'; ?> <img class="arrow-up" src="<?php echo get_template_directory_uri(); ?>/assets/images/caret-white.png"><img class="arrow-down" src="<?php echo get_template_directory_uri(); ?>/assets/images/caret-white-down.png"></div>
                <!--<select class="category-switch">
                    <option value="<?php echo get_home_url(); ?>">All</option>

                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category):
                        ?>
                        <option <?php if(strtolower(single_cat_title('',false))===strtolower($category->name)){ echo "selected"; } ?> value="<?php echo get_category_link( $category->cat_ID ); ?>"><?php echo $category->name; ?></option>
                    <?php endforeach; ?>
                </select>-->
                <div class="category-list-menu">
                    <ul><?php wp_list_categories('title_li='); ?></ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="index-wrapper">
            <div id="isotope-container">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="blog-article isotope-item">
                    <div class="box animated bottom-rounded">
                        <div class="wrap-picture">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="article-body">
                            <h2><?php the_category( ', ' ); ?></h2>
                            <a href="<?php the_permalink(); ?>">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_excerpt(); ?></p>
                            </a>
                        </div>
                        <footer class="post-info">

                            <div class="author"><span class="icon icon-user"></span> <?php the_author(); ?></div>
                            <div class="row">
                                <div class="columns small-8">
                                    <div class="date"><span class="icon icon-clock"></span> <?php echo get_the_date(); ?></div>
                                </div>
                                <div class="columns small-4" style="text-align: right;">
                                    <div class="comment-count"><span class="icon icon-bubble"></span> <?php the_disqus_count($post); ?></div>
                                </div>
                            </div>
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
</div>
<?php get_footer(); ?>