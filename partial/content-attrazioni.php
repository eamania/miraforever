<?php
/**
 * @package miraforever
 */
?>

<div id="attr_page" class="col-wrap">
    <div class="site-content">
        <div id="primary" class="content-area col-md-9">
            <main id="main" class="site-main" role="main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <div id="content-article-header" class="article-content">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                            <h4 style="font-weight: lighter; line-height: 150%">  <?php the_excerpt(); ?></h4>

                            <?php
                            $format = get_post_format();
                            switch ($format) {
                                case 'video':
                                    $videoEmbed = get_post_meta($post->ID, 'VideoEmbed', true);
                                    echo " <div class='embed-responsive embed-responsive-16by9'>$videoEmbed</div>";
                                    break;
                                case 'image':
                                    /* template image*/
                                    break;
                                default:

                                    the_post_thumbnail('thumbnails_article_big', array('class' => "article-featured-image img-responsive"));
                            }
                            ?>


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
                        <?php //miraforever_entry_footer(); ?>
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
        </div>
        <!-- #primary -->
    </div>

    <div id="sidebar-article" class="col-md-3 sidebar-article col">
         <span style="font-weight: 300; font-size: 16px;">

        <?php
        include(locate_template('partial/attrazioni/caratteristiche.php'));
        echo "<h1>About</h1>";
        if ($nome_completo != NULL) {
            echo "<b>Nome:</b> " . $nome_completo . "</br>";
        }
        if ($tipologia != NULL) {
            echo "<b>Tipologia: </b> " . $tipologia . "</br>";
        }
        if ($velocita != NULL) {
            echo "<b>Velocità:</b>  " . $velocita . "</br>";
        }
        if ($anno_costruzione != NULL) {
            echo "<b>Anno di Costruzione: </b> " . $anno_costruzione . "</br>";
        }
        if ($altezza != NULL) {
            echo "<b>Altezza: </b> " . $altezza . "</br>";
        }
        if ($lunghezza != NULL) {
            echo "<b>Lunghezza: </b> " . $lunghezza . "</br>";
        }
        if ($capacita != NULL) {
            echo "<b>Capacità: </b> " . $capacita . "</br>";
        }
        if ($casa_Costruttrice != NULL) {
            echo "<b>Casa Costruttrice:</b>  " . $casa_Costruttrice . "</br>";
        }
        if ($durata != NULL) {
            echo "<b>Durata: </b> " . $durata . "</br>";
        }
        if ($elementi != NULL) {
            echo "<b>Elementi:</b>  " . $elementi . "</br>";
        }
        if ($gforce != NULL) {
            echo "<b>Gforce:</b>  " . $gforce . "</br>";
        }
        if ($inversioni != NULL) {
            echo "<b>Inversioni:</b>  " . $inversioni . "</br>";
        }
        if ($puntofoto != NULL) {
            echo "<b>Punto Foto:</b>  " . $puntofoto . "</br>";
        }
        if ($vmf != NULL) {
            echo "<b>Voto Miraforever:</b>  " . $vmf . "</br></br>";
        }

        ?>
        </span>
        <?php get_sidebar(); ?>
    </div>
</div>

