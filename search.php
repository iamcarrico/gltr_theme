<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h3 class="pageHeading">Search Results for "<?php the_search_query() ?>"</h3>
		    <?php if (have_posts()) : ?>
			    <?php while (have_posts()) : the_post(); ?>    
			        <div class="postWrapper">
			        	<?php $post_type = get_post_type();
	        			if ( $post_type == "post" ) { ?>
		        			<?php if (in_category('articles')): ?>
		        				<div class="postCategory"><a href="<?php echo home_url( '/articles' ); ?>">Articles</a></div>
		        			<?php elseif (in_category('case-comments')): ?>
		        				<div class="postCategory"><a href="<?php echo home_url( '/case-comments' ); ?>">Case Comments</a></div>
		        			<?php elseif (in_category('legal-news')): ?>
		        				<div class="postCategory"><a href="<?php echo home_url( '/legal-news' ); ?>">Legal News</a></div>
		        			<?php elseif (in_category('literature-review')): ?>
		        				<div class="postCategory"><a href="<?php echo home_url( '/literature-reviews' ); ?>">Literature Reviews</a></div>
		        			<?php elseif (in_category('student-notes')): ?>
		        				<div class="postCategory"><a href="<?php echo home_url( '/notes' ); ?>">Notes</a></div>
		        			<?php elseif (in_category('technology-explainer')): ?>
		        				<div class="postCategory"><a href="<?php echo home_url( '/technology-explainers' ); ?>">Technology Explainers</a></div>
		        			<?php else:
		        				// do nothing
		        			endif; ?>
		        		<?php } ?>
	        			<div class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
	        			<?php if ( $post_type == "post" ) { ?>
		        			<div class="postAuthor">
		        				<?php 
		        				if (get_field('author')):
		        					the_field('author');
		        				else:
		        					the_author_meta('display_name');
		        				endif;
		        				?>
		        			</div>
	        			<?php } ?>
	        			<div class="postPreview"><?php the_excerpt(); ?></div>
	        			<div class="postReadMore"><a href="<?php the_permalink(); ?>"><i class="far fa-chevron-circle-right"></i> Read More</a></div>
	        		</div> 
			    <?php endwhile; ?>
				<?php else: ?>
					<p>Sorry, but nothing matched your search terms. Please try again with different search terms.</p>
					<form class="form-inline my-2 my-lg-0" id="try-again-search" action="<?php bloginfo('home'); ?>/">
						<div class="input-group">
							<input class="form-control" type="search" placeholder="Search..." value="<?php echo wp_specialchars($s, 1); ?>" name="s" aria-label="Search">
							<div class="input-group-append">
					  			<button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
					  		</div>
					  	</div>
					</form>
		    <?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>