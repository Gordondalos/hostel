<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gordondaloshostel
 */

get_header(); ?>
<body>
<div class="page">

	<?php include "template-parts/header.php" ?>
	<!--========================================================
                              CONTENT
    =========================================================-->

	<main>

		<section class="well well1 parallax" data-url="<?php bloginfo('template_directory')?>/img/parallax1.jpg"
				 data-mobile="true" data-speed="0.4">
			<div class="container">
				<div class="row center991">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<h3 class="ff-s">
							Programs & Activities
						</h3>

						<div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
							<img src="<?php bloginfo('template_directory')?>/img/page-1_img01.jpg" alt=""/>

							<div class="caption">
								<p>
									Sed in lacus ut enim adipiscing aliquet. Nulla venenatis.
								</p>

							</div>
							<a href="#" class="btn-link"><span>More</span></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<h3 class="ff-s">
							Online reservation
						</h3>

						<div class="thumbnail wow fadeInUp" data-wow-delay=".2s">
							<img src="<?php bloginfo('template_directory')?>/img/page-1_img02.jpg" alt=""/>

							<div class="caption">
								<p>
									Sed in lacus ut enim adipiscing aliquet. Nulla venenatis.
								</p>

							</div>
							<a href="#" class="btn-link"><span>More</span></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<h3 class="ff-s">
							Hostel rules
						</h3>

						<div class="thumbnail wow fadeInUp" data-wow-delay=".3s">
							<img src="<?php bloginfo('template_directory')?>/img/page-1_img03.jpg" alt=""/>

							<div class="caption">
								<p>
									Sed in lacus ut enim adipiscing aliquet. Nulla venenatis.
								</p>

							</div>
							<a href="#" class="btn-link"><span>More</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-info bg-info_mod well_991">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-6 col-sm-12 col-xs-12 bg-info">

						<div class="info-block">

							<div class="img-wr">
								<img src="<?php bloginfo('template_directory')?>/img/page-1_img04.jpg" alt=""/>
							</div>

							<h3>Superior double room </h3>

							<p class="lead">Privacy with more space</p>

							<p class="white wow fadeIn" data-wow-duration="2.5s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
								vestibulum molestie lacus.
								Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis
								natoque penatibus et magnis dis parturient montes,
								nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio,
								gravida
								at, cursus nec.</p>
							<a href="#" class="btn btn-default"><span>book now!</span></a>
						</div>

					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-info">

						<div class="info-block info-block_mod">

							<div class="img-wr">
								<img src="<?php bloginfo('template_directory')?>/img/page-1_img05.jpg" alt=""/>
							</div>

							<h3>Private rooms</h3>

							<p class="lead">Three types available</p>

							<p class="white wow fadeIn" data-wow-duration="2.5s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
								vestibulum molestie lacus.
								Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis
								natoque penatibus et magnis dis parturient montes,
								nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio,
								gravida
								at, cursus nec.</p>
							<a href="#" class="btn btn-default"><span>book now!</span></a>
						</div>

					</div>

					<div class="col-md-6 col-md-offset-6 col-sm-12 col-xs-12 bg-info">

						<div class="info-block">

							<div class="img-wr">
								<img src="<?php bloginfo('template_directory')?>/img/page-1_img06.jpg" alt=""/>
							</div>

							<h3>Female dorm </h3>

							<p class="lead">10 beds for women only</p>

							<p class="white wow fadeIn" data-wow-duration="2.5s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
								vestibulum molestie lacus.
								Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis
								natoque penatibus et magnis dis parturient montes,
								nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio,
								gravida
								at, cursus nec.</p>
							<a href="#" class="btn btn-default"><span>book now!</span></a>
						</div>

					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-info">

						<div class="info-block info-block_mod">

							<div class="img-wr">
								<img src="<?php bloginfo('template_directory')?>/img/page-1_img07.jpg" alt=""/>
							</div>

							<h3>20 bed dorm</h3>

							<p class="lead">Perfect for groups</p>

							<p class="white wow fadeIn" data-wow-duration="2.5s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
								vestibulum molestie lacus.
								Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis
								natoque penatibus et magnis dis parturient montes,
								nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio,
								gravida
								at, cursus nec.</p>
							<a href="#" class="btn btn-default"><span>book now!</span></a>
						</div>

					</div>

				</div>
			</div>
		</section>






		<section class="well well1 parallax text-center" data-url="<?php bloginfo('template_directory')?>/img/parallax2.jpg" data-mobile="true"
				 data-speed="0.6">
			<div class="container">
				<h2>
					Our offerings
				</h2>

				<div class="row">

					<ul class="icon-list">

						<li class="col-md-4 col-sm-6 col-sx-12 wow fadeInLeft" data-wow-delay=".3s" >
							<span class="fa-bell"></span>

							<h6>
								<a href="#">
									Nulla venenatis
								</a>
							</h6>
							<p class="offs2">
								Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis
								dis parturient <br/>
								montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.
							</p>
						</li>

						<li class="col-md-4 col-sm-6 col-sx-12 wow fadeInLeft" data-wow-delay=".2s" >
							<span class="fa-book"></span>

							<h6>
								<a href="#">
									Lorem ipsum dolor
								</a>
							</h6>
							<p class="offs2">
								Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis
								dis parturient <br/>
								montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.
							</p>
						</li>

						<li class="col-md-4 col-sm-6 col-sx-12 wow fadeInLeft" data-wow-delay=".1s" >
							<span class="fa-bus"></span>

							<h6>
								<a href="#">
									Consectetuer
								</a>
							</h6>
							<p class="offs2">
								Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis
								dis parturient <br/>
								montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.
							</p>
						</li>

						<li class="col-md-4 col-sm-6 col-sx-12 wow fadeInRight" data-wow-delay=".1s">
							<span class="fa-calendar"></span>

							<h6>
								<a href="#">
									Aliquet sit amet
								</a>
							</h6>
							<p class="offs2">
								Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis
								dis parturient <br/>
								montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.
							</p>
						</li>

						<li class="col-md-4 col-sm-6 col-sx-12 wow fadeInRight" data-wow-delay=".2s">
							<span class="fa-coffee"></span>

							<h6>
								<a href="#">
									Sed in lacus
								</a>
							</h6>
							<p class="offs2">
								Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis
								dis parturient <br/>
								montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.
							</p>
						</li>

						<li class="col-md-4 col-sm-6 col-sx-12 wow fadeInRight" data-wow-delay=".3s">
							<span class="fa-hotel"></span>

							<h6>
								<a href="#">
									Aliquet sit amet
								</a>
							</h6>
							<p class="offs2">
								Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis
								dis parturient <br/>
								montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.
							</p>
						</li>

					</ul>

				</div>
			</div>
		</section>

		<div class="map">
			<div id="google-map" class="map_model"></div>
			<ul class="map_locations">
				<li data-x="-73.9874068" data-y="40.643180">
					<p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
				</li>
			</ul>
		</div>

	</main>








<!--			--><?php //while ( have_posts() ) : the_post(); ?>
<!---->
<!--				--><?php //get_template_part( 'template-parts/content', 'page' ); ?>
<!---->
<!--				--><?php

//					if ( comments_open() || get_comments_number() ) :
//						comments_template();
//					endif;
//				?>
<!---->
<!--			--><?php //endwhile;  ?>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<?php include "template-parts/js.php" ?>

</body>
</html>