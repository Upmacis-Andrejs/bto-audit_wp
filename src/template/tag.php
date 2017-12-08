<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<div class="row">

					<h1><?php _e( 'Tag Archive: ', 'btoaudit' ); echo single_tag_title('', false); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
			
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
