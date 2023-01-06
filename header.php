<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PrintScan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<header id="masthead" class="site-header">
		<div class="header-wrap">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/PrintscanLogonav.svg" alt="PrintScan Logo">
				</a>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<ul>
					<li><a href="">Fingerprinting Services ▼</a></li>
					<li><a href="">Live Scan Solutions ▼</a></li>
					<li><a href="">Locations ▼</a></li>
					<li><a href="">Company ▼</a></li>
				</ul>
			</nav>
				<div class="button-wrap">
					<a href="" class="button-nav">Find My Appointment</a>
					<a href="" class="button-nav">Contact</a>
				</div>
		</div>
		<script>
				// Primero obtenemos el elemento header-wrap
				const headerWrap = document.querySelector(".header-wrap");

				// Añadimos un evento de escucha de scroll al window
				window.addEventListener("scroll", () => {
				// Obtenemos la posición del scroll
				const scrollPosition = window.pageYOffset;

				// Si la posición del scroll es mayor a 0, cambiamos el background al color original
				if (scrollPosition > 0) {
					headerWrap.style.backgroundColor = "#000000b5";
				} else {
					// Si no, cambiamos el background al color transparente
					headerWrap.style.backgroundColor = "#00000000";
				}
				});
		</script>
	</header><!-- #masthead -->
		<nav id="site-navigation" class="main-navigation">
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
