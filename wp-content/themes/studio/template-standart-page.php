<?php
/*
Template name: Standart page
*/

get_header(); 
?>
    
    <section id="ng-container" class="clearfix">
        <section class="project-page contact-page start-a-project-page" id="project-page">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <div class="block-title bte wowd draw fadeInDown btb-active">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <p><?php echo get_field('subtitle_details_block_a_standart_page', get_the_ID()); ?></p>
                    </div>
                    <div class="project-tag wowd fadeInUpSmall" data-wow-delay="0.2s">
                        <?php echo get_field('title_text_block_a_project_page', get_the_ID()); ?>
                    </div>
                </div>
                <div class="container-medium clearfix trionn-heros-lion wowd fadeInUpSmall">
                    <?php $image_url = get_field('image_block_a_standart_page', get_the_ID()); ?>
                    <img src="<?php echo $image_url ? $image_url : '/wp-content/themes/studio/images/trionn-lion.png'; ?>" alt="" class="trionn-lion" width="100%">
                </div>
            </div>
        </section>

        <section class="contact-form project-form start-project-section wowd fadeInUpSmall" id="project-form">
            <div class="container clearfix">
                <div class="container-small project-form-container clearfix">
                    <div class="project-form-wrapper contact-form-wrapper" data-wow-delay="0.4s">
                        <?php
                            $forms_a = get_field('create_block_a_standart_page');
                            if($forms_a){
                                echo do_shortcode('[contact-form-7 id=" ' . $forms_a . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </section>
         
<?php get_footer(); ?>