<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gordondaloshostel
 */

?>


<!--========================================================
                        FOOTER
=========================================================-->
<?php
//$query1 = new WP_Query('page_id=53');
//while($query1->have_posts()) $query1->the_post(); ;?>
<!--<div class="entry-content">-->
<!--	--><?php //the_content(); ?>
<!--</div> --><?php //wp_reset_query();
//?>


<footer>

<!--	<section class="foot-top bg-primary center767">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-md-6 col-sm-7 col-xs-12">-->
<!--					<h4>-->
<!--						Contacts-->
<!--					</h4>-->
<!---->
<!--					<div class="addr-wr">-->
<!--						<address>-->
<!--							<p>-->
<!--								8901 Marmora Road,<br/>-->
<!--								Glasgow, D04 89GR.-->
<!--							</p>-->
<!--							<dl class="addr1">-->
<!--								<dt>Telephone:</dt>-->
<!--								<dd>-->
<!--									<a href="callto#">+1 800 603 6035</a>-->
<!--								</dd>-->
<!--							</dl>-->
<!--						</address>-->
<!---->
<!--						<address>-->
<!--							<p>-->
<!--								9863 - 9867 Mill Road,<br/>-->
<!--								Cambridge, MG09 99HT.-->
<!--							</p>-->
<!--							<dl class="addr1">-->
<!--								<dt>Telephone:</dt>-->
<!--								<dd>-->
<!--									<a href="callto#">+1 800 603 6035</a>-->
<!--								</dd>-->
<!--							</dl>-->
<!--						</address>-->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--				<div class="col-md-3 col-sm-5 col-xs-12">-->
<!--					<h4>-->
<!--						Information-->
<!--					</h4>-->
<!---->
<!--					<p class="white">Donec eget tellus non </p>-->
<!--					<p class="white">Vestibulum iaculis lacinia est</p>-->
<!---->
<!---->
<!--				</div>-->
<!---->
<!--				<div class="col-md-3 col-sm-12 col-xs-12 center991 offs1">-->
<!--					<h4>-->
<!--						Follow us-->
<!--					</h4>-->
<!---->
<!--					<ul class="inline-list">-->
<!--						<li>-->
<!--							<a href="#" class="fa fa-twitter">twitter</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#" class="fa fa-facebook">facebook</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#" class="fa  fa-google-plus">google-plus</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#" class="fa  fa-rss">rss</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#" class="fa fa-pinterest">pinterest</a>-->
<!--						</li>-->
<!--					</ul>-->
<!---->
<!--				</div>-->
<!---->
<!--			</div>-->
<!--		</div>-->
<!--	</section>-->

	<section class="foot-bot text-center">
		<div class="container">
            <div class="row">
                <div class="logo col-sm-6">
                    <a href="/">
                        <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo">
                    </a>


                    <div class="lang">
                        <a href="?page_id=2&lang=ru"><img src="<?php bloginfo('template_directory') ?>/img/rus.png" alt=""></a>
                        <a href="?page_id=61&lang=en"><img src="<?php bloginfo('template_directory') ?>/img/eng.png" alt=""></a>
                    </div>
                    <a class="social" href="https://www.instagram.com/ulahostel/"> <img src="<?php bloginfo('template_directory') ?>/img/instagram.png"
                                                                            alt="logo"></a>
                    <a class="social" href="https://vk.com/ulahostel"><img src="<?php bloginfo('template_directory') ?>/img/vk.png" alt="logo"></a>
                    <a class="social" href="https://www.facebook.com/groups/ulahostel/"><img src="<?php bloginfo('template_directory') ?>/img/facebook.png" alt="logo"></a>
                    <a class="social" href="http://www.booking.com/hotel/ru/ula-hostel.ru.html"><img src="<?php bloginfo('template_directory') ?>/img/b.png" alt="logo"></a>
                </div>
<div class="col-sm-6 adress">
    <ul>
        <li>г.	Санкт-Петербург, ул. Декабристов, 22</li>
        <li><i class="fa fa-phone-square"></i>+7(812)571-63-63</li>
        <li><i class="fa fa-phone-square"></i>+7(981)771-63-63</li>
        <li>ulahostel@gmail.com</li>
    </ul>
</div>

                


            </div>
		</div>
	</section>
</footer>
</div>



<?php wp_footer(); ?>

