<?php

# Load data
require_once __DIR__ . "/includes/glob.inc.php";


if ($siteMode != 1) {
    die($design->pageDown());
}


if(isset($_GET['pid'])) {

foreach($data['projects'] as $details) {
    if($details['projectId'] == $_GET['pid']) {
        if($details['status'] == 1) {
            $title = $details['projectName'];
            $projectCover = $details['projectCover'];
            $projectLocation = $details['projectLocation'];
            $projectType = $details['projectType'];
            $projectBudget = $details['projectBudget'];
            $projectCompleted = $details['projectCompleted'];
            $projectContent = $details['projectDetails'];
            
        } else {
            header("Location: index.php");
        }
    } 
}
} else {
    $title = "Redirecting";
    header("Location: work.php");
}

if ($title == "") {
    header("Location: work.php");
}



?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->


    <?= $design->createHeader($title); ?>

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
                                <a href="work.php" class="trail-begin">Projects</a>
                                <span class="sep">|</span>                               
                                <span class="trail-end"><?= $title; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            Project Details
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
                            <!-- PROJECT DETAIL -->
                            <div class="row-project-detail">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="detail-inner-wrap">
                                                <div class="detail-info">
                                                    <div class="content-info">
                                                        <div class="themesflat-headings style-2 clearfix">
                                                            <h2 class="heading line-height-62"><?= $title ?></h2>
                                                            <div class="sep has-width w80 accent-bg clearfix">
                                                            </div>                                                
                                                        </div>
                                                        <ul class="list-info has-icon icon-left">
                                                            <li><span class="text">Budget <span class="icon"><i class="fa fa-usd"></i></span></span><span class="right"><?= $projectBudget ?></span></li>
                                                            <li><span class="text">Year completed <span class="icon"><i class="fa fa-calendar"></i></span></span><span class="right"><?= $projectCompleted ?></span></li>
                                                            <li><span class="text">Location: <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right"><?= $projectLocation ?></span></li>
                                                            <li><span class="text">Category <span class="icon"><i class="fa fa-tag"></i></span></span><span class="right"><a href="#"><?= $projectType ?></a></a></span></li>
                                                        </ul>
                                                    </div><!-- /.content-info -->

                                               
                                                </div>
                                                <div class="detail-gallery">
                                                    <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                                                    <div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
                                                    <img style="width:50%" src="<?= $projectCover; ?>" alt="Image">
                                                     </div><!-- /.themesflat-cousel-box -->
                                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>     
                                                    <div class="flat-content-wrap style-3 clearfix">
                                                        <h5 class="title">PROJECT DESCRIPTION</h5>
                                                        <div class="sep has-width w60 accent-bg margin-top-18 clearfix"></div>                                          
                                                        <p class="margin-top-28"><?= $projectContent; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="60" data-smobile="60"></div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-lines style-1 line-full line-solid clearfix"><span class="line"></span></div>
                                            <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-headings style-2 clearfix">
                                                <h2 class="heading">RELATED PROJECTS</h2>
                                                <div class="sep has-width w80 accent-bg margin-top-3 clearfix"></div>
                                            </div><!-- /.themesflat-heading -->
                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-project style-1 isotope-project has-margin mg15 w25 data-effect clearfix">
                                               
                                            <?php  foreach($data['projects'] as $project) { 
                                                        
                                                        if ($project['projectId'] != $_GET['pid']) {
                                                    ?>
                                   
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
                                                                    <a style="margin-left:25px" href="details.php?pid=<?= $project['projectId']; ?>" class="icon-1 icon-search"></a>
                                                                </div>
                                                                <div class="overlay-effect bg-color-3"></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-item -->

                                           <?php } } ?>
                                               
                                            </div><!-- /.themesflat-project -->             
                                            <div class="themesflat-spacer clearfix" data-desktop="51" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                        </div>
                                    </div>
                                </div><!-- /.container -->
                            </div>
                            <!-- END PROJECT DETAIL -->
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

