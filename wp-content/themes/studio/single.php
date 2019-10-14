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
	
	<section id="ng-container">
        <section class="project-detail" id="project-detail">
            <div class="project-detail-wrapper">
                <div class="project-photo">
                    <img alt="" src="images/photo.jpg">
                    <div class="container">
                        <div class="container-small clearfix">
                            <div class="block-title bte draw wow fadeInDown  btb-active">
                                <div class="title">Work / <br>design</div>
                                <p>Our clients really <br>value our work</p>
                            </div>
                            <div class="project-title wow fadeIn">
                                <h2>Logo &amp; Branding</h2>
                                <h3>design India</h3>
                                <div ng-bind-html="projectLink"><a href="#">Coming Soon</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-details-inner">
                    <div class="project-content">
                        <div class="container">
                            <div class="container-medium clearfix">
                                <h2 class="wow fadeInUp" ng-bind-html="project.p1_title">We create beautiful <br> logo &amp; branding</h2>
                                <div class="project-service wow fadeInUp" data-wow-delay="0.5s">
                                    <h4>Category</h4>
                                    <ul>
                                        <li>Restorent and cafe</li>
                                        <li>Sports and games</li>
                                        <li>Business and professioanl</li>
                                        <li>Cloths and garments</li>
                                        <li>Pets and animal</li>
                                        <li>Clean and sharp</li>
                                        <li>many more...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ajax">
                        <div>
                            <div class="branding-projects">
                                <div class="branding1">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo1.jpg"
                                             alt="Branding and logo design">
                                    </div>
                                </div>
                                <div class="branding2">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo2.jpg"
                                             alt="Branding and logo design">
                                    </div>
                                </div>
                                <div class="branding3">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo3.jpg"
                                             alt="Branding and logo design">
                                    </div>
                                </div>
                                <div class="branding4">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo4.jpg"
                                             alt="Branding and logo design">
                                    </div>
                                </div>
                                <div class="branding5">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo5.jpg"
                                             alt="Branding and logo design">
                                    </div>
                                </div>
                                <div class="branding6">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo6.jpg"
                                             alt="Branding and logo design">
                                    </div>
                                </div>
                                <div class="branding7">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo7.jpg"
                                             alt="Branding and logo design">
                                        <img src="images/waiter.png"
                                             alt="Branding and logo design" class="waiter wow fadeInLeft">
                                        <img src="images/mug.png"
                                             alt="Branding and logo design" class="mug wow fadeInRight">
                                    </div>
                                </div>
                                <div class="branding8">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo8.jpg"
                                             alt="Branding and logo design">
                                    </div>
                                </div>
                                <div class="branding9">
                                    <div class="container clearfix wow fadeInUp">
                                        <img src="images/logo9.jpg"
                                             alt="Branding and logo design">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-nav">
                        <div class="container clearfix">
                            <div class="line btwe"></div>
                            <a class="back-nav" href="design.html">
                                <svg height="24px" width="24px" role="img">
                                    <use xlink:href="images/svg_symbols.svg#nav-all" id="miu"></use>
                                </svg>
                            </a>
                            <a class="next-nav" href="#">Next
                                <span>UI/UX</span></a>
                            <div class="line bottom-line btwe"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sticky-proj-nav">
            <a class="sticky-list-nav" href="design.html">
                <svg height="24px" width="24px" role="img">
                    <use xlink:href="images/svg_symbols.svg#nav-all" title="Work" id="miu"></use>
                </svg>
            </a>
            <a class="sticky-next-nav" href="#">
                <svg height="35px" width="80px" role="img">
                    <use xlink:href="images/svg_symbols.svg#nav-arrow"></use>
                </svg>
            </a>

        </div>

        <div>
            <section class="start-project" id="start-project">
                <div class="container clearfix">
                    <div class="container-small clearfix">
                        <h2 class="wow fadeInUpSmall">Are
                            you looking for real talent for <br>your dream projects?</h2>
                        <div class="block-title draw wow fadeIn">
                            <div class="title">Inquire</div>
                            <p>We will respond to you within 24 hours</p>
                        </div>
                        <div class="start-project-block wow fadeIn" data-wow-delay="0.1s">
                            <div class="launch"></div>
                            <h3>Do you have a <br>project in mind?</h3>
                            <a href="#">Let's start your project</a>
                        </div>
                    </div>
                </div>
            </section>
            <a href="index.html" class="moveup" style="display: none;">
                <svg height="35px" width="80px" role="img">
                    <use xlink:href="images/svg_symbols.svg#nav-arrow"></use>
                </svg>
            </a>
        </div>
    </section>
	
<?php get_footer(); ?>
