<?php
/*
Template name: Agency page
*/

get_header(); 
?>
    
    <section id="ng-container" class="clearfix">
        
        <?php if(get_field('enable_block_a_section_agency_page', get_the_ID()) == 'yes'){ ?>
        <section class="agency-page" id="agency-page">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <div class="block-title bte draw wow fadeInDown  btb-active">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <p><?php echo get_field('subtitle_block_a_agency_page', get_the_ID()); ?></p>
                    </div>
                    <div class="agency-tag wow fadeInUpSmall">
                        <?php echo get_field('title_text_block_a_agency_page', get_the_ID()); ?>
                    </div>
                </div>
            </div>
            <div class="container clearfix">
                <div class="container-medium clearfix">
                    <div class="about-agency wow fadeInUpSmall" data-wow-delay="0.1s">
                        <?php echo get_field('text_block_a_agency_page', get_the_ID()); ?>
                    </div>
                    <div class="agency-statue wow fadeInUpSmall" data-wow-delay="0.2s">
                        <?php echo get_field('text_block_b_agency_page', get_the_ID()); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        
        <?php if(get_field('enable_block_b_section_agency_page', get_the_ID()) == 'yes'){ ?>
        <section class="agency-design-dev">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <div class="agency-tag">
                        <?php echo get_field('title_block_a_agency_page', get_the_ID()); ?>
                    </div>
                </div>
                <div class="container-small clearfix">
                    <div class="block-title black-title draw">
                        <?php echo get_field('title_text_block_b_agency_page', get_the_ID()); ?>
                    </div>
                </div>
            </div>
            <div class="container clearfix">
                <div class="container-medium clearfix td-lx">
                    <div class="agency-design-dev-tag">
                        <div class="img tdlxe"></div>
                        <?php echo get_field('title_block_b_agency_page', get_the_ID()); ?>
                    </div>
                </div>
            </div>
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <?php if( have_rows('rep_block_a_agency_page')){ ?>
                    <div class="agency-design wow fadeInUpSmall" data-wow-delay="0.2s">
                        <h4><?php echo get_field('title_block_c_agency_page', get_the_ID()); ?></h4>
                        <ul>
                            <?php while ( have_rows('rep_block_a_agency_page') ) { the_row(); ?>
                                <li><?php the_sub_field('title_subblock_agency_page'); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <?php if( have_rows('rep_block_b_agency_page')){ ?>
                    <div class="agency-development wow fadeInUpSmall" data-wow-delay="0.3s">
                        <h4><?php echo get_field('title_block_d_agency_page', get_the_ID()); ?></h4>
                        <ul>
                            <?php while ( have_rows('rep_block_b_agency_page') ) { the_row(); ?>
                                <li><?php the_sub_field('title_subblock_agency_page'); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <?php if( have_rows('rep_block_c_agency_page')){ ?>
                    <div class="agency-video-production wow fadeInUpSmall" data-wow-delay="0.4s">
                        <h4><?php echo get_field('title_block_e_agency_page', get_the_ID()); ?></h4>
                        <ul>
                            <?php while ( have_rows('rep_block_c_agency_page') ) { the_row(); ?>
                                <li><?php the_sub_field('title_subblock_agency_page'); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php } ?>

        <?php if(get_field('enable_block_c_section_agency_page', get_the_ID()) == 'yes'){ ?>
        <section class="agency-clients">
            <div class="container clearfix">
                <?php echo get_field('title_block_f_agency_page', get_the_ID()); ?>
                <div class="block-title wow fadeIn draw" data-wow-delay="0.2s">
                    <?php echo get_field('title_text_block_c_agency_page', get_the_ID()); ?>
                </div>
                
                <div class="container-medium clearfix">
                    <div class="line"></div>
                    <?php if( have_rows('rep_block_d_agency_page')){ ?>
                    <ul>
                        <?php while ( have_rows('rep_block_d_agency_page') ) { the_row(); ?>
                        <li class="wow fadeIn" data-wow-delay="<?php the_sub_field('delay_subblock_agency_page'); ?>">
                            <span class="client10">
                                <img src="<?php the_sub_field('image_subblock_agency_page'); ?>">
                            </span>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    
                    <div class="wow fadeInUpSmall">
                        <h3><?php echo get_field('title_block_g_agency_page', get_the_ID()); ?></h3>
                        <div class="bx-wrapper" style="max-width: 100%;">
                            <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 478px;">
                                <?php $reviews = get_field_object('sel_block_a_agency_page'); ?>
                                <?php if($reviews['value']){ ?>
                                <ul class="testi-slider">
                                    <?php foreach($reviews['value'] as $review){ ?>
                                    <?php $author = get_field('author_reviews_page', $review->ID); ?>
                                    <li aria-hidden="true">
                                        <h5><?php echo $review->post_title; ?></h5>
                                        
                                        <?php echo $review->post_content; ?>
                                        
                                        <div class="author"><?php echo $author; ?></div>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        
        <?php if(get_field('enable_block_c_section_agency_page', get_the_ID()) == 'yes'){ ?>
        <section class="agency-hero">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <div class="agency-tag">
                        <?php echo get_field('title_block_h_agency_page', get_the_ID()); ?>
                    </div>
                </div>
                <div class="container-small clearfix">
                    <div class="block-title black-title wow draw fadeIn">
                        <?php echo get_field('title_text_block_d_agency_page', get_the_ID()); ?>
                    </div>
                </div>
                <div class="container-medium clearfix td-ax">
                    <div class="agency-founder-poster">
                        <?php echo get_field('text_block_c_agency_page', get_the_ID()); ?>
                        <div class="agency-founder-poster-wrapper  wow fadeIn">
                            <?php echo get_field('text_block_d_agency_page', get_the_ID()); ?>
                        </div>
                    </div>
                </div>
                <div class="agency-heros">
                    <div class="container-small clearfix">
                        <?php echo get_field('text_block_e_agency_page', get_the_ID()); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
    </section>
         
<?php get_footer(); ?>