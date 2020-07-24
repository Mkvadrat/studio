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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo mk_wp_title('','|', true, 'right'); ?></title>

    <meta name="description" content="Trionn Design is creative technologist specializing in UI/UX, Branding, creative website design and development agencies located in Rajkot, Gujarat, India.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="True">

	<?php wp_head(); ?>
</head>

<body class="running_c">
<div id="trionnloader">
    <div class="tl_wrapper">
        <div class="tlr">
            <object data="<?php echo get_field('preloader_header_main_page', '8'); ?>" class="shake shake-delay txt2" type="image/svg+xml">
				<img src="<?php echo get_field('preloader_header_main_page', '8'); ?>">
            </object>
        </div>
        <div class="tdlimg"></div>
        <span><?php echo get_field('preloader_text_header_main_page', '8'); ?></span>
    </div>
    
</div>
<div id="wrapper" class="wrapanim">
    <header class="header">
        <h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Trionn Design" class="td-logo">
				<span class="band">
					<img
						src="<?php header_image(); ?>"
						height="<?php echo get_custom_header()->height; ?>"
						width="<?php echo get_custom_header()->width; ?>"
						alt="logotype"
					/>
				</span>
			</a>
            <span><?php echo get_field('logo_text_header_main_page', '8'); ?></span>
        </h1>

        <div class="header-right">
            <a href="<?php echo get_permalink('144'); ?>" title="" class="start-project"><?php echo get_field('start_text_header_main_page', '8'); ?></a>
            <div class="df"><a href="tel:+79165075851"><img src="http://mk2.mkvadrat.com/wp-content/themes/studio/images/whatsapp.svg" />+7 916 507-58-51</a>
			<a href="tel:<?php echo get_field('menu_text_header_main_page', '8'); ?>"><?php echo get_field('menu_text_header_main_page', '8'); ?></a></div>
			<a href="#" title="Navigation" class="menu-icon"><em></em><span></span></a>
        </div>

        <section class="main-navigation">
            <div class="container clearfix h-100">
                <div class="container-small clearfix h-100">
                    <nav>
						<?php
							if (has_nav_menu('nav_menu')){
								wp_nav_menu( array(
									'theme_location'  => 'nav_menu',
									'menu'            => '',
									'container'       => false,
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul>%3$s</ul>',
									'depth'           => 2,
									'walker'          => new header_menu(),
								) );
							}
						?>
                    </nav>
                    <article class="map-icon">
                        <?php echo get_field('preemail_text_header_main_page', '8'); ?><br>
                        <a href="mailto:<?php echo get_field('email_text_header_main_page', '8'); ?>"><?php echo get_field('email_text_header_main_page', '8'); ?></a>
                    </article>
                </div>
            </div>
        </section>
    </header>