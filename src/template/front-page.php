<?php /* Template Name: Front Page Template */ get_header(); ?>

	<main role="main">

		<?php 
		// the query
		$args = array(
			'post_type' => 'page',
			'orderby'	=> 'menu_order',
			'order' 	=> 'ASC'
		);
		$pageNumber = -1;
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $pageNumber++ ?>
				<section id="<?php $title = get_the_title(); echo strtolower(str_replace(' ', '-', $title)); ?>">
					<?php if( $pageNumber>=2 ) : ?>					
						<div class="section-title-block flex-vert-c">
							<div class="container">
								<div class="row">
									<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
					<?php else : ?>	
						<div class="section-title-block flex-vert-c hidden">
							<div class="container">
								<div class="row">
									<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
					<?php endif ?>
					<!-- loop through page builder -->
					<?php
					// check if the flexible content field has rows of data
					if( have_rows('page_builder_content') ):

					 	// loop through the rows of data
					    while ( have_rows('page_builder_content') ) : the_row(); ?>

					        <?php if( get_row_layout() == 'text_block_with_button' ): ?>
					        <!-- Text Block With Button Block -->
					        <div class="custom-field-group text-block-with-button" style="
								<?php if( get_sub_field('tbwb-bg_color') == 'green' ):
										echo 'background-image: linear-gradient( 63deg, #001220, #126384 );';
									elseif ( get_sub_field('tbwb-bg_color') == 'gray' ):
										echo 'background-image: linear-gradient( 63deg, #1a191f, #939c92 );';
									else :
										echo ' ';
									endif; ?>			
							">
								<div class="container">
									<div class="row">
										<div class="flex-ver-b">
											<div class="tbwb-text">
												<?php the_sub_field('tbwb-text'); ?>
											</div>
											<button class="tbwb-button btn btn-1" href="#contact-form">
												<?php the_sub_field('tbwb-button'); ?>
											</button>
										</div>
								    </div>
								</div>
							</div>
							<!-- /Text Block With Button Block -->
					        <?php elseif ( get_row_layout() == 'teammate_block' ): ?>
							<!-- Teammate Block -->					        	
	    						<div class="custom-field-group teammate-block" style="
									<?php if( get_sub_field('teammate_block-bg_color') == 'green' ): 
											echo 'background-image: linear-gradient( 63deg, #001220, #126384 );';
										elseif ( get_sub_field('teammate_block-bg_color') == 'gray' ): 
											echo 'background-image: linear-gradient( 63deg, #1a191f, #939c92 );';
										else :
											echo ' ';
										endif; ?>			
								">
									<div class="container">
										<div class="row">
											<div class="teammate-wrapper">				        	
									        	<?php // check if the nested repeater field has rows of data
				    							if( have_rows('teammate') ):
				    								// loop through the rows of data
						    						while ( have_rows('teammate') ) : the_row(); ?>
										       		<div class="teammate w-33 float-left">
										       			<div class="teammate-picture section-bg" style="background-image: url(<?php the_sub_field('teammate-picture'); ?>)">
										       				<div class="teammate-connections row">
										       					<?php if( get_sub_field('teammate-linkedin') ): ?>
										       						<a class="teammate-link teammate-linkedin float-left" href="<?php the_sub_field('teammate-linkedin'); ?>"></a>
										       					<?php endif; ?>
										       					<?php if( get_sub_field('teammate-xing') ): ?>									       					
										       						<a class="teammate-link teammate-xing float-left" href="<?php the_sub_field('teammate-xing'); ?>"></a>
										       					<?php endif; ?>
										       					<?php if( get_sub_field('teammate-facebook') ): ?>									       						
										       						<a class="teammate-link teammate-facebook float-left" href="<?php the_sub_field('teammate-facebook'); ?>"></a>
										       					<?php endif; ?>
										       					<?php if( get_sub_field('teammate-email') ): ?>									       						
										       						<a class="teammate-link teammate-email float-right" href="mailto:<?php the_sub_field('teammate-email'); ?>"></a>
										       					<?php else: ?>
										       						<a class="teammate-link teammate-email float-right" href="#contact-form"></a>				
										       					<?php endif; ?>
										       				</div>
										       			</div>
										       			<div class="teammate-contents">
										       				<h3 class="teammate-name all-caps"><?php the_sub_field('teammate-name'); ?></h3>
										       				<p class="teammate-position"><?php the_sub_field('teammate-position'); ?></p>
										       				<p class="teammate-quotation">«<?php the_sub_field('teammate-quotation'); ?>»</p>
										       			</div>
										       		</div>
										       		<?php endwhile;
										       	endif; ?>
										    </div>
									    </div>
								    </div>
								</div>
		    				<!-- /Teammate Block -->
		    				<?php elseif ( get_row_layout() == 'text_block_2_columns' ): ?>
		    				<!-- Text Block 2 Columns Block -->
		    				<div class="custom-field-group text-block-2-columns" style="
								<?php if( get_sub_field('tb2c-bg_color') == 'green' ): 
										echo 'background-image: linear-gradient( 63deg, #001220, #126384 );';
									elseif ( get_sub_field('tb2c-bg_color') == 'gray' ): 
										echo 'background-image: linear-gradient( 63deg, #1a191f, #939c92 );';
									else :
										echo ' ';
									endif; ?>			
							">
								<div class="container">
									<div class="row">
										<div class="tb2c-column-wrapper">		
									        <div class="tb2c-left tb2c-column float-left">
									        	<?php the_sub_field('tb2c-left'); ?>
									        </div>
									        <div class="tb2c-right tb2c-column float-right">
									        	<?php the_sub_field('tb2c-right'); ?>
									        </div>
									    </div>
								    </div>
								</div>
							</div>
							<!-- /Text Block 2 Columns Block -->							
					        <?php elseif ( get_row_layout() == 'branch_offices' ): ?>
					        <!-- Branch Offices Block -->
    							<?php if( have_rows('branch_office') ):
    								// loop through the rows of data
		    						while ( have_rows('branch_office') ) : the_row(); ?>
		    						<div class="custom-field-group" style="
										<?php if( get_sub_field('bo-bg_color') == 'green' ): 
												echo 'background-image: linear-gradient( 63deg, #001220, #126384 );';
											elseif ( get_sub_field('bo-bg_color') == 'gray' ): 
												echo 'background-image: linear-gradient( 63deg, #1a191f, #939c92 );';
											else :
												echo ' ';
											endif; ?>			
									">
										<div class="container">
											<div class="row">		    						
									       		<ul>
					    							<li>
					    								<span><?php echo get_sub_field_object('bo-address')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('bo-address'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('bo-phone')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('bo-phone'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('bo-email')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('bo-email'); ?></span>
					    							</li>
									       		</ul>
									       	</div>
									    </div>
									   </div>
				    				<?php endwhile;
		    					endif; ?>
		    				<!-- /Branch Offices Block -->		    				
		    				<?php elseif ( get_row_layout() == 'contact_form' ): ?>
		    				<!-- Contact Form Block -->
		    				<div class="custom-field-group contact-form" style="
								<?php if( get_sub_field('cf-bg_color') == 'green' ): 
										echo 'background-image: linear-gradient( 63deg, #001220, #126384 );';
									elseif ( get_sub_field('cf-bg_color') == 'gray' ): 
										echo 'background-image: linear-gradient( 63deg, #1a191f, #939c92 );';
									else :
										echo ' ';
									endif; ?>			
							">
								<div class="container">
									<div class="row">
										<h2 class="contact-form-title"><?php _e('Kontaktformular', 'btoaudit'); ?></h2>
										<?php
											$contact_form = get_sub_field('cf-form');
											echo do_shortcode($contact_form);
										?>
								    </div>
								</div>
							</div>
							<!-- /Contact Form Block -->						
		    				<?php elseif ( get_row_layout() == 'imprint' ): ?>
		    				<!-- Imprint Block -->
		    				<div class="custom-field-group imprint" id="contact-form" style="
								<?php if( get_sub_field('imprint-bg_color') == 'green' ): 
										echo 'background-image: linear-gradient( 63deg, #001220, #126384 );';
									elseif ( get_sub_field('imprint-bg_color') == 'gray' ): 
										echo 'background-image: linear-gradient( 63deg, #1a191f, #939c92 );';
									else :
										echo ' ';
									endif; ?>			
							">
								<div class="container">
									<div class="row">
										<h2 class="imprint-title"><?php _e('Impressum', 'btoaudit'); ?></h2>
										<div class="imprint-contents">
											<div class="imprint-content-block">
												<h6 class="imprint-contect-heading"><?php _e('Herausgeber', 'btoaudit'); ?></h6>
												<p class="imprint-content-content"><?php the_sub_field('imprint-editor'); ?></p>
											</div>
											<div class="imprint-content-block">
												<h6 class="imprint-contect-heading"><?php _e('Herausgeber', 'btoaudit'); ?></h6>
												<p class="imprint-content-content"><?php the_sub_field('imprint-editor'); ?></p>
											</div>
											<div class="imprint-content-block">
												<h6 class="imprint-contect-heading"><?php _e('Web Beratung, -Design & -Programmierung', 'btoaudit'); ?></h6>
												<a class="p imprint-content-content text-decor-none" href="http://creationworx.com/"><?php _e('creationworx.ch', 'btoaudit'); ?></a>												
											</div>											
										</div>
								    </div>
								</div>
							</div>
							<!-- /Imprint Block -->							
				    		<?php elseif ( get_row_layout() == 'full_width_image' ): ?>
				    		<!-- Full Width Image Block -->		    			
						    	<div class="custom-field-group full-width-image">
						    		<img class="full-width-image-img" src="<?php the_sub_field('full_width_image-img'); ?>" alt="full width image">
						    	</div>
						    <!-- /Full Width Image Block -->
					        <?php elseif ( get_row_layout() == 'logo_block_layout' ): ?>
					        <!-- Logo Block Layout Block -->
						        <div class="custom-field-group logo-block-layout" style="
										<?php if( get_sub_field('lb-bg_color') == 'green' ): 
												echo 'background-image: linear-gradient( 63deg, #001220, #126384 );';
											elseif ( get_sub_field('lb-bg_color') == 'gray' ): 
												echo 'background-image: linear-gradient( 63deg, #1a191f, #939c92 );';
											else :
												echo ' ';
											endif; ?>
								">
									<div class="container">
										<div class="row flex-vert-c">
								        	<?php // check if the nested repeater field has rows of data
			    							if( have_rows('logo_block') ):
			    								// loop through the rows of data
					    						while ( have_rows('logo_block') ) : the_row(); ?>
													<a class="logo-block-link w-33 float-left" href="<?php the_sub_field('logo_block-link'); ?>">
														<img class="logo-block-img" src="<?php the_sub_field('logo_block-img'); ?>" alt="logo image">
													</a>
									    		<?php endwhile;
									    	endif; ?>
									    </div>
									</div>
								</div>
							<!-- /Logo Block Layout Block -->
					        <?php endif;

					    endwhile;

					else :

					    // no layouts found

					endif;

					?>
					<!-- /loop through page builder -->
				</section>
			<?php endwhile; ?>
			<!-- /loop -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<section>
					<div class="container">
						<div class="row">
							<p><?php _e( 'Sorry, no posts matched your criteria.', 'btoaudit' ); ?></p>
						</div>
					</div>
				</section>
		<?php endif; ?>									
	</main>

<?php get_footer(); ?>
