<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?> 	
	<?php if (get_field('home_page_alert', 'option')): ?>
		<!-- Alert Box -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="alert alert-primary">
						<?php the_field('home_page_alert', 'option'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php else:
		// No Alert
	endif; ?>

	<!-- Slider -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="featuredArticles" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					    <li data-target="#featuredArticles" data-slide-to="0" class="active"></li>
					    <li data-target="#featuredArticles" data-slide-to="1"></li>
					    <li data-target="#featuredArticles" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<?php 
							$carousel_query = new WP_Query( array( 
								'category_name' => 'featured',
								'posts_per_page' => 3,
							)); 
						?>
						<?php if ($carousel_query->have_posts()) : ?>
							<?php $i = 0; ?>
	            			<?php while ($carousel_query->have_posts()) : $carousel_query->the_post(); ?>
	            				<?php if ($i == 0): ?>
							    	<div class="carousel-item active">
							    <?php else: ?>
							    	<div class="carousel-item">
							    <?php endif; ?>
								    	<div class="carouselText">
								    		<h2 class="carouselTitle"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
								    		<div class="carouselAuthor">
								    			<?php 
						            				if (get_field('author')):
						            					the_field('author');
						            				else:
						            					the_author_meta('display_name');
						            				endif;
						            			?>
								    		</div>
								    		<?php the_excerpt(); ?>
								    		<a href="<?php the_permalink(); ?>">
								    			<div class="carouselReadMore">Read More</div>
								    			<div class="carouselReadMoreMobile"><i class="far fa-chevron-circle-right"></i> Read More</div>
								    		</a>
								    	</div>
								    	<div class="carouselImageCaption"><?php the_post_thumbnail_caption() ?></div>
								    	<div class="carouselOpacityLayer"></div>
								    	<?php the_post_thumbnail('full', array('class' => 'carouselImage')); ?>
							    	</div>
							    <?php $i++; ?>
							<?php endwhile; ?>
	            		<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div> 


	<!-- Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<h3 class="postHeading">Recent Posts</h3>
				<?php 
					$home_args = array(
					    'post_type' => 'post', 
					    'tax_query' => array (
					        array(
					            'taxonomy' => 'category',
					            'field' => 'slug',
					            'terms' => array('featured'), 
					            'operator' => 'NOT IN' // This operator ensures that the values listed in 'term' are excluded
					        )
					    ),
					    'post_status' => 'publish',
					    'posts_per_page' => 6,
					);

					$home_query = new WP_Query($home_args);
				?>
				<?php if ($home_query->have_posts()) : ?>
	            	<?php while ($home_query->have_posts()) : $home_query->the_post(); ?>
	            		<div class="postWrapper">
	            			<?php if (in_category('articles')): ?>
	            				<div class="postCategory"><a href="<?php echo home_url( '/articles' ); ?>">Articles</a></div>
	            			<?php elseif (in_category('case-comments')): ?>
	            				<div class="postCategory"><a href="<?php echo home_url( '/case-comments' ); ?>">Case Comments</a></div>
	            			<?php elseif (in_category('legal-news')): ?>
	            				<div class="postCategory"><a href="<?php echo home_url( '/legal-news' ); ?>">Legal News</a></div>
	            			<?php elseif (in_category('literature-review')): ?>
	            				<div class="postCategory"><a href="<?php echo home_url( '/literature-review' ); ?>">Literature Review</a></div>
	            			<?php elseif (in_category('notes')): ?>
	            				<div class="postCategory"><a href="<?php echo home_url( '/notes' ); ?>">Notes</a></div>
	            			<?php elseif (in_category('technology-explainers')): ?>
	            				<div class="postCategory"><a href="<?php echo home_url( '/technology-explainers' ); ?>">Technology Explainers</a></div>
	            			<?php else:
	            				// do nothing
	            			endif; ?>
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
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>