
<?php $video_url = function_exists('get_field') ? get_field('insert_video_url'): null; ?>

<?php if(is_single( )) : ?>
<article id="post-<?php the_ID(); ?>" class="<?php post_class( 'persona-single-page' ); ?>">

<?php if(has_post_thumbnail()): ?>
    <div class="postbox__thumb postbox__video w-img p-relative">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
        <?php if(!empty($video_url)): ?>
        <a href="<?php echo esc_url( $video_url ); ?>" class="play-btn pulse-btn popup-video"><i class="fas fa-play"></i></a>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- Start post meta -->>
    <?php echo get_template_part( 'template-parts/blog/post-meta' ); ?>

    <div class="postbox__details-content-wrapper mb-40">
        <?php the_content(); ?>
    </div>

    <div class="postbox__share-wrapper mb-60">
        <div class="row align-items-center">
            <div class="col-xl-7">
                <div class="tagcloud tagcloud-sm">
                    <span><?php echo esc_html__('Tags:', 'persona'  ); ?></span>
                    <?php persona_tags(); ?>
                </div>
            </div>
            <div class="col-xl-5">
                <?php persona_social_share(); ?>
            </div>
        </div>
    </div>
</article>
<?php else : ?>

<article id="post-<?php the_ID(); ?>"
    class="<?php post_class( 'persona-formate-video postbox__item format-video mb-50 transition-3' ); ?>">
    
    <?php if(has_post_thumbnail()): ?>
    <div class="postbox__thumb postbox__video w-img p-relative">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
        <?php if(!empty($video_url)): ?>
        <a href="<?php echo esc_url( $video_url ); ?>" class="play-btn pulse-btn popup-video"><i class="fas fa-play"></i></a>
        <?php endif; ?>
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

<?php endif; ?>