<?php
/*
Template Name: Masthead
*/
?>
<?php get_header(); ?>

<!-- Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : ?>
	            	<?php while (have_posts()) : the_post(); ?>
	            		<h3 class="mastheadHeading"><?php the_title(); ?></h3>
				<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
	            		<?php the_content(); ?>
	            	<?php endwhile; ?>
	            <?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
