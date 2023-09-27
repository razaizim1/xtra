<?php get_header(); ?>

<div class="row tm-row">
    <div class="col-12 post-thumbnail">
        <hr class="tm-hr-primary tm-mb-55">
        <!-- Video player 1422x800 -->
        <?php the_post_thumbnail(); ?>
    </div>
</div>
<div class="row tm-row">
    <div class="col-lg-8 tm-post-col">
        <div class="tm-post-full">
            <div class="mb-4">
                <h2 class="pt-2 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                <p class="tm-mb-40"><?php the_time('F d, Y'); ?> posted by <?php the_author(); ?></p>
                <p>
                    This is a description of the video post. You can also have an image instead of
                    the video. You can free download
                    <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog Template</a>
                    from TemplateMo website. Phasellus maximus quis est sit amet maximus. Vestibulum vel rutrum
                    lorem, ac sodales augue. Aliquam erat volutpat. Duis lectus orci, blandit in arcu
                    est, elementum tincidunt lectus. Praesent vel justo tempor, varius lacus a,
                    pharetra lacus.
                </p>
                <p>
                    Duis pretium efficitur nunc. Mauris vehicula nibh nisi. Curabitur gravida neque
                    dignissim, aliquet nulla sed, condimentum nulla. Pellentesque id venenatis
                    quam, id cursus velit. Fusce semper tortor ac metus iaculis varius. Praesent
                    aliquam ex vel lectus ornare tristique. Nunc et eros quis enim feugiat tincidunt
                    et vitae dui.
                </p>
                <span class="d-block text-right tm-color-primary">
                    <?php
                    $categories = get_the_category(get_the_ID());
                    foreach ($categories as $category) {
                        echo $category->name . ' ';
                    }; ?></span>
            </div>

            <!-- Comments -->
            <div>
                <h2 class="tm-color-primary tm-post-title">Comments</h2>
                <hr class="tm-hr-primary tm-mb-45">
                <?php
                // If comments are open or there is at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }; ?>
            </div>
        </div>
    </div>
    <?php require_once('sidebar.php'); ?>
</div>
<?php get_footer(); ?>