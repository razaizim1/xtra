<?php get_header(); ?>
<aside class="col-lg-4 tm-aside-col">
    <div class="tm-post-sidebar">

        <?php dynamic_sidebar('blogsidebar'); ?>

        <hr class="mb-3 tm-hr-primary">
        <h2 class="tm-mb-40 tm-post-title tm-color-primary">Recent Posts</h2>
        <?php
        $recent_posts = new WP_Query(
            array(
                'post_type' => 'post',
                'posts_per_page' => 2
            )
        ); ?>

        <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <a href="#" class="d-block tm-mb-40">
                <figure>
                    <?php $post_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                    <img src="<?php echo $post_image ?>;" alt="Image" class="mb-3 img-fluid">
                    <figcaption class="tm-color-primary"><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></figcaption>

                </figure>
            </a>
        <?php endwhile; ?>
    </div>
</aside>
<?php get_footer(); ?>