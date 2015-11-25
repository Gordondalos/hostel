<?php
$query1 = new WP_Query('page_id=20');
while($query1->have_posts()) $query1->the_post(); ;?>
<div class="entry-content">
    <?php the_content(); ?>
</div> <?php wp_reset_query();
?>
<a href="#" id="toTop" class="toTop fa fa-angle-up" style="display: block;"></a>

<!--<div class="container-fluid cf">-->
<!---->
<!--    <div class="container">-->
<!--        <div class="row ">-->
<!--            <div class="wrap_phone_lang">-->
<!--                <div class="phone_lang">-->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 lang"><i class="fa fa-globe"></i>-->
<!--                        <a href="?page_id=2&lang=ru"> Ру</a> /-->
<!--                        <a href="?page_id=61&lang=en"> En</a></div>-->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4">-->
<!--                        <img src="--><?php //bloginfo('template_directory') ?><!--/img/logo.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 phone"><i class="fa fa-phone-square"></i> +7(495)555-55-55</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!---->
<!---->
<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">-->
<!--
<!--    <ol class="carousel-indicators">-->
<!--        <li data-target="#myCarousel" data-slide-to="0" class=""></li>-->
<!--        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>-->
<!--        <li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--    </ol>-->
<!--    <div class="carousel-inner" role="listbox">-->
<!--        <div class="item">-->
<!--            <img src="--><?php //bloginfo('template_directory') ?><!--/img/page-1_slide01.jpg" alt="">-->
<!---->
<!--            <div class="container">-->
<!--                <div class="carousel-caption">-->
<!--                    <h2>Example headline.</h2>-->
<!---->
<!--                    <p>Note: If you're viewing this page via a-->
<!--                        <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.-->
<!--                    </p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item active">-->
<!--            <img src="--><?php //bloginfo('template_directory') ?><!--/img/page-1_slide02.jpg" alt="">-->
<!---->
<!--            <div class="container">-->
<!--                <div class="carousel-caption">-->
<!--                    <h2>Another example headline.</h2>-->
<!---->
<!--                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item">-->
<!--            <img src="--><?php //bloginfo('template_directory') ?><!--/img/page-1_slide03.jpg" alt="">-->
<!---->
<!--            <div class="container">-->
<!--                <div class="carousel-caption">-->
<!--                    <h2>One more for good measure.</h2>-->
<!---->
<!--                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
<!--        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--        <span class="sr-only">Previous</span>-->
<!--    </a>-->
<!--    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
<!--        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--        <span class="sr-only">Next</span>-->
<!--    </a>-->
<!--</div>-->



<!--Для вставки если потечет-->
<!--<div class="container-fluid cf"><div class="container"><div class="row "><div class="wrap_phone_lang"><div class="phone_lang"><div class="col-lg-4 col-md-4 col-sm-4 lang"><i class="fa fa-globe"></i><a href="?page_id=2&amp;lang=ru"> Ру</a> / <a href="?page_id=61&amp;lang=en"> En</a></div><div class="col-lg-4 col-md-4 col-sm-4"><img src="wp-content/themes/gordondaloshostel/img/logo.png" alt="" /></div><div class="col-lg-4 col-md-4 col-sm-4 phone"><i class="fa fa-phone-square"></i> +7(495)555-55-55</div></div></div></div></div></div><div id="myCarousel" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="item"><img src="wp-content/themes/gordondaloshostel/img/page-1_slide01.jpg" alt="" /><div class="container"><div class="carousel-caption"><h2>Example headline.</h2>Note: If you're viewing this page via a<code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</div></div></div><div class="item active"><img src="wp-content/themes/gordondaloshostel/img/page-1_slide02.jpg" alt="" /><div class="container"><div class="carousel-caption"><h2>Another example headline.</h2>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div></div></div><div class="item"><img src="wp-content/themes/gordondaloshostel/img/page-1_slide03.jpg" alt="" /><div class="container"><div class="carousel-caption"><h2>One more for good measure.</h2>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div></div></div></div> <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>-->