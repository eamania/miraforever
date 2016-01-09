<?php
/**
 * @package miraforever
 */
?>

<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnails_article_big', false); ?>

<div id="carousel-header" class="carousel  carousel-fade slide"
     style="background-image: url('<?php echo $url; ?>');background-repeat: no-repeat; background-position: center; background-size: cover">
    <!-- Indicators -->
    <?php while (have_posts()) : the_post();


        ?>

        <?php $sfondo = "the_post_thumbnail('thumbnails_article_big', array('class' => 'article-featured-image img-responsive'));"; ?>
        <div class="article-center-header" style=" ">
            <div class="container" style="background-color: rgba(0, 0, 0, 0.75); color: white; padding: 20px;  ">
                <div class="row article-center-header-trans">
                    <div
                        class="col-lg-5 col-md-4"><?php the_title('<h1 class="entry-title" style="margin-top: 0;">', '</h1>'); ?>
                        <div class="article-header-text">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="article-header-text">
                            <?php echo do_shortcode('[yasr_visitor_votes size="large"]'); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5" style="padding-left:32px;">
                        <?php echo do_shortcode('[gallery  limit="4"]'); ?>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <span style="font-weight: 300; font-size: 16px;">

                             <?php
                             //get_template_part("partial/attrazioni/caratteristiche");

                             include(locate_template('partial/attrazioni/caratteristiche.php'));
                             if ($nome_completo != NULL) {
                                 echo "<b>Nome:</b> " . $nome_completo . "</br>";
                             }
                             if ($tipologia != NULL) {
                                 echo "<b>Tipologia: </b> " . $tipologia . "</br>";
                             }
                             if ($velocita != NULL) {
                                 echo "<b>Velocità:</b>  " . $velocita . "</br>";
                             }
                             if ($altezza != NULL) {
                                 echo "<b>Altezza: </b> " . $altezza . "</br>";
                             }
                             if ($lunghezza != NULL) {
                                 echo "<b>Lunghezza: </b> " . $lunghezza . "</br>";
                             }
                             ?>

                        </span>
                        <ul>
                            <li><a href="#photogallery"> Foto Gallery di <?php the_title();; ?> </a></li>
                            <li>Video di <?php the_title();; ?> </li>
                            <li>La scheda di <?php the_title();; ?> </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>


    <?php endwhile; // end of the loop. ?>
</div><!--carousel header-->
