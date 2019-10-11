<?php
/*
Theme Name: The au-studio
Theme URI: http://au-studio.new.treng.net
Author: kokky
Author URI: http://au-studio.new.treng.net
Description: Theme for http://au-studio.new.treng.net
Version: 2.5.0
*/

get_header();
?>
	
	<main class="main">
		<section class="top-block">
			<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); ?>
            <img src="<?php echo $image_url[0] ? $image_url[0] : '/wp-content/themes/studio/images/maxresdefault.jpg'; ?>" alt="life-studios-bg" class="w-100 img-fluid">
			
			<div class="container top-block-content">
				 <h1 class="title"><?php the_title(); ?></h1>
				 <p class="text" style="max-width: 100%"><?php echo get_field('additional_title_post_page', get_the_ID()); ?></p>
			</div>
		</section>
		<section class="features">
		<div class="container">
			<div class="row features-top">
				<div class="col-md-5">
					<?php echo get_field('features_text_post_page', get_the_ID()); ?>
				</div>
		   
				<div class="col-md-7">
					<?php echo get_field('about_text_post_page', get_the_ID()); ?>
				</div>
			</div>
			<?php if( have_rows('rooms_first_post_page') || have_rows('rooms_second_post_page') || have_rows('building_rep_post_page')){ ?>
			<h2 class="subtitle">Features</h2>
			<div class="features-wrapper">
				<div class="row">
					<div class="col-md-4">
						<h3 class="features-subtitle">Building</h3>
						<ul class="list-unstyled">
							<?php while ( have_rows('building_rep_post_page') ) { the_row(); ?>
								<li><?php the_sub_field('name_subblock_post_page'); ?></li>
							<?php } ?>	
						</ul>
					</div>
					
					<div class="col-md-1"></div>
					
					<div class="col-md-7">
						<h3 class="features-subtitle">Rooms</h3>
						<div class="row">
							<div class="col-md-6">
								<ul class="list-unstyled">
									<?php while ( have_rows('rooms_first_post_page') ) { the_row(); ?>
										<li><?php the_sub_field('name_subblock_post_page'); ?></li>
									<?php } ?>
								  </ul>
							</div>
							
							<div class="col-md-6">
							  <ul class="list-unstyled">
								<?php while ( have_rows('rooms_second_post_page') ) { the_row(); ?>
									<li><?php the_sub_field('name_subblock_post_page'); ?></li>
								<?php } ?>
							  </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		</section>
		
		<?php if( have_rows('slider_rep_post_page')){ ?>
		<section class="location-slider">
			<div class="container">
				<div class="wrapper-slider">
					<?php while ( have_rows('slider_rep_post_page') ) { the_row(); ?>
					<?php $image = get_sub_field('image_subblock_post_page'); ?>
					<div><img src="<?php echo kama_thumb_src('w=1110&h=650&q=85&src='. $image); ?>" class="img-fluid w-100"></div>
					<?php } ?>
				</div>
			</div>
		</section>
		<?php } ?>
		
		<!--<section class="map-area">
		   <div id="accordion">
			   <div class="card">
				 <div class="card-header" id="headingOne-map">                  
					 <button class="btn btn-link w-100" data-toggle="collapse" data-target="#collapseOne-map" aria-expanded="true" aria-controls="collapseOne-map">
						 The Area
					 </button>
				  
				 </div>
			 
				 <div id="collapseOne-map" class="collapse show" aria-labelledby="headingOne-map" data-parent="#accordion">
				  
					 <img src="images/location-area-map.jpg" alt="map" class="img-fluid w-100">
				   
				 </div>
			   </div>
			   
			   
			 </div>
			 <div class="choice card">
			   <a href="#">Cafe / Restaurants</a>
			   <a href="#">Schools</a>
			   <a href="#">Transport</a>
			   <a href="#">Recreation</a>
			 </div>
		</section>-->
		
		<section class="b-w">
		   <div class="bg-color container-fluid">
			   <div class="row h-100">
				   <div class="col-md-6 bg-color-dark"></div>
				   <div class="col-md-6 bg-color-white"></div>
			   </div>
		   </div>
		   <div class="container text-center">
			   <div class="row">
				   <div class="col-md-6 text-white">
					   <?php echo get_field('free_tour_smalltext_post_page', get_the_ID()); ?>
				   </div>
				   <div class="col-md-6">
					   <?php echo get_field('enquire_today_smalltext_post_page', get_the_ID()); ?>
				   </div>
			   </div>
		   </div>
	   </section>
		
	   <section class="faq">
            <div class="container">
                <h2 class="d-subtitle text-center"><?php echo get_field('title_faq_about_page', '91'); ?></h2>
                <?php
                    $tab_a_faq = get_field_object('faq_articles_a_about_page', '91');
                    $tab_b_faq = get_field_object('faq_articles_b_about_page', '91');
                    $tab_c_faq = get_field_object('faq_articles_c_about_page', '91');
                ?>
                
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo get_field('text_tab_a_about_page', '91'); ?></a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo get_field('text_tab_b_about_page', '91'); ?></a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><?php echo get_field('text_tab_c_about_page', '91'); ?></a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php if($tab_a_faq['value']){ ?>
                        <div class="accordion" id="accordionExample">
                            <?php foreach($tab_a_faq['value'] as $key => $object){ ?>
                            <div class="card">
                                <div class="card-header" id="headingOne-<?php echo $key; ?>">
                                    <span><?php echo $object->post_title; ?></span>    
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-<?php echo $key; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        +
                                    </button>
                                </div>
                          
                                <div id="collapseOne-<?php echo $key; ?>" class="collapse" aria-labelledby="headingOne-<?php echo $key; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $object->post_content; ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <?php if($tab_b_faq['value']){ ?>
                        <div class="accordion" id="accordionExample">
                            <?php foreach($tab_b_faq['value'] as $key => $object){ ?>
                            <div class="card">
                                <div class="card-header" id="headingOne-<?php echo $key; ?>">
                                    <span><?php echo $object->post_title; ?></span>    
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-<?php echo $key; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        +
                                    </button>
                                </div>
                          
                                <div id="collapseOne-<?php echo $key; ?>" class="collapse" aria-labelledby="headingOne-<?php echo $key; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $object->post_content; ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <?php if($tab_c_faq['value']){ ?>
                        <div class="accordion" id="accordionExample">
                            <?php foreach($tab_c_faq['value'] as $key => $object){ ?>
                            <div class="card">
                                <div class="card-header" id="headingOne-<?php echo $key; ?>">
                                    <span><?php echo $object->post_title; ?></span>    
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-<?php echo $key; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        +
                                    </button>
                                </div>
                          
                                <div id="collapseOne-<?php echo $key; ?>" class="collapse" aria-labelledby="headingOne-<?php echo $key; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $object->post_content; ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
           </div> 
		</section>
    </main>

<?php get_footer(); ?>
