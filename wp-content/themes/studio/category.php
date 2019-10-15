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
        <section class="projects-page" id="projects-page">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <div class="block-title wowd bte draw fadeInDown">
                        <?php				   
                            $term = get_queried_object();
                            $cat_id = $term->term_id;
                        ?>
                        <h1 class="title"><?php echo $term->name; ?></h1>
                        <p><?php echo get_term_meta($cat_id, 'subtitle_block_a_project_rubric_page', true); ?></p>
                    </div>
                    <div class="projects-tag wowd fadeInUpSmall">
                        <h2><?php echo get_term_meta($cat_id, 'title_block_a_project_page', true); ?></h2>
                        <div class="projects-tag-text"><?php echo get_term_meta($cat_id, 'subtitle_block_b_project_rubric_page', true); ?>
                            <ul>
                                <?php             
                                    $sub_cats = get_categories( array(
                                        'child_of' => '',
                                        'hide_empty' => 0,
                                        'exclude'      => '1',
                                    ) );
                                    if( $sub_cats ){
                                        foreach( $sub_cats as $cat ){
                                            if(getCurrentCatID() == $cat->cat_ID){
                                                echo '<li class="wow fadeInRight active" data-wow-delay="0.5s"><a href="'. get_category_link($cat->term_id) . '">' . $cat->cat_name . '</a></li>';
                                            }else{
                                                echo '<li class="wow fadeInRight" data-wow-delay="0.5s"><a href="'. get_category_link($cat->term_id) . '">' . $cat->cat_name . '</a></li>';
                                            }
                                        }
                                    } 
                                ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container-medium clearfix">
                    <div class="projects-list wow animated" data-wow-delay="0.5s">
                        <ul class="">
                             <?php	
                                $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'category' 	     => getCurrentCatID(),
                                    'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
                                    'paged'          => $current_page
                                ); 
                                
                                $projects = get_posts( $args );
                                
                                if($projects){
                                    foreach( $projects as $projects_list ){
                                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($projects_list->ID), 'full');
                                        $short_descr = get_field('short_description_project_post_page', $projects_list->ID);
                            ?>	
                                        <li class="wow fadeInUpSmall" data-wow-delay="0s">
                                            <a href="<?php echo get_permalink($projects_list->ID); ?>"><img src="/wp-content/themes/studio/images/spacer.png" alt="Design and Development" width="100%">
                                                <div class="img" style="background:url('<?php echo $image_url[0] ? $image_url[0] : '/wp-content/themes/studio/images/brand-design.jpg'; ?>') no-repeat;"></div>
                                                <div class="img-clone" style="background:#ee4610 url('<?php echo $image_url[0] ? $image_url[0] : '/wp-content/themes/studio/images/brand-design.jpg'; ?>') no-repeat;"></div>
                                            </a>
                                            <div class="block-title btwe draw">
                                                <div class="title"><?php echo $projects_list->post_title; ?></div>
                                                
                                                <?php echo $projects_list->post_excerpt; ?>
                                            </div>
                                        </li>
                            <?php   } 
                                    wp_reset_postdata(); 
                                }
                            ?>
                        </ul>
                    </div>
                    <?php
                        $defaults = array(
                            'type' => 'array',
                            'prev_next'    => True,
                            'prev_text'    => __('В начало'),
                            'next_text'    => __('В конец'),
                        );
                                            
                        $pagination = paginate_links($defaults);							
                    ?>
                    <?php if($pagination){ ?>
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
        </section>
    </section>

<?php get_footer(); ?>