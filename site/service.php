<?php

# Load data
require_once __DIR__ . "/includes/glob.inc.php";


if ($siteMode != 1) {
    die($design->pageDown());
}


if(isset($_GET['pid'])) {

foreach($data['services'] as $details) {
    if($details['pid'] == $_GET['pid']) {
        if($details['status'] == 1) {
            $page = $details['pageName'];
            $title = $page;
            $cover = $details['imagePath'];
            $description = $details['description'];
            $content = $details['content'];
            
        } else {
            header("Location: index.php");
        }
    } 
}
} else {
    $title = "Redirecting";
    header("Location: services.php");
}

if ($title == "") {
    echo "error";
   header("Location: services.php");
}



?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->


    <?= $design->createHeader($title); ?>

<body class="header-fixed page sidebar-left header-style-2 topbar-style-1 menu-has-search">

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

                        
                        <?= $design->topNavigation($_SERVER['REQUEST_URI']); ?>

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
                                <span class="trail-end">Services</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            All Services
                        </h1>
                    </div>
                </div><!-- /.featured-title-inner-wrap -->
            </div><!-- /#featured-title-inner -->            
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap" class="container">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                        <div class="themesflat-row equalize sm-equalize-auto clearfix">
                            <div class="span_2_of_6 bg-f7f">
                                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                <div class="themesflat-content-box clearfix" data-margin="0 10px 0 43px" data-mobilemargin="0 15px 0 15px">
                                    <div class="themesflat-headings style-2 clearfix">
                                        
                                    <img style="max-width:50%;max-height:10%;float:right;margin-right:4%;" src="<?= $cover; ?>">
                                        <div class="sup-heading"><?= $description; ?></div>
                                        <h2 class="heading font-size-28 line-height-39"><?= $page; ?></h2>
                                        <div class="sep has-width w80 accent-bg margin-top-20 clearfix"></div>                                          
                                        <p class="sub-heading margin-top-33 line-height-24">  Service provided by <?= $data['site']['companyName']; ?></p>
                                    </div>
                                    
                                </div>                               
                                <div class="themesflat-spacer clearfix" data-desktop="56" data-mobile="56" data-smobile="56"></div> 
                            </div>
                       
                        </div><!-- /.themesflat-row -->
                        <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="39" data-smobile="39"></div>     
                        <div class="flat-content-wrap style-2 clearfix">
                            <h5 class="title">SERVICE CONTENTS</h5>
                            <p><?= $content; ?></p>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>     
                        <div class="flat-content-wrap style-2 clearfix">
                            <div class="item">
                                <div class="inner">
                                    <div class="themesflat-spacer clearfix" data-desktop="10" data-mobile="10" data-smobile="10"></div>  
                                   
                                    
                                </div>
                            </div><!-- /.item -->
                         
                             
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div> 
                      
                        
                        <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
                <div id="sidebar">
                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="0" data-smobile="0"></div>
                    <div id="inner-sidebar" class="inner-content-wrap">
                      
                        <div class="widget widget_help align-center has-shadow no-sep has-border border-solid">
                            <div class="inner">
                                <h2 class="widget-title margin-bottom-14"><span>HOW CAN WE HELP ?</span></h2>
                                <p class="text line-height-26 margin-bottom-23">
                                    To learn more about what we do, how you can get a quote, or anything else, feel free to contact us below.
                                </p>
                                <div class="elm-button">
                                    <a href="contact.php" class="themesflat-button bg-accent pd30">GET IN TOUCH</a>
                                </div>
                                <div class="elm-button">
                                    <a href="services.php" class="themesflat-button bg-accent pd30">Other Services</a>
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                </div><!-- /#sidebar -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

        
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

