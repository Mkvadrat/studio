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
        <section class="blogs" id="blog-detail">
            <div class="blogs-wrapper">
                <div class="blogs-photo">
					<?php $image_url = get_field('image_title_details_block_a_service_post_page', get_the_ID()); ?>
					<img src="<?php echo $image_url ? $image_url : '/wp-content/themes/studio/images/creativeBg.jpg'; ?>" alt="">
                    <div class="container">
                        <div class="container-small clearfix">
                            <div class="block-title bte draw wowd fadeInDown">
                                <h1 class="title"><?php the_title(); ?></h1>
								
								<?php $category = get_the_terms($post->ID, 'service-list'); ?>
                                <p><?php echo $category[0]->name; ?></p>
							</div>
                            <div class="blogs-title sub-big  wowd fadeIn ">
                                <?php echo get_field('image_title_details_block_b_service_post_page'); ?>
								
                                <div class="header-link">
									<?php if(get_field('link_commercial_proposal_block_a_service_post_page')){ ?>
                                    <div class="link-item">
                                        <a href="<?php echo get_field('link_commercial_proposal_block_a_service_post_page'); ?>" class="link-icon"><!-- <img src="http://mk2.mkvadrat.com/wp-content/themes/studio/images/dowload.svg"> --> Скачать коммерческое предложение</a>
                                    </div>
									<?php } ?>
									<?php if(get_field('link_compleate_project_block_a_service_post_page')){ ?>
                                    <div class="link-item">
                                        <a href="<?php echo get_field('link_compleate_project_block_a_service_post_page'); ?>">Выполненные проекты</a>
                                    </div>
									<?php } ?>
                                </div>
							</div>
                            
                        </div>
                    </div>
                </div>
                <div class="blog-details">
                    <div class="container">     
						<div class="sub-services-seo">
                            <div class="container-medium">
								<?php echo get_field('text_details_block_a_service_post_page', get_the_ID()); ?>
								
                                <h2 class="wowd fadeInUpSmall" data-wow-delay="0.1s"><?php echo get_field('subtitle_details_block_a_service_post_page', get_the_ID()); ?></h2>
                                <div class="clearfix"></div>

                               <div class="sub-serviser">
                                    <div class="blogs-blog-right">
                                    <?php
                                        $image_url = get_the_post_thumbnail_url( get_the_ID(), 'full'); 
                                    ?>
                                    <img class="bl-full wow fadeInUpSmall" src="<?php echo $image_url ? $image_url : '/wp-content/themes/studio/images/creativeBg.jpg';?>" alt="">
                                </div>
                                <div class="blogs-blog-left">
                                    <div class="blog-topic">
                                        <!-- <p><?php the_time("d F Y"); ?></p> -->
                                        <div class="bt-desc">
                                            <a href="#">hotelhersones.ru<img src="http://mk2.mkvadrat.com/wp-content/themes/studio/images/link-site.svg"></a>
                                            <?php echo get_field('addtext_details_block_a_service_post_page', get_the_ID()); ?>
                                            <img src="http://mk2.mkvadrat.com/wp-content/themes/studio/images/site-left.svg">
                                        </div>
                                    </div>
                                </div>
                               </div>
                               
                               <?php if( have_rows('social_rep_blog_post_page')){ ?>
                                <div class="blog-topic blog-topic-white blog-no-border wow fadeInUpSmall" data-wow-delay="0.1s">
                                    <p>Share on</p>
                                    
                                    <div class="social">
                                        <?php while ( have_rows('social_rep_service_post_page') ) { the_row(); ?>
                                        <a href="<?php the_sub_field('link_subblock_service_post_page'); ?>" target="_blank" title="<?php the_sub_field('class_subblock_service_post_page'); ?>" class="<?php the_sub_field('class_subblock_service_post_page'); ?> wow fadeInUp">
                                            <img src="<?php the_sub_field('image_subblock_service_post_page'); ?>">
                                        </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php } ?>
                                
                                
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sticky-proj-nav">
			<?php
				$cat = wp_get_post_terms(get_the_ID(), 'service-list');
			?>
            <a class="sticky-list-nav" href="<?php echo get_term_link($cat[0]->term_id); ?>">
                <svg height="24px" width="24px" role="img">
                    <use xlink:href="/wp-content/themes/studio/images/svg_symbols.svg#nav-all" title="Back to blog" id="miu"></use>
                </svg>
            </a>
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
