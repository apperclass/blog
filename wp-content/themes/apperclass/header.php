<?php
$s = '';
$searchIsOpen = false;
if(isset($_GET['s'])){
    $s = $_GET['s'];
    $searchIsOpen = true;
};

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class('apperclass-gradient'); ?>>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-57365750-1', 'auto');
        ga('send', 'pageview');
    </script>
    <div id="category-overlay"></div>
    <div class="main-header">
        <div class="row">
            <h1 class="blog-title-wrapper">
                <a class="blog-logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-logo.png" alt="Apperclass Blog"></a>

                <?php if(is_category()):?>
                    <a class="blog-section-title" href="#"><?php single_cat_title(); ?></a>
                <?php endif; ?>

                <div class="clearfix"></div>
            </h1>

                <form class="search-form">
                    <span class="form-icon"><span class="icon-search"></span></span><input class="<?php if($searchIsOpen){ echo "focused"; }?>" name="s" type="search" value="<?php echo $s; ?>" >
                </form>
                <div class="clearfix"></div>
        </div>
    </div>