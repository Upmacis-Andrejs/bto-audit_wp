<?php /* Template Name: Front Page Template */ get_header(); ?>

	<main role="main">

		<?php 
		// the query
		$args = array(
			'post_type' => 'page',
			'order' => 'ASC'
		);
		$pageNumber = -1;
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $pageNumber++ ?>
				<section id="section-<?php echo $pageNumber ?>">
					<div class="container">
						<div class="row">
							<?php if( $pageNumber>=1 ) : ?>
								<h2><?php the_title(); ?></h2>
							<?php else : ?>	
								<h2 class="hidden"><?php the_title(); ?></h2>
							<?php endif; ?>
						</div>
					</div>
					<!-- loop through page builder -->
					<?php
					// check if the flexible content field has rows of data
					if( have_rows('page_builder_content') ):

					 	// loop through the rows of data
					    while ( have_rows('page_builder_content') ) : the_row();

							// check current row layout
					        if( get_row_layout() == 'text_block_with_button' ): ?>
					        <div class="custom-field-group" style="
								<?php if( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									elseif ( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									?
										echo ' '
									?>				
							">
								<div class="container">
									<div class="row">					        
								        <ul>
								        	<li>
								        		<span><?php echo get_sub_field_object('tbwb-title')['label']; ?>:&nbsp;</span>
								        		<span><?php echo the_sub_field('tbwb-title'); ?></span>		
								        	</li>
								        	<li>
								        		<span><?php echo get_sub_field_object('tbwb-description')['label']; ?>:&nbsp;</span>
								        		<span><?php echo the_sub_field('tbwb-description'); ?></span>		
								        	</li>
								        	<li>
								        		<span><?php echo get_sub_field_object('tbwb-button')['label']; ?>:&nbsp;</span>
								        		<span><?php echo the_sub_field('tbwb-button'); ?></span>		
								        	</li>							        	
								        </ul>
								    </div>
								</div>
							</div>
					        <?php elseif ( get_row_layout() == 'teammate_block' ):
					        	// check if the nested repeater field has rows of data
    							if( have_rows('teammate') ):
    								// loop through the rows of data
		    						while ( have_rows('teammate') ) : the_row(); ?>
		    						<div class="custom-field-group" style="
										<?php if( get_field('') == '' ): 
												echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
											elseif ( get_field('') == '' ): 
												echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
											?
												echo ' '
											?>				
									">
										<div class="container">
											<div class="row">
									       		<ul>
					    							<li>
					    								<span><?php echo get_sub_field_object('teammate-name')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('teammate-name'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('teammate-position')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('teammate-position'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('teammate-quotation')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('teammate-quotation'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('teammate-picture')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('teammate-picture'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('teammate-linkedin')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('teammate-linkedin'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('teammate-xing')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('teammate-xing'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('teammate-facebook')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('teammate-facebook'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('teammate-email')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('teammate-email'); ?></span>
					    							</li>
									       		</ul>
									    	</div>
								    	</div>
								    </div>
		    						<?php endwhile;
		    					endif;
		    				elseif ( get_row_layout() == 'text_block_2_columns' ): ?>
		    				<div class="custom-field-group" style="
								<?php if( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									elseif ( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									?
										echo ' '
									?>				
							">
								<div class="container">
									<div class="row">		    				
								        <ul>			    					
					    					<li>
					    						<span><?php echo get_sub_field_object('tb2c-left')['label']; ?>:&nbsp;</span>	
					    						<span><?php the_sub_field('tb2c-left'); ?></span>
					    					</li>
								        	<li>
								        		<span><?php echo get_sub_field_object('tb2c-right')['label']; ?>:&nbsp;</span>
								        		<span><?php the_sub_field('tb2c-right'); ?></span>
								        	</li>
								        </ul>
								    </div>
								</div>
							</div>	    												        	
					        <?php elseif ( get_row_layout() == 'branch_office' ):
					        	// check if the nested repeater field has rows of data
    							if( have_rows('teammate') ):
    								// loop through the rows of data
		    						while ( have_rows('teammate') ) : the_row(); ?>
		    						<div class="custom-field-group" style="
										<?php if( get_field('') == '' ): 
												echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
											elseif ( get_field('') == '' ): 
												echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
											?
												echo ' '
											?>				
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
		    					endif;
		    				elseif ( get_row_layout() == 'contact_form' ): ?>
		    				<div class="custom-field-group" style="
								<?php if( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									elseif ( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									?
										echo ' '
									?>				
							">
								<div class="container">
									<div class="row">		    				
								    	<ul>
				    						<li>
				    							<span><?php echo get_sub_field_object('cf-form')['label']; ?>:&nbsp;</span>
				    							<span><?php the_sub_field('cf-form'); ?></span>
				    						</li>
								    	</ul>
								    </div>
								</div>
							</div>
		    				<?php elseif ( get_row_layout() == 'imprint' ): ?>
		    				<div class="custom-field-group" style="
								<?php if( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									elseif ( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									?
										echo ' '
									?>				
							">
								<div class="container">
									<div class="row">		    						    					
								    	<ul>
					    					<li>
					    						<span><?php echo get_sub_field_object('imprint-editor')['label']; ?>:&nbsp;</span>
					    						<span><?php the_sub_field('imprint-editor'); ?></span>
					    					</li>
					    					<li>
					    						<span><?php echo get_sub_field_object('imprint-owner')['label']; ?>:&nbsp;</span>
					    						<span><?php the_sub_field('imprint-owner'); ?></span>
					    					</li>
								    	</ul>
								    </div>
								</div>
							</div>
				    		<?php elseif ( get_row_layout() == 'full_width_image' ): ?>
				    		<div class="custom-field-group" style="
								<?php if( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									elseif ( get_field('') == '' ): 
										echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
									?
										echo ' '
									?>				
							">
								<div class="container">
									<div class="row">		    				
								    	<ul>			    					
				    						<li>
				    							<span><?php echo get_sub_field_object('full_width_image-img')['label']; ?>:&nbsp;</span>
				    							<span><?php the_sub_field('full_width_image-img'); ?></span>
				    						</li>
								    	</ul>
								    </div>
								</div>
							</div>
					        <?php elseif ( get_row_layout() == 'logo_block_layout' ):
					        	// check if the nested repeater field has rows of data
    							if( have_rows('logo_block') ):
    								// loop through the rows of data
		    						while ( have_rows('logo_block') ) : the_row(); ?>
		    						<div class="custom-field-group" style="
										<?php if( get_field('') == '' ): 
												echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
											elseif ( get_field('') == '' ): 
												echo 'background-image: linear-gradient( 45deg, red, #f06d06 );'
											?
												echo ' '
											?>				
									">
										<div class="container">
											<div class="row">
								    			<ul>
					    							<li>
					    								<span><?php echo get_sub_field_object('logo_block-link')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('logo_block-link'); ?></span>
					    							</li>
					    							<li>
					    								<span><?php echo get_sub_field_object('logo_block-img')['label']; ?>:&nbsp;</span>
					    								<span><?php the_sub_field('logo_block-img'); ?></span>
					    							</li>
								    			</ul>
								    		</div>
								    	</div>
								    </div>
		    						<?php endwhile;
		    					endif;

					        endif;

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
