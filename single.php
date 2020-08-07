<?php get_header(); ?>

<!-- Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9">
				<div class="postPageWrapper">
					<?php if (have_posts()) : ?>
		            	<?php while (have_posts()) : the_post(); ?>
		            		<?php 
		            				if (has_post_thumbnail()) : ?>
		            				<div class="postFeaturedImageWrapper">
										<?php the_post_thumbnail('full', array('class' => 'postFeaturedImage')); ?>
		            					<div class="postFeaturedImageCaption"><?php the_post_thumbnail_caption() ?></div>
									</div>
		            			<?php else:
		            				// do nothing
	            					endif;
	            				?>
							<?php if (get_field('video_embed')) : ?> 
								<div class="postVideoEmbed embed-responsive embed-responsive-16by9"> <?php the_field('video_embed'); ?> </div>
							<?php else: 
								//do nothing 
							endif ?>
		            		<?php if (get_field('download_url')) { ?><a href="<?php the_field('download_url') ?>" target="_blank" rel="noopener noreferrer"><div class="postPDF"><i class="far fa-file-pdf"></i> Download</div></a> <?php } ?>
		            		<div class="postFacebook"><a href="" class="facebook-share"><i class="fab fa-2x fa-facebook-square"></i></a></div>
		            		<div class="postTwitter"><a href="" class="twitter-share"><i class="fab fa-2x fa-twitter-square"></i></a></div>
		            		<?php if (in_category('articles')): ?>
		            			<div class="postCategory"><a href="<?php echo home_url( '/articles' ); ?>">Articles</a></div>
		            		<?php elseif (in_category('case-comments')): ?>
		            			<div class="postCategory"><a href="<?php echo home_url( '/case-comments' ); ?>">Case Comments</a></div>
		            		<?php elseif (in_category('legal-news')): ?>
		            			<div class="postCategory"><a href="<?php echo home_url( '/legal-news' ); ?>">Legal News</a></div>
		            		<?php elseif (in_category('literature-reviews')): ?>
		            			<div class="postCategory"><a href="<?php echo home_url( '/literature-reviews' ); ?>">Literature Reviews</a></div>
		            		<?php elseif (in_category('notes')): ?>
		            			<div class="postCategory"><a href="<?php echo home_url( '/notes' ); ?>">Notes</a></div>
		            		<?php elseif (in_category('technology-explainers')): ?>
		            			<div class="postCategory"><a href="<?php echo home_url( '/technology-explainers' ); ?>">Technology Explainers</a></div>
		            		<?php else:
		            			// do nothing
		            		endif; ?>
		            		<h3 class="postTitle"><?php the_title(); ?></h3>
		            		<div class="postAuthor">
		            			<?php 
		            			if (get_field('author')):
		            				the_field('author');
		            			else:
		            				the_author_meta('display_name');
		            			endif;
		            			?>
		            		</div>
		            		<div class="postDate"><?php the_date('F Y'); ?></div>
	            			<?php 
	            			if (get_field('citation')): ?>
		            			<div class="postCite"><b>Cite as: </b>
		            				<?php the_field('citation'); ?>
		            			</div>
	            			<?php 
							else:
	            				// do nothing
	            			endif;
	            			?>
	            			<div class="postContent">
		            			<?php the_content(); ?>
		            		</div>
							<?php if (!in_category('announcements')): ?>
			            		<div class="postBio">
			            			<h6>
			            				<?php 
			            				if (get_field('author')):
			            					the_field('author');
			            				else:
			            					the_author_meta('display_name');
			            				endif;
			            				?>
			            			</h6>
			            			<p>
			            				<?php 
			            				if (get_field('author_biography')):
			            					the_field('author_biography');
			            				else:
			            				the_author_meta( $field = 'description' ); 
			            				endif;
			            				?>
			            			</p>
			            		</div>
							<?php 
							else:
	            				// do nothing
	            			endif;
	            			?>
		            		<script>
		            			var text = encodeURIComponent('<?php the_title(); ?>');
		            			var postURL = encodeURIComponent('<?php the_permalink(); ?>');
		            		</script>
		            	<?php endwhile; ?>
		            <?php endif; ?>
		        </div>
			</div>
			<div class="col-lg-3">
				<?php if ( is_active_sidebar( 'post_sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'post_sidebar' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?> 	