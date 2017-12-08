<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<div class="row">

					<h1><?php echo sprintf( __( '%s Search Results for ', 'btoaudit' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
					
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
