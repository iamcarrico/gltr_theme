<?php 
/*
Template Name: Issue
*/
?>
<?php get_header(); ?>

	<!-- Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h3 class="pageHeading">
					<?php the_title(); ?> 
					<?php if (get_field('download_url')) { ?>
						<a href="<?php the_field('download_url') ?>" class="issuePDF" target="_blank" rel="noopener noreferrer"><i class="far fa-file-pdf"></i> Download</a> 
					<?php } ?>
				</h3>
				<?php
					global $post;

    				$articles=$post->post_name . '+articles'; 
					$articles_query = new WP_Query( array( 
						'category_name' => $articles,
						'posts_per_page' => -1,
					)); 

					$notes=$post->post_name . '+notes'; 
					$notes_query = new WP_Query( array( 
						'category_name' => $notes,
						'posts_per_page' => -1,
					));

					$case_comments=$post->post_name . '+case-comments'; 
					$case_comments_query = new WP_Query( array( 
						'category_name' => $case_comments,
						'posts_per_page' => -1,
					));

					$technology_explainers=$post->post_name . '+technology-explainers'; 
					$technology_explainers_query = new WP_Query( array( 
						'category_name' => $technology_explainers,
						'posts_per_page' => -1,
					));
				
					$literature_reviews=$post->post_name . '+literature-reviews'; 
					$literature_reviews_query = new WP_Query( array( 
						'category_name' => $literature_reviews,
						'posts_per_page' => -1,
					));

					$legal_news=$post->post_name . '+legal-news'; 
					$legal_news_query = new WP_Query( array( 
						'category_name' => $legal_news,
						'posts_per_page' => -1,
					));
				?>
				
					<?php if ($articles_query->have_posts()) : ?>
						<div class="issueContentCategory">Articles</div>
		            	<?php while ($articles_query->have_posts()) : $articles_query->the_post(); ?>
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
	            
	            	<?php if ($notes_query->have_posts()) : ?>
	            		<div class="issueContentCategory">Notes</div>
		            	<?php while ($notes_query->have_posts()) : $notes_query->the_post(); ?>
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
	           
	            	<?php if ($case_comments_query->have_posts()) : ?>
	            		 <div class="issueContentCategory">Case Comments</div>
		            	<?php while ($case_comments_query->have_posts()) : $case_comments_query->the_post(); ?>
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
	            
	            	<?php if ($technology_explainers_query->have_posts()) : ?>
	            		<div class="issueContentCategory">Technology Explainers</div>
		            	<?php while ($technology_explainers_query->have_posts()) : $technology_explainers_query->the_post(); ?>
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
				
					<?php if ($literature_reviews_query->have_posts()) : ?>
	            		<div class="issueContentCategory">Literature Reviews</div>
		            	<?php while ($literature_reviews_query->have_posts()) : $literature_reviews_query->the_post(); ?>
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
		        
	            	<?php if ($legal_news_query->have_posts()) : ?>
	            		<div class="issueContentCategory">Legal News & Developments</div>
		            	<?php while ($legal_news_query->have_posts()) : $legal_news_query->the_post(); ?>
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