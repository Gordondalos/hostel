<?php
/**
 * A Simple Category Template
 */

?>

<div class="container mycontent">
    <div class="row">
        <?php if (have_posts()) : ?>

        <header class="archive-header">
            <h1 class="archive-title"><?php echo single_cat_title('', false); ?></h1>


            <?php if (category_description()) : ?>
                <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>


            <?php

            // Цикл


            while (have_posts()) :
            the_post(); ?>


            <?php
            if (!empty(get_post_meta($post->ID, 'img', true))) {

            ?>

            <div class="post_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12">
                            <div class="img-post-wrap">
                                <img src="<?php echo get_post_meta($post->ID, 'img', true); ?>" alt="img">
                            </div>

                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="text">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>

                                <div class="entry">
                                    <?php the_content('', true); ?>
                                </div>
                            </div>

                            <div class="wrap-icon">
                                <div class="col-xs-4"><?php echo get_post_meta($post->ID, 'price', true); ?> </div>
                                <div class="col-xs-4"><img src="<?php bloginfo('template_directory') ?>/img/bath.png"
                                                           alt=""><?php echo get_post_meta($post->ID, 'rooms', true); ?>
                                </div>
                                <div class="col-xs-4"><img src="<?php bloginfo('template_directory') ?>/img/bed.png"
                                                           alt=""><?php echo get_post_meta($post->ID, 'beds', true); ?>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <a class="123" href="<?php the_permalink() ?>" rel="bookmark"
                               title="<?php the_title_attribute(); ?>">
                            <span class="ditail">
                                <?php echo get_post_meta($post->ID, 'ditail', true); ?>
                            </span>
                            </a>
                        </div>


                    </div>
                </div>


            </div>


    </div>

    <?php } else {
        ?>
        <div class="post_content">

            <div class="col-sm-12">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </a>

                <div class="entry">
                    <?php the_content('', true); ?>

                    <a href="<?php the_permalink() ?>" rel="bookmark"
                       title="<?php the_title_attribute(); ?>">
                        <?php echo get_post_meta($post->ID, 'detailss', true); ?>
                    </a>
                </div>


            </div>
        </div>


        <?php

    }


    endwhile;


    else: ?>
        <p>Sorry, no posts matched your criteria.</p>

    <?php endif; ?>
</div>
</div>







