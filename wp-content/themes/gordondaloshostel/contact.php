<?php
/*
Template Name: Шаблон Контактов
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
/**
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

		<?php include "template-parts/mycontent_contact.php" ?>
	</main>


	<?php //get_sidebar(); ?>
	<?php get_footer(); ?>
	<?php include "template-parts/js.php" ?>

</body>
</html>