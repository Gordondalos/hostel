<!DOCTYPE html>
<html <?php language_attributes(); ?>>

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

<!--	Паралакс + меню-->

	<?php include "template-parts/header.php" ?>
	<!--========================================================
                              CONTENT
    =========================================================-->
	<main>

<!--Верхний паралакс-->
		<?php include "template-parts/section_up_paralax.php" ?>
<!--Продаваемые штуки-->
		<?php include "template-parts/sale.php" ?>
<!--Преимущество-->
		<?php include "template-parts/advantage.php" ?>

		<?php include "template-parts/map.php" ?>
	</main>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<?php include "template-parts/js.php" ?>

</body>
</html>