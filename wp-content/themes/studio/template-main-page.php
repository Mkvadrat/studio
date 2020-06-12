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
					<div class="owl-carousel main__carousel">
						<div class="main__item">
							<div class="car__img"><img src="<?php echo get_field('logo_image_logotype_content_main_page', get_the_ID()); ?>"></div>
							<div class="car__text">
								<div class="landing-slogan-wrapper">
									<h2 class="wow fadeInUpSmall"><?php echo get_field('title_text_logotype_content_main_page', get_the_ID()); ?></h2>
									<a href="<?php echo get_category_link('7'); ?>" title="" class="wow fadeInUpSmall red" data-wow-delay="0.5s"><?php echo get_field('link_text_logotype_content_main_page', get_the_ID()); ?></a>
								</div>
							</div>
						</div>
						<div class="main__item">
							<div class="car__img"><img src="<?php echo get_field('logo_image_logotype_content_main_page', get_the_ID()); ?>"></div>
							<div class="car__text">
								<div class="landing-slogan-wrapper">
									<h2 class="wow fadeInUpSmall"><?php echo get_field('title_text_logotype_content_main_page', get_the_ID()); ?></h2>
									<a href="<?php echo get_category_link('7'); ?>" title="" class="wow fadeInUpSmall red" data-wow-delay="0.5s"><?php echo get_field('link_text_logotype_content_main_page', get_the_ID()); ?></a>
								</div>
							</div>
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
        <div class="tagline clearfix container section__bg">
            <div class="tagline-wrapper">
				<div class="bg_">
					<h3 class="wow fadeInUpSmall"><?php echo get_field('title_text_wrapper_content_main_page', get_the_ID()); ?></h3>
					<a href="#">Получить коммерческое предложение</a>
				</div>
				<div class="downl__block">
					<a href="#" download>Скачать предложение для отеля</a>
					<a href="#" download>Скачать предложение для предприятия</a>
					<a href="#" download>Скачать бриф на продвижение</a>
					<a href="#" download>Скачать бриф на создание</a>
				</div>
            </div>
        </div>
        <?php } ?>
		
		        <?php if(get_field('enable_block_e_section_main_page', get_the_ID()) == 'yes'){ ?>
        <div class="agency aniborder" id="agency">
            <div class="container clearfix">
                <div class="container-medium clearfix">
					<div class="new__agency">
						<div class="agency-tag ">
							<img src="http://mk2.mkvadrat.com/wp-content/uploads/2020/02/sovm.png" alt="" class="sovm-img"/>
							<div class="block-title draw wow fadeIn" data-wow-delay="0.4s">
								<?php echo get_field('title_block_b_agency_content_main_page', get_the_ID()); ?>
							</div>
							<?php echo get_field('title_block_a_agency_content_main_page', get_the_ID()); ?>
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
                            <?php echo get_field('title_block_d_agency_content_main_page', get_the_ID()); ?>
                        </div>
                        <?php echo get_field('title_block_e_agency_content_main_page', get_the_ID()); ?>
                    </div>
                    <!--<div class="agency-video mobile-hide wow fadeInUpSmall">
                        <a data-fancybox href="<?php echo get_field('link_text_agency_content_main_page', get_the_ID()); ?>">
                            <img src="<?php echo get_field('image_block_b_agency_content_main', get_the_ID()); ?>" id="video-poster-play">
                            <img src="<?php echo get_field('image_block_c_agency_content_main', get_the_ID()); ?>">
                        </a>
                    </div>-->
                </div>
            </div>
        </div>
        <?php } ?>
		
		
        <div class="home2 clearfix" id="home2">
            <div class="home-wrapper">
                <div class="container">
					<div class="gridCust tag-line">
						<div class="tetext">
						<h3>Как мы работаем</h3>
						<ul><li>Разработка грамотной стратегии развития</li>
							<li>Отслеживание активности конкурентов</li>
							<li>Ведение социальных коммуникаций и SMM сетей</li>
							<li>Работа с отзывами</li>
							<li>Создание посадочных страниц под объявления</li>
							<li>Настройка и ведение контекстных кампаний</li>
							<li>Разработка акций и изображений</li>
						</ul>
						</div>
						<div class="redSquare">
						— точность в достижении основной цели: четко, спокойно и безостановочно приводить вам целевых клиентов.
						</div>
					</div>
                </div>
            </div>
        </div>
        
        
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
        
        <?php if(get_field('enable_block_g_section_main_page', get_the_ID()) == 'yes'){ ?>
        <div class="start-project aniborder" id="start-project">
            <div class="container clearfix">
                <div class="container-small clearfix">
                    <?php echo get_field('title_block_a_project_content_main_page', get_the_ID()); ?>
                    <div class="block-title draw wow fadeIn" data-wow-delay="0.3s">
                        <?php echo get_field('title_block_b_project_content_main_page', get_the_ID()); ?>
                    </div>

                    <div class="start-project-block wow fadeIn">
                        <div class="launch"></div>
                        <?php echo get_field('title_block_c_project_content_main_page', get_the_ID()); ?>
                        <a href="<?php echo get_permalink('144'); ?>" title=""><?php echo get_field('link_text_project_content_main_page', get_the_ID()); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <div id="openVideo" class="ng-hide">
            <a class="close" href="javascript:void(0);" title="Close"></a>
            <div class="content">
                <div class="content" ng-bind-html="viFrame"></div>
            </div>
        </div>
    </section>
            
<?php get_footer(); ?>