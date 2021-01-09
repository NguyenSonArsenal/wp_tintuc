<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title() ?></title>
	<link rel="stylesheet" href="<?= assets('libs/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= assets('css/style.css') ?>">
	<link rel="stylesheet" href="<?= assets('css/responsive.css') ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="wallpaper">
	<header>
		<div class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<div class="logo">
							<a href="<?php get_permalink() ?>"><img src="<?= assets('images/logo.png') ?>"
																	alt="Blog Huy kira"></a>
							<h1><?php bloginfo('name') ?></h1>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<div class="banner">
							<a href="<?php get_permalink() ?>"><img src="<?= assets('images/banner.jpg') ?>" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-nav">
			<div class="container">
				<div class="menu-header">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu1',
                            'container' => 'false',
                            'menu_id' => 'header-menu',
                            'menu_class' => 'header-menu'
                        )
                    ); ?>
				</div>
			</div>
		</div>
	</header>
