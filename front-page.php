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
		$customFieldGroupNumber = 0;
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $pageNumber++; $customFieldGroupNumber = 0; ?>
				<section id="<?php $title = get_the_title(); echo strtolower(str_replace(' ', '-', $title)); ?>" class="section-<?php echo $pageNumber; ?>">
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
					    while ( have_rows('page_builder_content') ) : the_row(); $customFieldGroupNumber++; ?>

					        <?php if( get_row_layout() == 'text_block_with_button' ): ?>
					        <!-- Text Block With Button Block -->
					        <div class="custom-field-group text-block-with-button 
    						<?php
    						echo 'custom-field-group-' . $customFieldGroupNumber . ' ';
    						if( get_sub_field('tbwb-bg_color') == 'green' ): 
								echo 'green-bg';
							elseif ( get_sub_field('tbwb-bg_color') == 'gray' ): 
								echo 'gray-bg';
							else :
								echo 'no-bg';
							endif; ?>">
								<div class="container">
									<div class="row">
										<div class="flex-vert-b">
											<div class="tbwb-text hyphenate" data-aos="fade" data-aos-delay="200" data-aos-duration="400">
												<span class="triangle-cut">
													<span class="triangle"></span>
												</span>
												<?php echo wpautop( get_sub_field('tbwb-text') ); ?>
											</div>
											<button class="tbwb-button btn btn-1 float-right" href="#contact-form" data-aos="fade" data-aos-delay="1000" data-aos-duration="1300">
												<?php the_sub_field('tbwb-button'); ?>
											</button>
										</div>
								    </div>
								</div>
							</div>
							<!-- /Text Block With Button Block -->
					        <?php elseif ( get_row_layout() == 'teammate_block' ): ?>
							<!-- Teammate Block -->					        	
	    						<div class="custom-field-group teammate-block 
	    						<?php
    							echo 'custom-field-group-' . $customFieldGroupNumber . ' ';
    							if( get_sub_field('teammate_block-bg_color') == 'green' ): 
									echo 'green-bg';
								elseif ( get_sub_field('teammate_block-bg_color') == 'gray' ): 
									echo 'gray-bg';
								else :
									echo 'no-bg';
								endif; ?>">
									<div class="container">
										<div class="row">
											<div class="teammate-wrapper flex-hor-c">				        	
									        	<?php // check if the nested repeater field has rows of data
				    							if( have_rows('teammate') ):
				    								// loop through the rows of data
						    						while ( have_rows('teammate') ) : the_row(); ?>
										       		<div class="teammate row w-33 w-sm-100">
										       			<div class="triangle-cut-wrapper w-100 float-left">
											       			<div class="triangle-cut">
											       				<div class="triangle"></div>
											       			</div>
											       		</div>
										       			<div class="teammate-picture-wrapper w-100 float-left">
											       			<div class="teammate-picture section-bg" style="background-image: url(<?php the_sub_field('teammate-picture'); ?>)">
											       				<div class="teammate-connections row w-100">
											       					<?php if( get_sub_field('teammate-linkedin') ): ?>
											       						<a class="teammate-link teammate-linkedin icon-linkedin float-left text-decor-none" href="<?php the_sub_field('teammate-linkedin'); ?>" target="_blank"></a>
											       					<?php endif; ?>
											       					<?php if( get_sub_field('teammate-xing') ): ?>									       					
											       						<a class="teammate-link teammate-xing icon-xing float-left text-decor-none" href="<?php the_sub_field('teammate-xing'); ?>" target="_blank"></a>
											       					<?php endif; ?>
											       					<?php if( get_sub_field('teammate-facebook') ): ?>									       						
											       						<a class="teammate-link teammate-facebook icon-facebook float-left text-decor-none" href="<?php the_sub_field('teammate-facebook'); ?>" target="_blank"></a>
											       					<?php endif; ?>
											       					<?php if( get_sub_field('teammate-email') ): ?>									       						
											       						<a class="teammate-link teammate-email icon-email float-right text-decor-none" href="mailto:<?php the_sub_field('teammate-email'); ?>"></a>
											       					<?php else: ?>
											       						<a class="teammate-link teammate-email icon-email float-right text-decor-none" href="#contact-form"></a>				
											       					<?php endif; ?>
											       				</div>
											       			</div>
											       		</div>
										       			<div class="teammate-contents float-left">
										       				<h3 class="teammate-name all-caps" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"><?php the_sub_field('teammate-name'); ?></h3>
										       				<p class="teammate-position" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800"><?php the_sub_field('teammate-position'); ?></p>
										       				<p class="teammate-quotation" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-offset="100">«<?php the_sub_field('teammate-quotation'); ?>»</p>
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
		    				<div class="custom-field-group text-block-2-columns 
    						<?php
    						echo 'custom-field-group-' . $customFieldGroupNumber . ' ';
    						if( get_sub_field('tb2c-bg_color') == 'green' ): 
								echo 'green-bg';
							elseif ( get_sub_field('tb2c-bg_color') == 'gray' ): 
								echo 'gray-bg';
							else :
								echo 'no-bg';
							endif; ?>">
								<div class="container">
									<div class="row">
										<div class="triangle-cut" data-aos="fade" data-aos-delay="100" data-aos-duration="600" data-aos-offset="120">
						       				<div class="triangle"></div>
						       			</div>
										<div class="tb2c-column-wrapper flex-hor-c" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-offset="200">
									        <div class="tb2c-left tb2c-column w-50 w-sm-100 hyphenate">
									        	<?php the_sub_field('tb2c-left'); ?>
									        </div>
									        <div class="tb2c-right tb2c-column w-50 w-sm-100 hyphenate">
									        	<?php the_sub_field('tb2c-right'); ?>
									        </div>
									    </div>
								    </div>
								</div>
							</div>
							<!-- /Text Block 2 Columns Block -->							
					        <?php elseif ( get_row_layout() == 'branch_offices' ): $branch__offices_count=-1; ?>
					        <!-- Branch Offices Block -->
	    						<div class="custom-field-group branch-offices
	    						<?php
    							echo 'custom-field-group-' . $customFieldGroupNumber . ' ';
    							if( get_sub_field('bo-bg_color') == 'green' ): 
									echo 'green-bg';
								elseif ( get_sub_field('bo-bg_color') == 'gray' ): 
									echo 'gray-bg';
								else :
									echo 'no-bg';
								endif; ?>">
									<div class="container">
										<div class="row">
											<h2 class="custom-field-group-title title-triangle">
												<span class="triangle-cut">
													<span class="triangle"></span>
												</span>
												<span class="hyphenate"><?php _e('Filialen', 'btoaudit'); ?></span>
											</h2>
											<div class="branch-office-wrapper flex-hor-c">
				    							<?php if( have_rows('branch_office') ):
				    								// loop through the rows of data
						    						while ( have_rows('branch_office') ) : the_row();
						    							$branch__offices_count++;
						    							$address_1 = get_sub_field('bo-address_1');
						    							$address_1 = strtolower(str_replace(' ', '+', $address_1));
						    							$address_2 = get_sub_field('bo-address_2');
						    							$address_2 = strtolower(str_replace(' ', '+', $address_2)); ?>
						    							<div class="branch-office row w-33 w-sm-100">
						    								<div class="bo-list-wrapper float-left">
							    								<ul class="bo-address bo-list" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
							    									<li class="bo-bo_name"><?php the_sub_field('bo-bo_name'); ?></li>
							    									<li class="bo-address_1"><?php the_sub_field('bo-address_1'); ?></li>
							    									<li class="bo-address_2"><?php the_sub_field('bo-address_2'); ?></li>
							    								</ul>
							    								<ul class="bo-contacts bo-list" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
							    									<li class="bo-phone">
							    										<a class="text-decor-none" href="tel:<?php $phone = get_sub_field('bo-phone'); echo str_replace(' ', '', $phone); ?>">
							    											<?php the_sub_field('bo-phone'); ?>
							    										</a>
							    									</li>
							    									<li class="bo-email">
							    										<a href="mailto:<?php the_sub_field('bo-email'); ?>"><?php the_sub_field('bo-email'); ?></a>
							    									</li>
							    								</ul>
							    							</div>
						    								<div class="google-maps-wrapper w-100 float-left">
							    								<div class="google-maps" data-aos="fade" data-aos-delay="<?php echo (100 + $branch__offices_count * 200) ?>" data-aos-duration="800" data-aos-offset="150">
							    									<iframe
																	  style="border:0"
																	  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAiWaHtquUedxU34km3yEKsaq4BkjrTmGs&q=<?php echo $address_1 . '+' . $address_2 ?>" allowfullscreen>
																	</iframe>
							    								</div>
							    								<a class="google-maps-directions" href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $address_1 . '+' . $address_2 ?>" target="_blank" data-aos="fade" data-aos-delay="<?php echo (100 + $branch__offices_count * 150) ?>" data-aos-duration="800">>&nbsp;<?php _e('Routenplaner in Googlemaps öffnen', 'btoaudit'); ?></a>
							    							</div>
						    							</div>
					    							<?php endwhile; ?>
					    						<?php endif; ?>	
					    					</div>
					    				</div>
					    			</div>
					    		</div>
					    	<!-- /Branch Offices Block -->		    				
		    				<?php elseif ( get_row_layout() == 'contact_form' ): ?>
		    				<!-- Contact Form Block -->
		    				<div class="custom-field-group contact-form 
    						<?php
    						echo 'custom-field-group-' . $customFieldGroupNumber . ' ';
    						if( get_sub_field('cf-bg_color') == 'green' ): 
								echo 'green-bg';
							elseif ( get_sub_field('cf-bg_color') == 'gray' ): 
								echo 'gray-bg';
							else :
								echo 'no-bg';
							endif; ?>" id="contact-form">
								<div class="container">
									<div class="row">
										<h2 class="custom-field-group-title title-triangle">
											<span class="triangle-cut">
												<span class="triangle"></span>
											</span>
											<span class="hyphenate"><?php _e('Kontaktformular', 'btoaudit'); ?></span>
										</h2>
										<div class="contact-form-wrapper" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1100" data-aos-offset="200">
											<?php
												$contact_form = get_sub_field('cf-form');
												echo do_shortcode($contact_form);
											?>
										</div>
								    </div>
								</div>
							</div>
							<!-- /Contact Form Block -->						
		    				<?php elseif ( get_row_layout() == 'imprint' ): ?>
		    				<!-- Imprint Block -->
		    				<div class="custom-field-group imprint 
    						<?php
    						echo 'custom-field-group-' . $customFieldGroupNumber . ' ';
    						if( get_sub_field('imprint-bg_color') == 'green' ): 
								echo 'green-bg';
							elseif ( get_sub_field('imprint-bg_color') == 'gray' ): 
								echo 'gray-bg';
							else :
								echo 'no-bg';
							endif; ?>">
								<div class="container">
									<div class="row">
										<h2 class="custom-field-group-title title-triangle">
											<span class="triangle-cut">
												<span class="triangle"></span>
											</span>
											<span class="hyphenate"><?php _e('Impressum', 'btoaudit'); ?></span>
										</h2>
										<div class="imprint-contents">
											<div class="imprint-content-block" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
												<h6 class="imprint-contect-heading"><?php _e('Herausgeber', 'btoaudit'); ?></h6>
												<p class="imprint-content-content"><?php the_sub_field('imprint-editor'); ?></p>
											</div>
											<div class="imprint-content-block" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
												<h6 class="imprint-contect-heading"><?php _e('Inhaber', 'btoaudit'); ?></h6>
												<p class="imprint-content-content"><?php the_sub_field('imprint-owner'); ?></p>
											</div>
											<div class="imprint-content-block" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
												<h6 class="imprint-contect-heading"><?php _e('Web Beratung, -Design & -Programmierung', 'btoaudit'); ?></h6>
												<a class="p imprint-content-content text-decor-none" href="http://creationworx.com/" target="_blank"><?php _e('creationworx.ch', 'btoaudit'); ?></a>												
											</div>											
										</div>
								    </div>
								</div>
							</div>
							<!-- /Imprint Block -->							
				    		<?php elseif ( get_row_layout() == 'full_width_image' ): ?>
				    		<!-- Full Width Image Block -->		    			
						    	<div class="custom-field-group full-width-image
						    	<?php
    							echo 'custom-field-group-' . $customFieldGroupNumber . ' '; ?>">
						    		<img class="full-width-image-img" src="<?php the_sub_field('full_width_image-img'); ?>" alt="full width image">
						    	</div>
						    <!-- /Full Width Image Block -->
					        <?php elseif ( get_row_layout() == 'logo_block_layout' ): $logo_count=-1; ?>
					        <!-- Logo Block Layout Block -->
						        <div class="custom-field-group logo-block-layout 
	    						<?php
    							echo 'custom-field-group-' . $customFieldGroupNumber . ' ';
    							if( get_sub_field('lb-bg_color') == 'green' ): 
									echo 'green-bg';
								elseif ( get_sub_field('lb-bg_color') == 'gray' ): 
									echo 'gray-bg';
								else :
									echo 'no-bg';
								endif; ?>">
									<div class="container">
										<div class="row">
											<div class="logo-block-wrapper flex-hor-c">
									        	<?php // check if the nested repeater field has rows of data
				    							if( have_rows('logo_block') ):
				    								// loop through the rows of data
						    						while ( have_rows('logo_block') ) : the_row(); $logo_count++ ?>
														<a class="logo-block-link flex-vert-c w-33 w-xxs-100" href="<?php the_sub_field('logo_block-link'); ?>" target="_blank" data-aos="fade" data-aos-delay="<?php echo (100 + $logo_count * 150) ?>" data-aos-duration="800">
															<span class="logo-block-img-wrap inline-hor-c w-100">
																<img class="logo-block-img inline-block" src="<?php the_sub_field('logo_block-img'); ?>" alt="logo image">
															</span>
														</a>
										    		<?php endwhile;
										    	endif; ?>
										    </div>
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
