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
        <div class="item active">
            <img src="<?php bloginfo('template_directory') ?>/img/page-1_slide01.jpg" alt="">


            <div class="container-fluide">

                <div class="carousel-caption">
                    <h2>#UlaHostel</h2>

                   <p>Мы уже ждем вас.</p>
                    <a href="#" class="btn btn-success btn-lg">Бронировать</a>
                </div>


            </div>


        </div>
        <div class="item ">
            <img src="<?php bloginfo('template_directory') ?>/img/page-1_slide02.jpg" alt="">

            <div class="container-fluide">
                <div class="carousel-caption">
                    <h2>Декабристов, 22</h2>

                    <p>Удобное расположение</p>
                    <a href="#" class="btn btn-success btn-lg">Бронировать</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php bloginfo('template_directory') ?>/img/page-1_slide03.jpg" alt="">

            <div class="container-fluide">
                <div class="carousel-caption">
                    <a class="social" href="https://vk.com/ulahostel"> <img src="<?php bloginfo('template_directory') ?>/img/instagram.png"
                                                                            alt="logo"></a>
                    <a class="social" href="https://www.instagram.com/ulahostel/"><img src="<?php bloginfo('template_directory') ?>/img/vk.png" alt="logo"></a>


                    <p>Присоединяйтесь к нам в instagram и vk</p>
                    <a href="#" class="btn btn-success btn-lg">Бронировать</a>
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

