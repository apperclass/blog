<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class('apperclass-gradient'); ?>>

    <div class="main-header">
        <div class="row">
            <h1 class="blog-title-wrapper">
                <a class="blog-logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-logo.png" alt="Apperclass Blog"></a>
                <a class="blog-section-title" href="/">HTML5</a>
                <div class="clearfix"></div>
            </h1>

                <form class="search-form">
                    <span class="form-icon"><span class="icon-search"></span></span><input name="s" type="search">
                </form>
                <div class="clearfix"></div>
        </div>
    </div>