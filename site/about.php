<?php

# Load data
require_once __DIR__ . "/includes/glob.inc.php";


if ($siteMode != 1) {
    die($design->pageDown());
}


?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

    <?= $design->createHeader($_SERVER['REQUEST_URI']); ?>

<body class="header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap">
            <!-- Top Bar -->        
            
            <?= $design->topBar(); ?>

            <!-- Header -->
            <header id="site-header">
                <div id="site-header-inner" class="container">                    
                    <div class="wrap-inner clearfix">
                    <?= $design->globalLogo(); ?>

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <?= $design->mainNavigation($_SERVER['REQUEST_URI']); ?>

                    </div><!-- /.wrap-inner -->                    
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- #site-header-wrap -->

        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix">
            <div id="featured-title-inner" class="container clearfix">
                <div class="featured-title-inner-wrap">                    
                    <div id="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumb-trail">
                                <a href="index.php" class="trail-begin">Home</a>
                                <span class="sep">|</span>
                                <span class="trail-end">About Us</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            About Us
                        </h1>
                    </div>
                </div><!-- /.featured-title-inner-wrap -->
            </div><!-- /#featured-title-inner -->            
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                            <!-- ICONBOX -->
                            <div class="row-iconbox">
                                <div class="container">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1  clearfix">
                                                <h2 class="heading">About <?= $companyName ?></h2>
                                              
                                                <p class="sub-heading"><?= $data['site']['about'] ?></p>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading">Why <?= $companyName ?></h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading"><?= $data['contact']['why'] ?></p>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-quality"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#"><?= $data['contact']['pageTop'][0]['cName'] ?></a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading"><?= $data['contact']['pageTop'][0]['Content'] ?></p>
                                                    </div>
                                                </div><!-- /.themesflat-icon-box -->
                                            </div><!-- /.themesflat-content-box -->                                         
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-time"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#"><?= $data['contact']['pageTop'][1]['cName'] ?></a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading"><?= $data['contact']['pageTop'][1]['Content'] ?></p>
                                                    </div>
                                                </div><!-- /.themesflat-icon-box -->
                                            </div><!-- /.themesflat-content-box -->
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-author"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#"><?= $data['contact']['pageTop'][2]['cName'] ?></a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading"><?= $data['contact']['pageTop'][2]['Content'] ?></p>
                                                    </div>
                                                </div><!-- /.themesflat-icon-box -->
                                            </div><!-- /.themesflat-content-box -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                                         
                                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END ICONBOX -->

                         <!-- QUOTE -->
                         <div class="row-quote bg-row-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-quote style-1 clearfix">
                                                <div class="quote-item">
                                                    <div class="inner">
                                                        <div class="heading-wrap">
                                                            <h3 class="heading"><?= $data['contact']['tagline'] ?></h3>
                                                        </div>
                                                        <div class="button-wrap ">
                                                            <a href="contact.php" class="themesflat-button bg-white small"><span>Contact Us </span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="33" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END QUOTE -->
                           

                            <!-- TABS -->
                            <div class="row-tabs">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-content-box clearfix" data-margin="0 18px 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-headings style-1 clearfix">
                                                    <h2 class="heading">OVERVIEW</h2>
                                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                          
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                                <div class="themesflat-tabs style-1 clearfix">
                                                    <ul class="tab-title clearfix">
                                                        <li class="item-title active">
                                                            <span class="inner"><?= $data['contact']['pageBottom'][0]['cName'] ?></span>
                                                        </li>
                                                        <li class="item-title">
                                                            <span class="inner"><?= $data['contact']['pageBottom'][1]['cName'] ?></span>
                                                        </li>
                                                        <li class="item-title">
                                                            <span class="inner"><?= $data['contact']['pageBottom'][2]['cName'] ?></span>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content-wrap clearfix">
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                                <p><?= $data['contact']['pageBottom'][0]['Content'] ?></p>
                                                                                                                   
                                                            </div>
                                                        </div><!-- /.tab-content -->
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                            <p><?= $data['contact']['pageBottom'][1]['Content'] ?></p>                                              
                                                            </div>
                                                        </div><!-- /.tab-content -->
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                            <p><?= $data['contact']['pageBottom'][2]['Content'] ?></p>
                                                                                                                 
                                                            </div>
                                                        </div><!-- /.tab-content -->
                                                    </div><!-- /.tab-content-wrap -->
                                                </div><!-- /.themesflat-tabs -->
                                            </div><!-- /.themesflat-content-box -->                                                
                                        </div><!-- /.col-md-6 -->

                                        
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END TABS -->

                            
                            <!-- PARTNER -->
                            <div class="row-partner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                          
                                            <div class="themesflat-spacer clearfix" data-desktop="66" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END PARTNER -->

                           

                            
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

        <!-- Footer -->
        <?= $design->siteFooter(); ?>
        <!-- Bottom -->
        <div id="bottom" class="clearfix has-spacer">
            <div id="bottom-bar-inner" class="container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">© <span class="text"><a href="https://www.templateshub.net" class="text-accent">Templates Hub</a></span> 
                        </div>
                    </div><!-- /.bottom-bar-content -->

                    <?= $design->bottomNavigation($_SERVER['REQUEST_URI']); ?>
                </div><!-- /.bottom-bar-inner-wrap -->                
            </div><!-- /#bottom-bar-inner -->
        </div><!-- /#bottom -->

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/animsition.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/countto.js"></script>
<script src="assets/js/equalize.min.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/owl.carousel2.thumbs.js"></script>

<script src="assets/js/jquery.cookie.js"></script>
<script src="assets/js/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&amp;region=GB"></script>
<script src="assets/js/shortcodes.js"></script>
<script src="assets/js/main.js"></script>

<!-- Revolution Slider -->
<script src="includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
<script src="includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>

