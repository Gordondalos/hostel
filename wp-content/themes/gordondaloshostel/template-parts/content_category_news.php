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

            <div class="container">
                <div class="row">


            <?php

            // Цикл

            while (have_posts()) : the_post(); ?>

                <!-- Block item_news_wrapper -->
                <div class="col-md-3 ">
                    <div class="item_news_wrapper">

                        <a href="<?php the_permalink() ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'img', true); ?>" alt="img">
                            <div class="text">
                                <h4><?php the_title(); ?></h4>


                                    <?php echo get_post_meta($post->ID, 'text', true); ?>


                            </div>
                        </a>
                    </div>
                </div>
                <!-- end block item_news_wrapper -->

                <?php
            endwhile;
?>
                </div>
            </div>
                    <?php

            else: ?>
                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>
    </div>
</div>







