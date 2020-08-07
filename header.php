<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name') ?></title>

	<!-- scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	<!-- styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<?php wp_head(); ?> 

	<!-- Custom CSS/JS -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<script src="<?php bloginfo('template_directory'); ?>/vendors/fontawesome/js/all.js"></script>
</head>
<body>
<!-- Header -->
<div class="wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>">Georgetown Law<br><span class="site-subtitle">Technology Review</span></a></h1>
			</div>
		</div>
	</div>

	<!-- Navigation -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-expand-lg navbar-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php wp_nav_menu( array(
							'theme_location'  => 'primary',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'navbar-nav',
							'menu_class'      => 'navbar-nav mr-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) ); ?>
					    <form class="form-inline my-2 my-lg-0" id="nav-search" action="<?php bloginfo('home'); ?>/">
					    	<div class="input-group">
					    		<input class="form-control" type="search" placeholder="Search..." value="<?php echo wp_specialchars($s, 1); ?>" name="s" aria-label="Search">
					    		<div class="input-group-append">
					      			<button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
					      		</div>
					      	</div>
					    </form>
					</div>
				</nav>
			</div>
		</div>
	</div>