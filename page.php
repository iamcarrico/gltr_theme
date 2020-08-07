<?php get_header(); ?>

<!-- Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : ?>
	            	<?php while (have_posts()) : the_post(); ?>
	            		<h3 class="pageHeading"><?php the_title(); ?></h3>
	            		<?php the_content(); ?>
	            		<?php 
	            			if (have_rows('page_content')):
	            				while (have_rows('page_content')) : the_row();
	            					the_sub_field('additional_sections');
	            				endwhile;
	            			else:
	            				// no page found
	            			endif;
	            		?>
	            	<?php endwhile; ?>
	            <?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?> 	