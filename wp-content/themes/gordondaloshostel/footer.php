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
<footer>

	<section class="foot-top bg-primary center767">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 col-xs-12">
					<h4>
						Contacts
					</h4>

					<div class="addr-wr">
						<address>
							<p>
								8901 Marmora Road,<br/>
								Glasgow, D04 89GR.
							</p>
							<dl class="addr1">
								<dt>Telephone:</dt>
								<dd>
									<a href="callto#">+1 800 603 6035</a>
								</dd>
							</dl>
						</address>

						<address>
							<p>
								9863 - 9867 Mill Road,<br/>
								Cambridge, MG09 99HT.
							</p>
							<dl class="addr1">
								<dt>Telephone:</dt>
								<dd>
									<a href="callto#">+1 800 603 6035</a>
								</dd>
							</dl>
						</address>
					</div>
				</div>

				<div class="col-md-3 col-sm-5 col-xs-12">
					<h4>
						Information
					</h4>

					<p class="white">Donec eget tellus non </p>
					<p class="white">Vestibulum iaculis lacinia est</p>


				</div>

				<div class="col-md-3 col-sm-12 col-xs-12 center991 offs1">
					<h4>
						Follow us
					</h4>

					<ul class="inline-list">
						<li>
							<a href="#" class="fa fa-twitter">twitter</a>
						</li>
						<li>
							<a href="#" class="fa fa-facebook">facebook</a>
						</li>
						<li>
							<a href="#" class="fa  fa-google-plus">google-plus</a>
						</li>
						<li>
							<a href="#" class="fa  fa-rss">rss</a>
						</li>
						<li>
							<a href="#" class="fa fa-pinterest">pinterest</a>
						</li>
					</ul>

				</div>

			</div>
		</div>
	</section>

	<section class="foot-bot text-center">
		<div class="container">
			<p class="rights">
				Palerno &#169; <span id="copyright-year"></span>&nbsp;
				<a href="index-5.html">Privacy Policy</a>
				<!-- {%FOOTER_LINK} -->
			</p>
		</div>
	</section>
</footer>
</div>


<!---->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'gordondaloshostel' ) ); ?><!--">--><?php //printf( esc_html__( 'Proudly powered by %s', 'gordondaloshostel' ), 'WordPress' ); ?><!--</a>-->
<!--	-->
<!--			--><?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'gordondaloshostel' ), 'gordondaloshostel', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>



<?php wp_footer(); ?>

