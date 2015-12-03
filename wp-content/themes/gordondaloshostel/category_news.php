<?php
/**
 *  Category Template: category_news
 * A Simple Category Template
 */
?>
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

		<?php include "template-parts/content_category_news.php" ?>
	</main>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<?php include "template-parts/js.php" ?>

</body>
</html>