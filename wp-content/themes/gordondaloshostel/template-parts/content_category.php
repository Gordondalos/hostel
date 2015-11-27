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
                while (have_posts()) : the_post(); ?>
                    <h3>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="
                        <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </h3>
<!--                    <small>--><?php //the_time('F jS, Y') ?><!-- by --><?php //the_author_posts_link() ?><!--</small>-->

                    <div class="entry">
                        <?php the_content ('',true);  ?>


                        <!--                        <p class="postmetadata">--><?php
//                            comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
//                            ?>
<!--                        </p>-->
                    </div>



                <?php endwhile;

                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>

                <?php endif; ?>
        </div>
    </div>







