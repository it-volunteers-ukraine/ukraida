<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-it-volunteers
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found container error-404-container">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Сторінка не знайдена.', 'wp-it-volunteers' ); ?></h1>
			</header><!-- .page-header -->			
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
