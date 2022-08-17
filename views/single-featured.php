<?php
get_header();
$related = new WP_Query(array(
    'category_name' => 'Featured',
    'posts_per_page' => 4,
    'orderby'       => 'rand',
    'post__not_in'   => array(get_the_ID())
));
?>

<div class="single-wrapper">
    <div class="container">
        <!-- breadcrimb -->
        <ul class="single-breadcrimb-list">
            <li><a href="<?php echo home_url() ?>">HOME</a></li>
            <li>Article</li>
        </ul>

        <!-- content -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section class="single-content-block">
                    <div class="row">
                        <!-- cover -->
                        <div class="col-md-5 col-xl-6">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                        </div>
                        <!-- discription -->
                        <div class="col-md-7 col-xl-6">
                            <article class="single-main-content page-content">
                                <h1><?php the_title() ?></h1>
                                <p><?php the_content() ?> </p>
                            </article>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- related -->
        <section class="single-related-block">
            <h3>Related posts</h3>
            <?php if ($related->have_posts()) : ?>
                <div class="row">
                    <?php while ($related->have_posts()) : $related->the_post(); ?>

                        <div class="col-6 col-md-3">
                            <div class="related-item">
                                <a href="<?php echo get_the_permalink() ?>" class="related-image" title="<?php the_title() ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'product') ?>" alt="<?php the_title() ?>">
                                </a>
                                <p class="related-name"><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </section>
    </div>
</div>

<?php get_footer() ?>