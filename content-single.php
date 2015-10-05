<?php
/**
 * @package miraforever
 */
?>


<div id="primary" class="content-area col-md-9 ">
    <main id="main" class="site-main" role="main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <div id="content-article-header">

                    <?php the_post_thumbnail('thumbnails_article_big', array('class' => "img-responsive")); ?>
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                    <?php miraforever_posted_on(); ?>
                </div>
                <div class="entry-meta">
                </div>
                <!-- .entry-meta -->
            </header>
            <!-- .entry-header -->


            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'miraforever'),
                    'after' => '</div>',
                ));
                ?>
            </div>
            <!-- .entry-content -->

            <footer class="entry-footer">
                <?php miraforever_entry_footer(); ?>
            </footer>
            <!-- .entry-footer -->
        </article>
        <!-- #post-## -->
    </main>
    <!-- #main -->
    <?php the_post_navigation(); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    ?>
</div><!-- #primary -->


<div id="sidebar-article" class="col-md-3">
    <?php get_sidebar(); ?>
</div>