<?php
/*
Template Name: About Template
*/
get_header(); ?>
<div class="row tm-row tm-mb-45">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about-01.jpg" alt="Image" class="img-fluid">
    </div>
</div>
<div class="row tm-row tm-mb-40">
    <div class="col-12">
        <div class="mb-4">
            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">About this xtra blog</h2>
            <p>
                You can immediately download
                <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog Template</a>
                from TemplateMo website for 100% free of charge. Etiam vehicula, tortor ac eleifend tincidunt, diam neque pellentesque ipsum,
                a geugiat eros mauris eget lorem. Quisque in
                bibendum elit, in egestas turpis. Vestibulum ornare sollicitudin congue. Aliquam lorem mi, maximus at iaculis ut, viverra vel
                mauris. Duis congue luctus metus, sodales tincidunt lectus fringilla ut. Nunc tempus at magna sed vestibulum.
            </p>
            <p>
                Proin et arcu ligula. Praesent quis erat eu est solliditudin tristique ut in arcu. Donec bibendum ex id ligula semper dictum.
                Proin malesuada luctus auctor. Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in
                malesuada nulla magna ut enim. Morbi lacinia magna sed sapien auctor, vitae luctus nunc cursus.
            </p>
        </div>
    </div>
</div>
<div class="row tm-row tm-mb-120">
    <div class="col-lg-4 tm-about-col">
        <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
                <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Background</h2>
            <p class="mb-0 tm-line-height-short">
                Phasellus pulvinar nisl ornare leo porttitor, et vestibulum lorem semper.
                Duis risus ex, molestie sit amet magna in,
                pharetra pellentesque est. Curabitur elit metus.
            </p>
        </div>
    </div>
    <div class="col-lg-4 tm-about-col">
        <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
                <i class="fas fa-users-cog fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Teamwork</h2>
            <p class="mb-0 tm-line-height-short">
                Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in malesuada nulla magna ut enim.
                Morbi lacinia magna sed auctor, vitae nunc cursus.
            </p>
        </div>
    </div>
    <div class="col-lg-4 tm-about-col">
        <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
                <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Our Core Value</h2>
            <p class="mb-0 tm-line-height-short">
                Nunc mi ante, suscipit vel dapibus et, volutpat sit amet ante. In tempor nec sem vitae varius. Aliquam tincidunt orci sem, et imperdiet massa consectetur nec.
            </p>
        </div>
    </div>
</div>
<div class="row tm-row tm-mb-60">
    <div class="col-12">
        <hr class="tm-hr-primary  tm-mb-55">
    </div>

    <?php
    $about_teams = new WP_Query(array(
        'post_type' => 'teams',
        'posts_per_page' => 4,
        'order' => 'ASC'
    ));
    while ($about_teams->have_posts()) : $about_teams->the_post(); ?>
        <div class="col-lg-6 tm-mb-60 tm-person-col">
            <div class="media tm-person">
                <?php $team_photo = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                <img src="<?php echo $team_photo; ?>" alt="<?php the_title(); ?>" class="img-fluid mr-4">
                <div class="media-body">
                    <h2 class="tm-color-primary tm-post-title mb-2"><?php the_title(); ?></h2>
                    <h3 class="tm-h3 mb-3"> <?php the_coder_field('cits_Designation'); ?></h3>
                    <p class="mb-0 tm-line-height-short">
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

</div>
<?php get_footer(); ?>