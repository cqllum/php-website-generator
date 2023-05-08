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
                                <span class="trail-end">Projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                           Our work
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
                            <!-- SERVICES -->
                            <div class="row-services">
                                <div class="container-fluid maxwidth-99">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                            <ul class="themesflat-filter style-1 text-center clearfix">
                                                <li class="active"><a href="#" data-filter="*">All</a></li>
                                                <?php 
                                                $category = array();
                                                foreach($data['projects'] as $project) {
                                                    if (!in_array($project['projectType'], $category)) {
                                                        array_push($category, $project['projectType']);
                                                    }
                                                }

                                                foreach ($category as $c) {
                                                    echo '<li><a href="#" data-filter=".' . strtolower($c) . '">' . $c . '</a></li>'; 
                                                }

                                                ?>
                                            </ul> 
                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-project style-1 isotope-project has-margin mg15 w25 data-effect clearfix">
                                               
                                                <?php  foreach($data['projects'] as $project) { ?>
                                       
                                                <div class="project-item <?= strtolower($project['projectType']); ?>">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="<?= $project['projectCover']; ?>" alt="Image">
                                                            <div class="text-wrap text-center">                                          
                                                                <h5 class="heading"><a href="details.php?pid=<?= $project['projectId']; ?>"><?= $project['projectName']; ?></a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="details.php?pid=<?= $project['projectId']; ?>"><?= $project['projectType']; ?></a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a  style="margin-left:25px" href="details.php?pid=<?= $project['projectId']; ?>" class="icon-1 icon-search"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-item -->

                                                        <?php } ?>
                                               
                                            </div><!-- /.themesflat-project -->             
                                            <div class="themesflat-spacer clearfix" data-desktop="51" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END SERVICES -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
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

