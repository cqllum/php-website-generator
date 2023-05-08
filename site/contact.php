<?php

# Load data
require_once __DIR__ . "/includes/glob.inc.php";


if ($siteMode != 1) {
    die("Site down");
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

        <?= $design->contactHeading(); ?>
        <?= $design->contactContent(); ?>
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
<script src="assets/js/shortcodes.js"></script>
<script src="assets/js/jquery-validate.js"></script>
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

