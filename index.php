<?php get_header(); ?>
<div class="row tm-row">

    <?php
    $i = 1;
    while (have_posts()) : the_post(); ?>
        <article class="col-12 col-md-6 tm-post">
            <hr class="tm-hr-primary">
            <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                <div class="tm-post-link-inner">
                    <?php
                    $post_image_url = get_the_post_thumbnail_url(get_the_ID());
                    ?>
                    <img src="<?php echo $post_image_url; ?>" alt="Image" class="img-fluid">
                </div>
                <?php if ($i == 1 or $i == 2) : ?>
                    <span class="position-absolute tm-new-badge">New</span>
                <?php endif; ?>
                <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
            </a>
            <p class="tm-pt-30">
                <?php echo wp_trim_words(get_the_content(), 15, '.....'); ?>
            </p>
            <div class="d-flex justify-content-between tm-pt-45">
                <span class="tm-color-primary">
                    <?php
                    $categories = get_the_category(get_the_ID());
                    foreach ($categories as $category) {
                        echo $category->name . ' ';
                    }
                    ?>
                </span>
                <span class="tm-color-primary"><?php the_time('F d, Y'); ?></span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span><?php echo comments_popup_link('0 Comment', '1 Comment', '% Comments', 'comment'); ?></span>
                <span>by <?php the_author(); ?></span>
            </div>
        </article>
        <?php $i++;; ?>
    <?php endwhile; ?>

</div>
<div class="row tm-row tm-mt-100 tm-mb-75">
    <div class="tm-prev-next-wrapper">
        <?php echo get_previous_posts_link(); ?>
        <?php echo get_next_posts_link(); ?>
    </div>
    <div class="tm-paging-wrapper">
        <nav class="tm-paging-nav d-inline-block">
            <?php the_posts_pagination(array(
                'class' => 'tm-paging-item'
            )); ?>
        </nav>
    </div>
</div>

<?php get_footer(); ?>