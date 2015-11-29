<?php
//$query1 = new WP_Query('page_id=20');
//while($query1->have_posts()) $query1->the_post(); ;?>
<!--<div class="entry-content">-->
<!--    --><?php //the_content(); ?>
<!--</div> --><?php //wp_reset_query();
//?>



<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
        <div class="item">
            <img src="<?php bloginfo('template_directory') ?>/img/page-1_slide01.jpg" alt="">

            <div class="container-fluide">
                <div class="carousel-caption">
                    <h2>#UlaHostel</h2>

                    <p>Note: If you're viewing this page via a
                        <code>file://</code> URL, the "next" and "previous" <br> Glyphicon buttons on the left and right might
                        not load/display properly due to web browser security rules.
                    </p>

                </div>
            </div>
        </div>
        <div class="item active">
            <img src="<?php bloginfo('template_directory') ?>/img/page-1_slide02.jpg" alt="">

            <div class="container-fluide">
                <div class="carousel-caption">
                    <h2>Another example headline.</h2>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. <br> Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php bloginfo('template_directory') ?>/img/page-1_slide03.jpg" alt="">

            <div class="container-fluide">
                <div class="carousel-caption">
                    <h2>Another example headline.</h2>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. <br> Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                </div>
            </div>
        </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

