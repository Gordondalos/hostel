<?php
$query1 = new WP_Query('page_id=50');
while($query1->have_posts()) $query1->the_post(); ;?>
<div class="entry-content">
    <?php the_content(); ?>
</div> <?php wp_reset_query();
?>

<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63952.956468702505!2d30.265299312964384!3d59-->
<!--.939942607829096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13-->
<!--.1!3m3!1m2!1s0x4696378cc74a65ed%3A0x6dc7673fab848eff!2z0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LM!5e0!3m2!1sru!2sru-->
<!--!4v1448396088421" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>-->