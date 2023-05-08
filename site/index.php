<?php

# Load data
require_once __DIR__ . "/includes/glob.inc.php";


if (!strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
    header("Location: index.php");
}

if ($siteMode != 1) {
    die($design->pageDown());
}
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->



<?php 
// Produce headers
$design->createHeader($_SERVER['REQUEST_URI']);

?>


<body class="header-fixed page no-sidebar header-style-3 topbar-style-3 site-header-absolute menu-has-search">

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
                    <?= $design->homeLogo(); ?>

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <?= $design->topNavigation($_SERVER['REQUEST_URI']); ?>

                       
                    </div><!-- /.wrap-inner -->                    
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- #site-header-wrap -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                           <!-- SLIDER -->
                            <div class="rev_slider_wrapper fullwidthbanner-container">
                                <div id="rev-slider2" class="rev_slider">
                                    <ul>
                                        <!-- Slide 1 -->
                                        <li data-transition="random">
                                            <!-- Main Image -->
                                            <img src="<?= $data['site']['homeBg'] ?>" alt="" data-bgposition="center center" data-no-retina>
                                           
                                            <!-- Layers -->
                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 "
                                                data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                                                data-fontsize="['20','20','20','16']"
                                                data-lineheight="['70','70','40','24']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                                data-mask_in="x:0px;y:[100%];" 
                                                data-mask_out="x:inherit;y:inherit;" 
                                                data-start="700" 
                                                data-splitin="none" 
                                                data-splitout="none" 
                                                data-responsive_offset="on">
                                                <?= $data['contact']['tagline']; ?>
                                            </div>

                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                                data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                                                data-fontsize="['52','52','42','32']"
                                                data-lineheight="['65','65','45','35']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" 
                                                data-mask_out="x:inherit;y:inherit;" 
                                                data-start="1000" 
                                                data-splitin="none" 
                                                data-splitout="none" 
                                                data-responsive_offset="on">
                                                <?= $data['site']['line1']; ?>
                                            </div>

                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                                data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                                                data-fontsize="['52','52','42','32']"
                                                data-lineheight="['65','65','45','35']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                                data-mask_in="x:0px;y:[100%];" 
                                                data-mask_out="x:inherit;y:inherit;" 
                                                data-start="1000" 
                                                data-splitin="none" 
                                                data-splitout="none" 
                                                data-responsive_offset="on">
                                                <?= $data['site']['line2']; ?>
                                            </div>

                                            <div class="tp-caption "
                                                data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['153','153','153','153']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                                data-mask_in="x:0px;y:[100%];" 
                                                data-mask_out="x:inherit;y:inherit;" 
                                                data-start="1000" 
                                                data-splitin="none" 
                                                data-splitout="none" 
                                                data-responsive_offset="on">
                                                <a href="contact.php" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                                            </div>
                                        </li>
                                        <!-- /End Slide 1 -->

                                    
                                    </ul>
                                </div> 
                            </div>
                            <!-- END SLIDER -->

                            <!-- SERVICES -->
                            <div class="row-services">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading">OUR SERVICES</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="<?= $companyName; ?>-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="27" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-carousel-box  offset-v-111 offset-h-21 data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                   
                                                    <?php

                                                    foreach ($data['services'] as $service ) {
                                                      
                                                
                                                      
                                                      ?>
                                                    <div class="themesflat-image-box style-2 clearfix">
                                                        <div class="image-box-item">
                                                            <div class="inner">
                                                            <a href="service.php?pid=<?= $service['pid']; ?>"><div class="thumb data-effect-item">
                                                                    <img style="max-width:400px;max-height:400px;" src="<?= $service['imagePath']; ?>" alt="<?= $service['pageName']; ?>">
                                                                    <div class="overlay-effect bg-color-accent"></div>
                                                                </div></a>
                                                                <div class="text-wrap">
                                                                    <h5 class="heading"><a href="<?= $service['pageHref']; ?>"><?= $service['pageName']; ?></a></h5>
                                                                    <p><?= $service['description'] ?></p>
                                                                    <div class="elm-readmore">
                                                                    <a href="service.php?pid=<?= $service['pid']; ?>">DETAILS</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-image-box -->

                                                        <?php } ?>
                                                                                                       
                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->                                            
                                            <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END SERVICES -->

                            <!-- REQUEST -->
                            <div class="row-request parallax parallax-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="themesflat-spacer clearfix" data-desktop="82" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-request-box style-1 clearfix">
                                                <div class="inner">
                                                    <div class="themesflat-headings style-1 clearfix">
                                                        <h2 class="heading text-white line-height-normal">Get in touch</h2>
                                                        <div class="sep has-width w30 accent-bg margin-top-13 clearfix"></div>                                               
                                                        <p class="sub-heading margin-top-22 font-size-14 line-height-24 text-white font-weight-400"><?= $data['site']['contact'] ?></p>
                                                    </div><!-- /.themesflat-heading -->
                                                    <div class="themesflat-contact-form style-1 clearfix">
                                                        <div class="themesflat-spacer clearfix" data-desktop="8" data-mobile="8" data-smobile="8"></div>
                                                        <span class="wrap-submit float-right">
                                                                <input type="submit" value="<?php if($data['site']['contactable'] == 0) { echo "Not Contable at this Time"; } else { echo "Get in touch"; }?>" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
                                                            </span>  
                                                    </div>
                                                </div><!-- /.inner -->
                                            </div><!-- /.themesflat-request-box -->                                           
                                            <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END REQUEST -->

                            <!-- PROJECT -->
                            <div class="row-project clearfix">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="position-relative">
                                                <div class="themesflat-headings style-1 clearfix">
                                                <h2 class="heading ">Projects</h2>                                          
                                                </div>
                                                <ul class="themesflat-filter style-1 filter-absolute clearfix">

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
                                            </div>                                            
                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                                
                                                
                                                    <?php  foreach($data['projects'] as $project) { ?>
                                            <div class="project-item <?= strtolower($project['projectType']); ?>">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                            <img src="<?= $project['projectCover']; ?>" alt="Image"> 
                                                            <div class="elm-link">
                                                            <a style="margin-left:30px" href="details.php?pid=<?= $project['projectId']; ?>" class="icon-1 icon-search"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                        <div class="text-wrap">                                                                        
                                                            <h5 class="heading"><a href="details.php?pid=<?= $project['projectId']; ?>"><?= $project['projectName']; ?></a></h5>
                                                            <div class="elm-meta">
                                                                <span><a href="details.php?pid=<?= $project['projectId']; ?>"><?= $project['projectType']; ?></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-item -->
                                                        <?php } ?>


                                            </div><!-- /.themesflat-project -->                                           
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- END PROJECT -->

                            

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
<?= $design->scripts(); ?>
</body>


</html>

