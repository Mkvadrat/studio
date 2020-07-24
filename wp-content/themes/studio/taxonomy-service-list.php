<?php
/*
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com
Author: q3dm0
Author URI: http://mkvadrat.com
Description: Theme for http://mkvadrat.com
Version: 2.5.0
*/

get_header();
?>
	
	<section id="ng-container" class="clearfix">
		<?php                  
			$term = get_queried_object();
			$cat_id = $term->term_id;
			$image_id = get_term_meta($cat_id, 'main_image_block_a_blog_rubric_page', true);
			$image_url = wp_get_attachment_image_src($image_id, 'full');
		?>
        <section class="projects-page" id="projects-page">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <div class="block-title wowd bte draw fadeInDown animated btb-active" style="visibility: visible; animation-name: fadeInDown;">
                        <h1 class="title"><?php echo $term->name; ?></h1>
                        <?php echo get_term_meta($cat_id, 'main_text_block_a_service_rubric_page', true); ?>
                    </div>
                </div>
            </div>
        </section>
		
		<?php echo get_term_meta($cat_id, 'main_text_block_b_service_rubric_page', true); ?>
		
        <section class="blogs" id="blog-detail">
            <div class="blogs-wrapper">
				<?php
					$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'category' 	     => 'service-list',
						'post_type'      => 'service',
						'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
						'paged'          => $current_page
					);
		
					$action_list = get_posts( $args );
					
					if($action_list){
				?>

                <div class="blogs-lists">
                    <div class="container-small">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.1s"><?php echo get_term_meta($cat_id, 'main_text_block_c_service_rubric_page', true); ?></h2>
                        <div class="clearfix"></div>
						
						<?php foreach($action_list as $action){ ?>
							<?php
							$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($action->ID), 'full');
							$subtitle = wp_trim_words( get_post_meta( $action->ID, 'subtitle_details_block_a_service_post_page', $single = true ), 15, '...' );
							$link = get_permalink($action->ID);
						?>
                       <div class="container">
                       		<div class="blogs-blog">
	                            <div class="tdblg-l1">
	                                <div class="blogs-blog-right">
	                                    <div class="blog-topic cursor-link wowd fadeInUpSmall">
	                                        <p><?php echo $action->post_title; ?></p>
	                                        <p><strong><?php echo $subtitle; ?></strong></p>
	                                        <a href="<?php echo $link; ?>">
	                                            <svg height="26px" width="45px" role="img">
	                                                <use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#blog-arrow"></use>
	                                            </svg>
	                                        </a>
	                                    </div>
	                                    <div class="clearfix"></div>
	                                </div>
	                                <div class="blogs-blog-left">
	                                    <div class="bl-full wow fadeInUpSmall blogImgBg" data-wow-delay="0.3s" style="background-image: url('<?php echo $image_url[0] ? $image_url[0] : '/wp-content/themes/studio/images/creativeBg.jpg'; ?>')"></div>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </div>
	                        </div>
                       </div>
						<?php } ?>
						<?php wp_reset_postdata(); ?>
						
						<?php
							$defaults = array(
								'type' => 'array',
								'prev_next'    => True,
								'prev_text'    => __('Назад'),
								'next_text'    => __('Далее'),
							);
				
							$pagination = paginate_links($defaults);
							
						if($pagination){
						?>                                       
                        <div class="paggination wow animated" data-wow-delay="0.5s">
                            <ul>
								<?php foreach ($pagination as $pag){ ?>
                                <li><?php echo $pag; ?></li>
								<?php } ?>
                            </ul>
                        </div>
						<?php } ?>
                    </div>
                </div>
				<?php } ?>
            </div>
        </section> 
		
		<?php echo get_term_meta($cat_id, 'main_text_block_c_service_rubric_page', true); ?>
		
        <div>
            <section class="start-project" id="start-project">
                <div class="container clearfix">
                    <div class="container-small clearfix">
                        <?php echo get_field('title_block_a_project_content_main_page', '8'); ?>
                        <div class="block-title draw wow fadeIn">
                            <?php echo get_field('title_block_b_project_content_main_page', '8'); ?>
                        </div>
                        <div class="start-project-block wow fadeIn" data-wow-delay="0.1s">
                            <div class="launch"></div>
                            <?php echo get_field('title_block_c_project_content_main_page', '8'); ?>
							<a href="<?php echo get_permalink('144'); ?>" title=""><?php echo get_field('link_text_project_content_main_page', '8'); ?></a>
                        </div>
                    </div>
                </div>
            </section>
			
            <a href="#" class="moveup" style="display: none;">
                <svg height="35px" width="80px" role="img">
                    <use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-arrow"></use>
                </svg>
            </a>
        </div>
    </section>
	
<?php get_footer(); ?>
