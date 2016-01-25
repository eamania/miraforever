<div class="col-md-6 navigation-article-footer">
                <div class="row">
                    <?php previous_post('&laquo; %', '', 'yes'); ?>
<?php
$prev_post = get_previous_post();
if (!empty($prev_post)): ?>
    <a href="<?php echo get_permalink($prev_post->ID); ?>"><?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail', array(60, 60)); ?></a>
<?php endif; ?>

</div>
</div>
<div class="col-md-6 navigation-article-footer" style="text-align: right;">
    <div class="row">
        <?php
        $next_post = get_next_post();
        if (!empty($next_post)): ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>"><?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail', array(60, 60)); ?> </a>
        <?php endif; ?>

        <?php next_post(' % &raquo; ', '', 'yes'); ?>
    </div>
</div>
