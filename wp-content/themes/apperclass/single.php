<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="main-content" class="main-content post-single">
        <div class="row">
            <div style="height: 14px"></div>
        </div>

        <div class="row">
            <div class="small-12 large-9 columns">
                <div class="box">
                    <div class="post-detail">
                        <h2><?php the_category( ', ' ); ?></h2>
                        <h1><?php the_title(); ?></h1>
                        <div class="post-info">
                            <div class="date">
                                <span class="icon icon-clock"></span> <?php the_date(); ?>
                                <span style="padding-left: 10px;" class="icon icon-bubble"></span> <?php the_disqus_count($post); ?>
                            </div>
                        </div>
                        <div class="post-content"><?php the_content(); ?></div>
                    </div>
                    <div class="post-bottom">
                        <div class="post-info">
                            <span class="icon icon-tag"></span> <?php echo get_the_tag_list('', ', ',''); ?>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="comments-wrapper">
                        <?php comments_template(); ?>
                    </div>
                </div>
            </div>
            <div class="small-12 large-3 columns">
                <div class="box">
                    <div class="author-box">
                        <a href="" class="avatar">
                            <img class="mask" src="<?php echo get_template_directory_uri() . '/assets/images/hexagon-white-mask.png' ?>">
                            <img class="picture" src="<?php echo get_avatar_url(get_avatar($post->post_author)); ?>' ?>">
                        </a>
                        <div class="author-details">
                            <h1><?php the_author(); ?></h1>
                            <h2>Published Articles: <?php echo count_user_posts( $post->post_author ); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <aside>
                    <h1>Recent Articles</h1>
                        <?php
                        $args = array(
                            'numberposts' => 5,
                        );
                        /** @var \WP_Post $post */
                        foreach(wp_get_recent_posts($args, 'OBJECT') as $post): ?>
                        <article>
                                <div class="article-body">
                                    <h2><?php the_category( ', ', null, $post->ID ); ?></h2>
                                    <a href="<?php echo get_permalink($post->ID); ?>">
                                        <h1><?php echo $post->post_title; ?></h1>
                                        <p><?php echo get_excerpt_by_post_content($post->post_content); ?></p>
                                        <div class="post-info">
                                            <div class="date"><span class="icon icon-clock"></span> <?php echo get_the_date(null, $post->ID); ?></div>
                                        </div>
                                    </a>
                                </div>
                        </article>
                        <?php endforeach;?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif;  ?>
<?php get_footer(); ?>