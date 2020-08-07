<?php get_header(); ?>

	<!-- Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h3 class="pageHeading">All Posts</h3>
				<?php if (have_posts()) : ?>
	            	<?php while (have_posts()) : the_post(); ?>
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
		</div>
	</div>
</div>

<?php get_footer(); ?>