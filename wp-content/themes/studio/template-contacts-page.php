<?php
/*
Template name: Contacts page
*/

get_header(); 
?>
    
    <section id="ng-container" class="clearfix">
        <section class="contact-page" id="contact-page">
            <div class="container clearfix">
                <?php if(get_field('enable_block_a_section_contacts_page', get_the_ID()) == 'yes'){ ?>
                <div class="container-small clearfix">
                    <div class="block-title bte wowd draw fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <p><?php echo get_field('title_block_a_award_content_contacts_page', get_the_ID()); ?></p>
                    </div>
                    <div class="contact-tag wowd fadeInUpSmall" style="visibility: visible; animation-name: fadeInUpSmall;">
                        <?php echo get_field('title_block_b_award_content_contacts_page', get_the_ID()); ?>
                    </div>
                </div>

                <div class="contact-page-india wow fadeInUpSmall" style="visibility: visible; animation-name: fadeInUpSmall;"></div>
                <?php } ?>
                
                <?php if(get_field('enable_block_b_section_contacts_page', get_the_ID()) == 'yes'){ ?>
                <div class="container-medium clearfix">
                    <div class="office-location wow fadeInUpSmall" style="visibility: visible; animation-name: fadeInUpSmall;">
                        <h3><?php echo get_field(' title_block_a_cave_content_contacts_page', get_the_ID()); ?></h3>
                        <div>
                            <?php echo get_field('address_text_cave_content_contacts_page', get_the_ID()); ?>
                        </div>
                    </div>
                    <a href="<?php echo get_field('link_text_cave_content_contacts_page', get_the_ID()); ?>" target="_blank" class="office-on-map wow fadeInUpSmall" data-wow-delay="0.1s" title="" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUpSmall;">
                        <?php echo get_field('title_block_b_cave_content_contacts_page', get_the_ID()); ?>
                    </a>
                </div>
                <?php } ?>
            </div>
        </section>
        
        <?php if(get_field('enable_block_c_section_contacts_page', get_the_ID()) == 'yes'){ ?>
        <section class="contact-form" id="contact-form">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <div class="contact-tag wow fadeInUpSmall" style="visibility: hidden; animation-name: none;">
                        <h2><?php echo get_field('title_block_a_form_content_contacts_page', get_the_ID()); ?></h2>
                    </div>
                    <div class="block-title draw wow fadeIn" data-class="btcustom" style="visibility: hidden; animation-name: none;">
                        <?php echo get_field('title_block_b_form_content_contacts_page', get_the_ID()); ?>
                    </div>
                    <div class="contact-form-wrapper wow fadeIn" style="visibility: hidden; animation-name: none;">
                        <?php
                            $forms_a = get_field('contactform_rel_form_content_contacts_page');
                            if($forms_a){
                                echo do_shortcode('[contact-form-7 id=" ' . $forms_a . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>

        <section class="career" id="career">
            <div class="container">
                <?php echo get_field('title_block_a_career_content_main_page', '8'); ?>
                <div class="container-small clearfix">
                    <div class="block-title draw" data-class="btcustom">
                        <?php echo get_field('title_block_a_career_content_main_page', '8'); ?>
                    </div>
                </div>

                <div class="container-medium clearfix">
                    <div class="career-withus">
                        <?php echo get_field('title_block_b_career_content_main_page', '8'); ?>
                    </div>
                </div>
            </div>
        </section>
    </section>
            
<?php get_footer(); ?>