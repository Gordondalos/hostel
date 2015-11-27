<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 mycontent">
            <h2 class="wow fadeInUpBig"><?php the_title(); ?></h2>
            <?php the_post()?>
            <?php the_content(); ?>




            <!--                    плюсо-->
            <script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso==undefined) { window.ifpluso = 1;
                        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                        var h=d[g]('body')[0];
                        h.appendChild(s);
                    }})();</script>
            <div class="pluso" data-background="transparent" data-options="big,round,line,horizontal,nocounter,theme=08" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email"></div>
            <!--                    плюсо-->

        </div>
    </div>
</div>


