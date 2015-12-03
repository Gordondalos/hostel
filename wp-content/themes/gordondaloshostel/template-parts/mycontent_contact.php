<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 mycontent">
            <h2 class="wow fadeInUpBig"><?php echo get_post_meta($post->ID, 'zagolovok', true); ?></h2>

           <div class="col-md-12">
               <?php the_post()?>
               <?php the_content(); ?>
           </div>
           <div class="col-md-6 maps">
               <?php echo get_post_meta($post->ID, 'map', true); ?>
           </div>
           <div class="col-md-6 adres_phone">
               <h3><?php echo get_post_meta($post->ID, 'adress', true); ?></h3>
               <h3><?php echo get_post_meta($post->ID, 'phone', true); ?></h3>
               <h3><?php echo get_post_meta($post->ID, 'mail', true); ?></h3>
           </div>

           <div class="col-md-12">
               <img src="<?php echo get_post_meta($post->ID, 'image', true); ?>" alt="">

           </div>





        </div>
    </div>
</div>


