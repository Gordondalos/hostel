

<?php
$query1 = new WP_Query('page_id=20');
while($query1->have_posts()) $query1->the_post(); ;?>
<div class="entry-content">
    <?php the_content(); ?>
</div> <?php wp_reset_query();
?>

<!---->
<!---->
<!--<section class="camera_container">-->
<!--    <div class="container phone_lang">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4"><i class="fa fa-globe"></i>  <a href="#"> Ру</a> / <a href="#"> En</a></div>-->
<!--            <div class="col-md-4"></div>-->
<!--            <div class="col-md-4"><i class="fa fa-phone-square"></i> --><?php //bloginfo('description'); ?><!--</div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="navbar-header">-->
<!---->
<!--        <h1 class="navbar-brand">-->
<!---->
<!---->
<!--            <a data-type='rd-navbar-brand' href="./">-->
<!--                <small></small>-->
<!--            </a>-->
<!--        </h1>-->
<!--    </div>-->
<!---->
<!--    <div id="camera" class="camera_wrap">-->
<!--        <div data-src="--><?php //bloginfo('template_directory')?><!--/img/page-1_slide01.jpg">-->
<!--            <div class="camera_caption fadeIn">-->
<!--                <div class="jumbotron">-->
<!--                    <h3>-->
<!--                        Enjoy-->
<!--                    </h3>-->
<!---->
<!--                    <p>-->
<!--                        your stay with us!<br/>-->
<!--                        Friendly, cheap and comfortable stay!-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div data-src="--><?php //bloginfo('template_directory')?><!--/img/page-1_slide02.jpg">-->
<!--            <div class="camera_caption fadeIn">-->
<!--                <div class="jumbotron">-->
<!--                    <h3>-->
<!--                        You-->
<!--                    </h3>-->
<!---->
<!--                    <p>-->
<!--                        don't have to pay<br/>-->
<!--                        a fortune for a room!-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div data-src="--><?php //bloginfo('template_directory')?><!--/img/page-1_slide03.jpg">-->
<!--            <div class="camera_caption fadeIn">-->
<!--                <div class="jumbotron">-->
<!--                    <h3>-->
<!--                        Take-->
<!--                    </h3>-->
<!---->
<!--                    <p>-->
<!--                        advantage of the budget<br/>-->
<!--                        oriented accommodation-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->