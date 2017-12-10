<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<div class="row">

					<?php 
					// the query
					$args = array(
						'post_type' => 'page'
					);
					$the_query = new WP_Query( $args ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<!-- /loop -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.', 'btoaudit' ); ?></p>
					<?php endif; ?>

				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
