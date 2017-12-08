<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<div class="row">

					<!-- article -->
					<article id="post-404">

						<h1><?php _e( 'Page not found', 'btoaudit' ); ?></h1>
						<h2>
							<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'btoaudit' ); ?></a>
						</h2>

					</article>
					<!-- /article -->

				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
