<?php
/*
Template name: Main page
*/

get_header(); 
?>
    
    <section id="ng-container" class="clearfix">
        <?php if(get_field('enable_block_a_section_main_page', get_the_ID()) == 'yes'){ ?>
        <div class="landing clearfix" id="landing">
            <div class="landing-wrapper">
                <div class="lion">
                    <div class="lion" id="l_svg">
                        <img src="<?php echo get_field('logo_image_logotype_content_main_page', get_the_ID()); ?>" id="svglion">
                    </div>
                    <div class="landing-slogan">
                        <div class="landing-slogan-wrapper">
                            <h2 class="wow fadeInUpSmall"><?php echo get_field('title_text_logotype_content_main_page', get_the_ID()); ?></h2>
                            <a href="<?php echo get_permalink('77'); ?>" title="" class="wow fadeInUpSmall red" data-wow-delay="0.5s"><?php echo get_field('link_text_logotype_content_main_page', get_the_ID()); ?></a>
                        </div>
                    </div>
                    <div class="mouse-icon">
                        <div class="wheel"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <?php if(get_field('enable_block_b_section_main_page', get_the_ID()) == 'yes'){ ?>
        <div class="home clearfix" id="home">
            <div class="home-wrapper">
                <div class="tag-line">
                    <?php echo get_field('title_text_weborn_content_main_page', get_the_ID()); ?>
                    <span class="tag-line-red" id="creativeId">
				        <img src="<?php echo get_field('image_text_weborn_content_main_page', get_the_ID()); ?>">
			        </span>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if(get_field('enable_block_c_section_main_page', get_the_ID()) == 'yes'){ ?>
        <div class="tagline clearfix">
            <div class="tagline-wrapper">
                <h3 class="wow fadeInUpSmall"><?php echo get_field('title_text_wrapper_content_main_page', get_the_ID()); ?></h3>
            </div>
        </div>
        <?php } ?>
        
        <?php if(get_field('enable_block_d_section_main_page', get_the_ID()) == 'yes'){ ?>
        <div class="featured aniborder" id="featured">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <div class="block-title draw">
                        <?php echo get_field('title_text_featured_content_main_page', get_the_ID()); ?>
                    </div>
                </div>
                <?php echo get_field('product_text_featured_content_main_page', get_the_ID()); ?>
            </div>
        </div>
        <?php } ?>
        
        <?php if(get_field('enable_block_e_section_main_page', get_the_ID()) == 'yes'){ ?>
        <div class="agency aniborder" id="agency">
            <div class="container clearfix">
                <div class="container-medium clearfix">
                    <div class="agency-tag ">
                        <?php echo get_field('title_block_a_agency_content_main_page', get_the_ID()); ?>
                        <div class="block-title draw wow fadeIn" data-wow-delay="0.4s">
                            <?php echo get_field('title_block_b_agency_content_main_page', get_the_ID()); ?>
                        </div>
                    </div>
                    <div class="agency-exp-awards wow fadeIn">
                        <div class="block-title wow fadeIn">
                            <?php echo get_field('title_block_c_agency_content_main_page', get_the_ID()); ?>
                        </div>
                        <?php if( have_rows('awards_rep_agency_content_main_page')){ ?>
                        <div class="block-title wow fadeIn">
                            <div class="bx-wrapper">
                                <div class="bx-viewport" aria-live="polite">
                                    <ul class="awards-slider">
                                        <?php while ( have_rows('awards_rep_agency_content_main_page') ) { the_row(); ?>
                                        <li aria-hidden="<?php the_sub_field('hidden_subblock_main_page'); ?>">
                                            <div class="title"><?php the_sub_field('title_subblock_main_page'); ?></div>
                                            <article><img
                                                    src="<?php the_sub_field('image_subblock_main_page'); ?>"
                                                    alt="<?php the_sub_field('alt_subblock_main_page'); ?>"><br><?php the_sub_field('text_subblock_main_page'); ?>
                                            </article>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="about-agency wow fadeIn" data-wow-delay="0.2s">
                        <?php echo get_field('text_block_d_agency_content_main_page', get_the_ID()); ?>
                        <a href="<?php echo get_permalink('118'); ?>" class="more">
                            <img src="<?php echo get_field('image_block_a_agency_content_main', get_the_ID()); ?>">
                        </a>
                    </div>
                    <div class="agency-video desktop-hide wow fadeInUpSmall animated">
                        <a data-fancybox href="<?php echo get_field('link_text_agency_content_main_page', get_the_ID()); ?>">
                            <img src="<?php echo get_field('image_block_b_agency_content_main', get_the_ID()); ?>">
                            <img src="<?php echo get_field('image_block_c_agency_content_main', get_the_ID()); ?>">
                        </a>
                    </div>
                    <div class="agency-founder wow fadeIn td-hx" data-wow-delay="0.3s">
                        <div class="block-title draw">
                            <div class="title">Sunny <br> Rathod</div>
                            <p>Founder &amp; CEO</p>
                        </div>
                        <a href="<?php echo get_permalink('118'); ?>" title="">
                            <div class="img tdhxe"></div>
                        </a>
                    </div>
                    <div class="agency-video mobile-hide wow fadeInUpSmall">
                        <a data-fancybox href="<?php echo get_field('link_text_agency_content_main_page', get_the_ID()); ?>">
                            <img src="<?php echo get_field('image_block_b_agency_content_main', get_the_ID()); ?>">
                            <img src="<?php echo get_field('image_block_c_agency_content_main', get_the_ID()); ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if(get_field('enable_block_f_section_main_page', get_the_ID()) == 'yes'){ ?>
        <div class="career aniborder" id="career">
            <div class="container">
                <?php echo get_field('title_block_a_career_content_main_page', get_the_ID()); ?>

                <div class="container-small clearfix">
                    <div class="block-title draw">
                        <?php echo get_field('title_block_a_career_content_main_page', get_the_ID()); ?>
                    </div>
                </div>

                <div class="container-medium clearfix">
                    <div class="career-withus">
                        <?php echo get_field('title_block_b_career_content_main_page', get_the_ID()); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="start-project aniborder" id="start-project">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <?php echo get_field('title_block_a_project_content_main_page', get_the_ID()); ?>
                    <div class="block-title draw wow fadeIn" data-wow-delay="0.3s">
                        <?php echo get_field('title_block_a_project_content_main_page', get_the_ID()); ?>
                    </div>

                    <div class="start-project-block wow fadeIn">
                        <div class="launch"></div>
                        <?php echo get_field('title_block_b_project_content_main_page', get_the_ID()); ?>
                        <a href="<?php echo get_permalink('144'); ?>" title=""><?php echo get_field('link_text_project_content_main_page', get_the_ID()); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="openVideo" class="ng-hide">
            <a class="close" href="javascript:void(0);" title="Close"></a>
            <div class="content">
                <div class="content" ng-bind-html="viFrame"></div>
            </div>
        </div>
    </section>
            
<?php get_footer(); ?>