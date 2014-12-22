<?php get_header(); ?>
    <div id="main-content" class="main-content post-single">
        <div class="row">
            <div class="small-12 large-9 columns">
                <div class="box">
                    <div class="post-detail">
                        <h2>Development</h2>
                        <h1><?php the_title(); ?></h1>
                        <div class="post-info">
                            <div class="date"><span class="icon icon-clock"></span> December 27, 2014</div>
                        </div>
                        <div class="post-content">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                            Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
                        </div>
                    </div>
                    <div class="post-bottom">
                        <div class="post-info">
                            <span class="icon icon-tag"></span> <a href="asd">Html5</a>, <a href="asd">PHP</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-3 columns">
                <div class="box">
                    <div class="author-box">
                        <a href="" class="avatar">
                            <img class="mask" src="<?php echo get_template_directory_uri() . '/assets/images/hexagon-white-mask.png' ?>">
                            <img class="picture" src="<?php echo get_template_directory_uri() . '/assets/images/alby.jpg' ?>">
                        </a>
                        <div class="author-details">
                            <h1>Matteo Orioli</h1>
                            <h2>Published Articles: 12</h2>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <aside>
                    <h1>Recent Articles</h1>
                        <?php for($i=0;$i<5;$i++): ?>
                        <article>
                            <a href="">
                                <div class="article-body">
                                    <h2>Development</h2>
                                    <h1><?php the_title(); ?></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula [...]</p>
                                </div>
                                <footer class="post-info">
                                    <div class="date"><span class="icon icon-clock"></span> December 27, 2014</div>
                                </footer>
                            </a>
                        </article>
                        <?php endfor;?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>