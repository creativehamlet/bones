<?php
/*
Template Name: Full Slider Page
*/
?>

<?php get_header(); ?>

<?php cb_slider_template('3'); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="twelvecol first clearfix" role="main">

			<?php query_posts('cat=3'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>
			<?php endwhile; endif; ?>

		</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
