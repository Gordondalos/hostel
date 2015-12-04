<div id="stuck_container" class="stuck_container">
    <div class="container">
        <div class="row">
            <div class="logo2">
                <div class="col-sm-6">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo">
                    </a>

                </div>

                <div class="col-sm-6">
                    <div class="lang">
                        <a href="?page_id=2&lang=ru"><img src="<?php bloginfo('template_directory') ?>/img/rus.png"
                                                          alt=""></a>
                        <a href="?page_id=61&lang=en"><img src="<?php bloginfo('template_directory') ?>/img/eng.png"
                                                           alt=""></a>
                    </div>
                    <a class="social" href="https://www.instagram.com/ulahostel/"> <img
                            src="<?php bloginfo('template_directory') ?>/img/instagram.png"
                            alt="logo"></a>
                    <a class="social" href="https://vk.com/ulahostel"><img
                            src="<?php bloginfo('template_directory') ?>/img/vk.png" alt="logo"></a>


                </div>

            </div>
        </div>
    </div>


    <nav class="navbar navbar-default navbar-static-top text-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="logo">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo">
                        </a>


                        <div class="lang">
                            <a href="?page_id=2&lang=ru"><img src="<?php bloginfo('template_directory') ?>/img/rus.png"
                                                              alt=""></a>
                            <a href="?page_id=61&lang=en"><img src="<?php bloginfo('template_directory') ?>/img/eng.png"
                                                               alt=""></a>
                        </div>
                        <a class="social" href="https://www.instagram.com/ulahostel/"> <img
                                src="<?php bloginfo('template_directory') ?>/img/instagram.png"
                                alt="logo"></a>
                        <a class="social" href="https://vk.com/ulahostel"><img
                                src="<?php bloginfo('template_directory') ?>/img/vk.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <?php wp_nav_menu(array('menu' => 'main', 'menu_class' => 'navbar-nav sf-menu', 'data-type' => 'navbar')); ?>

                </div>


            </div>


        </div>

    </nav>
</div>

<!-- Block toogle_menu -->
<div class="toogle_menu">
    <a id="toggle_menu" href="#">
        <i class="fa fa-bars"></i>
    </a>
</div>
<!-- end block toogle_menu -->

<!-- Block hiden_menu -->
<div class="hidden_menu">
    <a href="<?php bloginfo('url'); ?>">
        <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo">
    </a>
    <br>
    <br>
    <?php wp_nav_menu(array('menu' => 'main', 'menu_class' => 'navbar-nav sf-menu', 'data-type' => 'navbar')); ?>

    <a href="#" class="menu_btn btn btn-success btn-lg">Бронировать</a>
    <!-- Block arrow -->
    <div class="arrow">

        <div class="arrow_left">
            <a id="hidden_menu" href="#">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>

        </div>
    </div>
    <!-- end block arrow -->

</div>
<!-- end block hiden_menu -->




