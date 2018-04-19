<?php if(is_page(6)) { ?>
	<?php
	  session_start();
	  if(!isset($_SESSION['password'])){
	    header("location: http://localhost/hpe");
	  }
	?>
<?php }	?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servidores HPE ProLiant. Programa para parceiros HPE em Portugal.">
    <title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--link href="/favicon.ico" type="image/vnd.microsoft.icon" rel="icon">
    <link href="/favicon.ico" type="image/vnd.microsoft.icon" rel="shortcut icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="site">

	<!--[if lt IE 8]>
		<p class="body-copy-large">Está a aceder a este sítio através de um <strong>browser desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize o seu browser</a> de modo a melhorar a sua experiência de utilização.</p>
    <![endif]-->

		<?php if ( ! is_page(6) ) : ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="header-wrapper">

				<div class="top-header">
					<ul>
						<li>PORTUGAL (PT)</li>
						<!--li><a></a></li-->
						<li><a>Área pessoal</a></li>
						<li><a href="http://localhost/hpe/contactos">Contacte-nos</a></li>
						<?php
							if ( is_user_logged_in()) {
								echo '<li><a>Login</a></li>';
							} else {
								echo '<li><a>Logout</a></li>';
							}
						?>
					</ul>
				</div>

				<div class="main-header">
					<div class="logo">

						<a class="brand" href="http://localhost/hpe/home/">
	                        <img src="http://www.hpesidebyside.pt/wp-content/uploads/2015/12/hpe-sbs1.png" />
	                     </a>

	                </div>
					<nav class="main-menu" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
					<div class="search-icon">
	                	<div id="search-icon"><div>
	                </div>

				</div>

			</div>
		</header>

		<div class="search-area" id="search-area">
			<form role="search" method="get" class="search-form" action="http://www.hpesidebyside.pt/">
				<input type="search" class="search-field" placeholder="Pesquisar" value="" name="s" />
				<button type="submit" class="search-submit"></button>
				<a id="close-search-icon"> X </a>
			</form>
		</div>

		<script>
            $( document ).ready(function() {
			$('#search-icon').click(function(){
				$('#search-area').slideToggle('slow');
			});

			$('#close-search-icon').click(function(){
				$('#search-area').slideToggle('slow');
			});
			});
        </script>

		<?php endif; ?>