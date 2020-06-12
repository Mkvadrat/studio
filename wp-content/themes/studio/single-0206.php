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
	
	<section id="ng-container">
        <section class="project-detail" id="project-detail">
            <div class="project-detail-wrapper">
                <div class="project-photo">
					<?php $image_url = get_field('image_project_post_page', get_the_ID()); ?>
					
                    <img alt="" src="<?php echo $image_url ? $image_url : '/wp-content/themes/studio/images/creativeBg.jpg';?>">
                    <div class="container">
                        <div class="container-small clearfix">
                            <div class="block-title bte draw wow fadeInDown  btb-active">
                                <h1 class="title"><?php the_title(); ?></h1>
                                <p><?php echo get_field('subtitle_project_post_page', get_the_ID()); ?></p>
                            </div>
                            <div class="project-title wow fadeIn">
                                <?php echo get_field('short_description_project_post_page', get_the_ID()); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-details-inner">
                    <div class="project-content">
                        <div class="container">
                            <div class="container-medium clearfix">
                                <?php echo get_field('name_project_post_page', get_the_ID()); ?>
								<?php if( have_rows('category_rep_project_post_page')){ ?>
                                <div class="project-service wow fadeInUp" data-wow-delay="0.5s">
                                    <h4><?php echo get_field('category_project_post_page', get_the_ID()); ?></h4>
                                    <ul>
										<?php while ( have_rows('category_rep_project_post_page') ) { the_row(); ?>
                                        <li><?php the_sub_field('title_subblock_project_post_page'); ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
					
					<div class="ajax">
						<div>
							<div class="branding-projects">
								<?php echo get_field('full_description_project_post_page', get_the_ID()); ?>							
							</div>
						</div>
					</div>
					
					<?php 
						$next = get_adjacent_post(true,'',false);
						$prev = get_adjacent_post(true,'',true);
					?>
					
					<div class="project-nav">
						<div class="container clearfix">
							<?php if($next){ ?>
								<div class="line btwe"></div>
								<a class="back-nav" href="<?php echo get_category_link('7'); ?>">
									<svg height="24px" width="24px" role="img">
										<use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-all" id="miu"></use>
									</svg>
								</a>
								<a class="next-nav" href="<?php echo get_permalink($next->ID); ?>">Далее
									<span><?php echo $next->post_title?></span></a>
								<div class="line bottom-line btwe"></div>
							<?php }else{ ?>
								<div class="line btwe"></div>
								<a class="back-nav" href="<?php echo get_category_link('7'); ?>">
									<svg height="24px" width="24px" role="img">
										<use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-all" id="miu"></use>
									</svg>
								</a>
							<?php } ?>
							
							<?php if($prev){ ?>
								<div class="line btwe"></div>
								<a class="back-nav" href="<?php echo get_category_link('7'); ?>">
									<svg height="24px" width="24px" role="img">
										<use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-all" id="miu"></use>
									</svg>
								</a>
								<a class="prev-nav" href="<?php echo get_permalink($prev->ID); ?>">Назад
									<span><?php echo $prev->post_title?></span></a>
								<div class="line bottom-line btwe"></div>
							<?php }else{ ?>
								<div class="line btwe"></div>
								<a class="back-nav" href="<?php echo get_category_link('7'); ?>">
									<svg height="24px" width="24px" role="img">
										<use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-all" id="miu"></use>
									</svg>
								</a>
							<?php } ?>
						</div>
					</div>
                </div>
            </div>
        </section>

        <div class="sticky-proj-nav">
            <a class="sticky-list-nav" href="<?php echo get_category_link('7'); ?>">
                <svg height="24px" width="24px" role="img">
                    <use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-all" title="Work" id="miu"></use>
                </svg>
            </a>
			<?php if($next){ ?>
            <a class="sticky-next-nav" href="<?php echo get_permalink($next->ID); ?>">
                <svg height="35px" width="80px" role="img">
                    <use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-arrow"></use>
                </svg>
            </a>
			<?php } ?>
			<?php if($prev){ ?>
            <a class="sticky-prev-nav" href="<?php echo get_permalink($prev->ID); ?>">
                <svg height="35px" width="80px" role="img">
                    <use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-arrow"></use>
                </svg>
            </a>
			<?php } ?>
        </div>

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
            <a href="#" class="moveup" title="Top"
               style="display: none;">
                <svg height="35px" width="80px" role="img">
                    <use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-arrow"></use>
                </svg>
            </a>
		</div>
    </section>
	
<?php get_footer(); ?>
