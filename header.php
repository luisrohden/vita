<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    
    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header id="header">
	<?php
	$header=get_field('theme-header','option');
	$logoTag =  is_front_page()?'h1':'h2';
	?>
	<div class="container">
		<div class="header-content">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="logo">
						<a href="<?php echo get_site_url();?>" title="<?php echo get_bloginfo('name');?>">
							<<?php echo $logoTag;?>>
							<img src="<?php echo $header['logo']['sizes']['medium'];?>" alt="<?php echo get_bloginfo('name');?>"/>
							</<?php echo $logoTag;?>>
						</a>
					</div>
				</div>
				<div class="col-md-9 col-6">
				
					<div class="menuBox">
						<div  class="menuDesktop">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu_main',
									'menu' => 'Menu Principal',
									'container' => '',
									'menu_class' => 'no-format no-margin no-padding'
								) 
							);
							?>
						</div>
						<div class="social">
							<?php
							if(isset($header['socials']) && is_array($header['socials'])):
								foreach($header['socials'] as $social):
									?>
									<a href="<?php echo $social['url'];?>" target="_blank" title="<?php echo $social['texto'];?>">
										<img src="<?php echo $social['icon']['sizes']['thumbnail'];?>" title="<?php echo $social['texto'];?>"/>
									</a>
									<?php
								endforeach;
							endif;
							?>
						</div>
						<div class="buttonMenuMobile">
							<span></span><span></span><span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div  id="menuMobileBox">
		<?php
		/*
		wp_nav_menu(
            array(
                'theme_location' => 'menu_mobile',
                'container' => '',
                'menu_class' => 'no-format no-margin no-padding'
            ) 
        );
		*/
		?>
	</div>
</header>
