<!DOCTYPE html>

<html>

	<head>

		<title><?php the_title(); ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/images/logo.png">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header>

			<?php get_sidebar('top'); ?>

        </header>
        
        <main>