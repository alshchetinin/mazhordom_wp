<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="debug-grid">
   <div class="">
      <div class="debug-grid__colums">
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
         <div class=""></div>
      </div>
   </div>
</div>
<header id="header" class="container header">
	<div class="wrapper">
		<div class="row">
			<div class="navigation">
				<div class="logo">
				<?php 
					$image = get_field('logo', 'option');
					if( !empty( $image ) ): ?>
					<a href="/">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="180px" />
					</a>
						
					<?php endif; ?>
				</div>
				<nav>
				<?php wp_nav_menu([
						'container_class' => 'primary-menu'
				]); ?>
				<a href="#" class="button button-second">
					Узнать о системе
				</a>
				</nav>				
				<div class="navigation__button-wrapper">
				<a href="#" class="button button-second">
					Узнать о системе
				</a>	
				<div class="navigation__burger">
				<button class="hamburger hamburger--spin" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				</div>			
				</div>

				
			</div>
		</div>
	</div>
</header>
