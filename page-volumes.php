<?php 
/*
Template Name: Volumes
*/
?>

<?php get_header(); ?> 	

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<?php if (have_posts()) : ?>
	            <?php while (have_posts()) : the_post(); ?>
					<h3 class="issuesHeading"><?php the_title(); ?></h3>
					<div class="issuesContent"><?php the_content(); ?></div>
				<?php endwhile;
			endif; ?>
		</div>
	</div>
	<div class="row">
		<?php 
			if (have_rows('volumes')):
				while (have_rows('volumes')) : the_row(); ?>
					<div class="col-sm-3">
						<div class="issueTitle"><?php the_sub_field('volume_name'); ?></div>
						<?php if (have_rows('issue')):
							while (have_rows('issue')) : the_row(); ?>
								<div class="issueArticle"><a href="<?php the_sub_field('issue_link'); ?>"><?php the_sub_field('issue_name'); ?></a></div>
							<?php endwhile;
						else:
							// no issues
						endif;?>
					</div>
				<?php endwhile;
			else:
				// no page found
			endif;
		?>
	</div>
</div>

<?php get_footer(); ?>