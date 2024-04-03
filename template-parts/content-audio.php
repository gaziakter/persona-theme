<?php $audio_url = get_field('insert_audio_url'); ?>


<article id="post-<?php the_ID(); ?>"
    class="<?php post_class( 'persona-formate-audio postbox__item format-audio mb-50 transition-3' ); ?>">
    <?php if(!empty($audio_url)): ?>
    <div class="postbox__thumb postbox__audio w-img p-relative">
       <?php echo wp_oembed_get($audio_url); ?>
    </div>
    <?php endif; ?>

    <div class="postbox__content">
        <?php echo get_template_part( 'template-parts/blog/post-meta' ) ?>
        <h3 class="postbox__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="postbox__text">
            <?php the_excerpt(); ?>
        </div>
        <div class="postbox__read-more">
            <a href="<?php the_permalink(); ?>" class="tp-btn">read more</a>
        </div>
    </div>
</article>