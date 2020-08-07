<?php 
/*
Template Name: Category Page
*/
?>
<?php get_header(); ?>

	<!-- Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h3 class="pageHeading"><?php the_title(); ?></h3>
				<?php
					global $post;
    				$post_slug=$post->post_name; 
					$category_query = new WP_Query( array( 
						'category_name' => $post_slug,
					)); 
				?>
				<?php if ($category_query->have_posts()) : ?>
	            	<?php while ($category_query->have_posts()) : $category_query->the_post(); ?>
	            		<div class="postWrapper">
	            			<div class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
	            			<div class="postAuthor">
	            				<?php 
	            				if (get_field('author')):
	            					the_field('author');
	            				else:
	            					the_author_meta('display_name');
	            				endif;
	            				?>
	            			</div>
	            			<div class="postPreview"><?php the_excerpt(); ?></div>
	            			<div class="postReadMore"><a href="<?php the_permalink(); ?>"><i class="far fa-chevron-circle-right"></i> Read More</a></div>
	            		</div>
	            	<?php endwhile; ?>
	            <?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>