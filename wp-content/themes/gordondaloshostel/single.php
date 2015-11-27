<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gordondaloshostel
 */

 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body>
<div class="page">

	<!--	Паралакс + меню-->

	<?php include "template-parts/header.php" ?>
	<!--========================================================
                              CONTENT
    =========================================================-->
	<main>

		<?php include "template-parts/mycontent.php" ?>
	</main>


	<?php //get_sidebar(); ?>
	<?php get_footer(); ?>
	<?php include "template-parts/js.php" ?>

</body>
</html>