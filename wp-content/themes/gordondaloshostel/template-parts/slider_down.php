<?php
//$query1 = new WP_Query('page_id=20');
//while($query1->have_posts()) $query1->the_post(); ;?>
<!--<div class="entry-content">-->
<!--    --><?php //the_content(); ?>
<!--</div> --><?php //wp_reset_query();
//?>

<section class="slider_down">
    <h2>Акции в #ulahostel</h2>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!--    <ol class="carousel-indicators">-->
        <!--        <li data-target="#myCarousel" data-slide-to="0" class=""></li>-->
        <!--        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>-->
        <!--        <li data-target="#myCarousel" data-slide-to="2"></li>-->
        <!--    </ol>-->


        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php bloginfo('template_directory') ?>/img/kalendar.jpg" alt="">

                <div class="container-fluide">

                    <div class="carousel-caption">
                        <h6>Месяц проживания в хостеле всего 12.000 рублей</h6>


                        <a href="#" class="btn btn-success btn-lg">Бронировать</a>
                    </div>


                </div>


            </div>
            <div class="item ">
                <img src="<?php bloginfo('template_directory') ?>/img/sales.jpg" alt="">

                <div class="container-fluide">
                    <div class="carousel-caption">
                        <h6>Текст второй акции</h6>


                        <a href="#" class="btn btn-success btn-lg">Бронировать</a>
                    </div>
                </div>
            </div>

        </div>


<!--        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
<!--            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--            <span class="sr-only">Previous</span>-->
<!--        </a>-->
<!--        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
<!--            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--            <span class="sr-only">Next</span>-->
<!--        </a>-->

    </div>

</section>