<?php
/*
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com
Author: q3dm0
Author URI: http://mkvadrat.com
Description: Theme for http://mkvadrat.com
Version: 2.5.0
*/
?>
	
	<div class="contact" id="contact">
        <div class="container clearfix">
            <div class="container-medium clearfix wow fadeInUpSmall">
				<?php echo get_field('quick_text_footer_main_page', '8'); ?>
            </div>
            <div class="container-small clearfix wow fadeInUpSmall">
                <ul>
                    <li>
						<div class="a">
							<img src="<?php echo get_field('email_image_footer_main_page', '8'); ?>">
							<?php echo get_field('email_text_footer_main_page', '8'); ?>
							<a href="mailto:<?php echo get_field('email_data_footer_main_page', '8'); ?>" class="icon inquire-icon" title="">
							<?php echo get_field('email_data_footer_main_page', '8'); ?>
							</a>
						</div>
					</li>
                    <li>
						<div class="a">
							<img src="<?php echo get_field('phone_image_footer_main_page', '8'); ?>">
							<?php echo get_field('phone_text_footer_main_page', '8'); ?>
							<a href="tel:<?php echo get_field('phone_data_footer_main_page', '8'); ?>" class="icon mobile-icon" title="">							
							<?php echo get_field('phone_data_footer_main_page', '8'); ?></a>
							<a href="tel:+79165075851" class="icon mobile-icon">+7 916 507-58-51</a>
						</div>
					</li>
                    <li>
						<div class="a">
							<img src="<?php echo get_field('skype_image_footer_main_page', '8'); ?>">
							<?php echo get_field('skype_text_footer_main_page', '8'); ?>
							<a href="skype:<?php echo get_field('skype_data_footer_main_page', '8'); ?>" class="icon chat-icon" title="">							
							mkvadrat.com
							</a>
						</div>
					</li>
                </ul>
				
				<?php if( have_rows('social_rep_header_main_page', '8')){ ?>
				<div class="social">
					<?php while ( have_rows('social_rep_header_main_page', '8') ) { the_row(); ?>
					<a href="<?php the_sub_field('link_subblock_main_page'); ?>" target="_blank" title="<?php the_sub_field('class_subblock_main_page'); ?>" class="<?php the_sub_field('class_subblock_main_page'); ?> wow fadeInUp">
						<img src="<?php the_sub_field('image_subblock_main_page'); ?>">
					</a>
					<?php } ?>
				</div>
				<?php } ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
		<div class="container-small clearfix">
		<div class="footer__menu">
			<ul>
				<li><a href="#">О нас</a>
					<ul>
						<li><a href="#">Блог</a></li>
						<li><a href="#">Часто-задаваемые вопросы</a></li>
					</ul>
				</li>
				<li><a href="#">Услуги</a>
					<ul>
						<li><a href="#">Создание</a></li>
						<li><a href="#">Продвижение</a></li>
						<li><a href="#">Перечень работы</a></li>
					</ul>
				</li>
				<li><a href="#">Портфолио</a>
					<ul>
						<li><a href="#">Кейсы</a></li>
						<li><a href="#">Клиенты</a></li>
						<li><a href="#">Отзывы</a></li>
					</ul>
				</li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>
		<div class="bottom-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Trionn Design">
				<img style="width: 58px;" src="<?php echo get_field('logo_image_footer_main_page', '8'); ?>">
            </a>
            <span><?php echo get_field('wrapper_text_footer_main_page', '8'); ?></span></div>
        </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>