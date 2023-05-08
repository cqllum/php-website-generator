<?php


require_once __DIR__ . "/glob.inc.php";

class ProjectDesign {


    function createHeader($page) {
        global $conf;
        global $data;
        global $companyName;

        $title = $conf->getTitle($page);
        $description = $conf->getDescription($page);

        if (strpos($page, '.php') !== false) {
            $title = $conf->getTitle($page);
            $description = $conf->getDescription($page);

        } else {
            if($page == "") {
                $title = "Home";
            } else {
                $title = $page;
            }
        }

        
       
        echo '<head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title>' . $companyName .' - ' . $title . '</title>
    
        <!-- HTML Meta Tags -->
        <meta name="author" content="'. $companyName .'" />
        <meta name="description" content="'. $description .'" />
        <meta name="keywords" content="';
        
        foreach ($data['tags'] as $tags) {
            echo $tags . ',';
        }

        echo '" />
    
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="style.php">
    
        <!-- Colors -->
        <link rel="stylesheet" type="text/css" href="assets/css/colors/color1.css" id="colors">
    
        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="' . $data['design']['favicon'] . '">
    </head>';
        
    }

    function topBar() {
        global $data;
        echo '<div id="top-bar">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">
                <div class="top-bar-content">
                    <div class="inner">
                        <span class="address content"><a href="mailto:' .  $data['site']['contactPhone'] . '">'.  $data['site']['contactEmail'] .'</a></span>
                        <span class="phone content"><a href="tel:' .  $data['site']['contactPhone'] . '">' .  $data['site']['contactPhone'] . '</a></span>
                    </div>                            
                </div><!-- /.top-bar-content -->

                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="icons">';


                        if ($data['socials']['facebook'] != "") { echo '<a href="'.$data['socials']['facebook'] .'"><i class="fa fa-facebook"></i></a>'; } 
                        if ($data['socials']['twitter'] != "") { echo '<a href="'.$data['socials']['twitter'] .'"><i class="fa fa-twitter"></i></a>'; } 
                        if ($data['socials']['instagram'] != "") { echo '<a href="'.$data['socials']['instagram'] .'"><i class="fa fa-instagram"></i></a>'; } 
                   
                    echo '
                        </span>
                    </div>
                </div><!-- /.top-bar-socials -->
            </div>                    
        </div>
    </div><!-- /#top-bar -->';
    }

    function mainNavigation() {
        global $page;
        global $data;
        global $conf;

        
        $url = $conf->activePage($_SERVER['REQUEST_URI']);

        echo '<nav id="main-nav" class="main-nav">
        <ul id="menu-primary-menu" class="menu">
           ';

           
            foreach($data['pages'] as $element) { 
                if ($element['status'] == 1) {
            
                    echo ' <li class="menu-item  ';

            if ($url == $element['pageHref']) {
                echo "current-menu-item";
            }
            echo '">
                <a href="' . $element['pageHref'] .'">'. $element['pageName'] .'</a>
            </li>';
             } }


            echo '

            
        </ul>
    </nav><!-- /#main-nav -->';
    }

    function topNavigation() {
        global $page;
        global $data;
        global $conf;

        $url = $conf->activePage($_SERVER['REQUEST_URI']);
        echo '
        <nav id="main-nav" class="main-nav">
            <ul id="menu-primary-menu" class="menu">';
                
             foreach($data['pages'] as $element) { 
                    if ($element['status'] == 1) {
                
                        echo ' <li class="menu-item menu-item-has-children ';


                if ($url == $element['pageHref']) {
                    echo "current-menu-item";
                }
                echo '">
                    <a href="' . $element['pageHref'] .'">'. $element['pageName'] .'</a>
                </li>';
                 } }

               
           echo ' </ul>
        </nav><!-- /#main-nav -->
        <div id="header-search">
       

       
    </div><!-- /#header-search -->
    ';
    }

    function bottomNavigation($url) {
        global $page;
        global $data;
        global $conf;

        $url = $conf->activePage($_SERVER['REQUEST_URI']);


        echo '<div class="bottom-bar-menu">
        <ul class="bottom-nav">';

        foreach($data['pages'] as $element) { 
            if ($element['status'] == 1) {
        
                echo ' <li class="menu-item ';


        if ($url == $element['pageHref']) {
            echo "current-menu-item";
        }
        echo '"> <a href="' . $element['pageHref'] .'">'. $element['pageName'] .'</a></li>';
    }
}
            }


function siteFooter() {
    global $data;
    echo '
    <!-- Footer -->
        <footer id="footer" class="clearfix">
            <div id="footer-widgets" class="container">
                <div class="themesflat-row gutter-30">
                    <div class="col span_1_of_3">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <p>
                                    <img src="assets/img/logo.png" alt="Image" width="170" height="34">
                                </p>

                                <p class="margin-bottom-15">' . $data['site']['line1'] . '</p>

                                <ul>
                                    <li>
                                        <div class="inner">
                                            <span class="fa fa-map-marker"></span>
                                            <span class="text">' . $data['site']['address1'] .', ' .  $data['site']['address2'] .' <span class="sl">' .  $data['site']['town'] .',' . $data['site']['region'] .', ' .  $data['site']['postalCode'] .'</span></span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <span class="fa fa-phone"></span>
                                            <span class="text">CALL US : '. $data['site']['contactPhone'] .'</span>
                                        </div>
                                    </li>

                                    <li class="margin-top-7">
                                        <div class="inner">
                                            <span class=" font-size-14 fa fa-envelope"></span>
                                            <span class="text">'. $data['site']['contactEmail'] .'</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.widget_text -->
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                    </div><!-- /.col -->

                    <div class="col span_1_of_3">
                                           
                    </div><!-- /.col -->

                    <div class="col span_1_of_3">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                        <div class="widget widget_tags">
                            <h2 class="widget-title margin-bottom-30"><span>TAGS</span></h2>
                            <div class="tags-list">
                               ';
                                foreach ($data['tags'] as $tags) {
                                    echo '<a href="#">' . $tags . '</a>';
                                } 
                                echo '
                            </div>
                        </div>
                    </div><!-- /.col -->

                    <div class="col span_1_of_3">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                        <div class="widget widget_instagram">
                            <h2 class="widget-title margin-bottom-30"><span>OUR PROFILES</span></h2>
                            <div class="instagram-wrap data-effect clearfix col3 g10">';


                            if ($data['socials']['facebook'] != "") {
                                echo '
                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="'.$data['socials']['facebook'].'" target="_blank" class="data-effect-item">
                                            <span class="item"><img style="width:80%;border-radius:50px;"  src="assets/img/facebook.png" alt="Image" ></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>                                    
                                    </div>
                                ';
                            } 

                            
                            if ($data['socials']['twitter'] != "") {
                                echo '
                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="'.$data['socials']['twitter'].'" target="_blank" class="data-effect-item">
                                            <span class="item"><img style="width:80%;border-radius:50px;"  src="assets/img/twitter.png" alt="Image" ></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>                                    
                                    </div>
                                ';
                            } 

                            
                            if ($data['socials']['instagram'] != "") {
                                echo '
                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="'.$data['socials']['instagram'].'" target="_blank" class="data-effect-item">
                                            <span class="item"><img style="width:80%;border-radius:50px;"  src="assets/img/instagram.png" alt="Image" ></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>                                    
                                    </div>
                                ';
                            } 

                            
                            if ($data['socials']['checkatrade'] != "") {
                                echo '
                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="'.$data['socials']['checkatrade'].'" target="_blank" class="data-effect-item">
                                            <span class="item"><img style="width:80%;border-radius:50px;" src="assets/img/checkatrade.png" alt="Image" ></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>                                    
                                    </div>
                                ';
                            } 

                            
                            echo '
                            
                            </div>
                        </div><!-- /.widget_instagram -->
                    </div><!-- /.col -->
                </div><!-- /.themesflat-row -->
            </div><!-- /#footer-widgets -->
        </footer><!-- /#footer -->
        ';

}

function scripts() {
    echo '
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
';
}



function contactHeading() {
    echo '
    <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix">
            <div id="featured-title-inner" class="container clearfix">
                <div class="featured-title-inner-wrap">                    
                    <div id="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumb-trail">
                                <a href="index.php" class="trail-begin">Home</a>
                                <span class="sep">|</span>
                                <span class="trail-end">Contact</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            Contact Us
                        </h1>
                    </div>
                </div><!-- /.featured-title-inner-wrap -->
            </div><!-- /#featured-title-inner -->            
        </div>
        <!-- End Featured Title -->
        ';
}

function contactContent() {
    global $data;
    global $conf;
    

    if($data['site']['contactable'] == 0) { 
        $contactEntry = "Not Contable at this Time";
        $contactName = "";
    } else { 
        $contactEntry = "Contact Us";
        $contactName = "submit";
    }


    if (isset($_POST['submit'])) {
       $existingContacts = $conf->getContacts();
       $contactString = array('name'=>$_POST['name'], 'email'=> $_POST['email'], 'phone'=> $_POST['phone'], 'message'=> $_POST['message'], 'timestamp'=>date("Y-m-d h:i:sa"));
       array_push($existingContacts,$contactString);

       $myfile = fopen(__DIR__ ."/contacts.json", "w") or die("Unable to open file!");
       $txt = json_encode($existingContacts);
       fwrite($myfile, $txt);
       fclose($myfile);

       echo "<center><h1 style='margin-top:25px;'>Thanks for getting in touch!</h1></center>";

    }
    




    echo '
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
                                        <div class="themesflat-headings style-1 text-center clearfix">
                                            <h2 class="heading">CONTACT US</h2>
                                            <div class="sep has-icon width-125 clearfix">
                                                <div class="sep-icon">
                                                    <span class="sep-icon-before sep-center sep-solid"></span>
                                                    <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                    <span class="sep-icon-after sep-center sep-solid"></span>
                                                </div>
                                            </div>
                                            <p class="sub-heading font-weight-400 max-width-770 line-height-26 margin-top-14">' . $data['site']['contact'] . '</p>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="35" data-smobile="35"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->

                                <div class="row gutter-16">
                                    <div class="col-md-4">
                                        <div class="themesflat-icon-box icon-top align-center  accent-color style-3 bg-light-snow clearfix">
                                            <div class="icon-wrap">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">' . $data['site']['contactPhone']  .'</a></h5>
                                                <p class="sub-heading">Contact us via telephone</p>
                                                <span class="class more-link"><a href="tel:'.$data['site']['contactPhone'].'">Call us now</a></span>
                                            </div>
                                        </div><!-- /.themesflat-icon-box -->
                                    </div><!-- /.col --> 
                                    <div class="col-md-4">
                                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                        <div class="themesflat-icon-box icon-top align-center accent-color style-3 bg-light-snow clearfix">
                                            <div class="icon-wrap">
                                                <i class="icon-map"></i>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">' . $data['site']['address1'] . '</a></h5>
                                                <p class="sub-heading">' . $data['site']['address2'] . '</p>
                                                <span class="class more-link">' . $data['site']['town'] . ', ' . $data['site']['postalCode'] . '</span>
                                            </div>
                                        </div><!-- /.themesflat-icon-box -->
                                    </div><!-- /.col -->
                                    <div class="col-md-4">
                                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                        <div class="themesflat-icon-box icon-top align-center accent-color style-3 bg-light-snow clearfix">
                                            <div class="icon-wrap">
                                                <i class="icon-envelope"></i>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">' . $data['site']['contactEmail']  .'</a></h5>
                                                <p class="sub-heading">Contact us via Email</p>
                                                <span class="class more-link"><a href="mailto:'.$data['site']['contactEmail'].'">Email us now</a></span>
                                            </div>
                                        </div><!-- /.themesflat-icon-box -->
                                    </div><!-- /.col -->                           
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="35" data-smobile="35"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div>
                        <!-- END ICONBOX -->

                       <!-- CONTACT -->
                        <div class="row-contact">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">                                            
                                        <div class="themesflat-contact-form style-2 w100 clearfix">
                                            <form method="post" class="contact-form wpcf7-form">
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Name*" required>
                                                </span>                                                                                                           
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input type="email" tabindex="3" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Your Email*" required>
                                                </span>
                                                <span class="wpcf7-form-control-wrap your-phone">
                                                    <input type="text" tabindex="2" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Phone">
                                                </span>
                                                <span class="wpcf7-form-control-wrap your-message">
                                                   <textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message*" required ></textarea>
                                                </span>                                                             
                                                <span class="wrap-submit">
                                                    <input type="submit" value="'.$contactEntry.'" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="'.$contactName.'">
                                                </span>                                                            
                                            </form>
                                        </div><!-- /.themesflat-contact-form -->
                                    </div><!-- /.col-md-6 -->
                              
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div>
                        <!-- END CONTACT -->
                   </div><!-- /.page-content -->
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
        </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->
    ';
}

function globalLogo() {
    
    global $data;
    global $companyName;
    echo '<div id="site-logo" class="clearfix">
    <div id="site-log-inner">
        <a href="index.php" rel="home" class="main-logo">
            <!-- <img src="'.$data['design']['darklogo'].'" alt="'. $companyName .'" width="186" height="39" data-retina="'.$data['design']['darklogo'].'" data-width="186" data-height="39"> -->
            <h4 class="mt-4">' . strtoupper($data['site']['companyName']). '</h4>
        </a>
    </div>
</div><!-- /#site-logo -->';
}

function homeLogo() {
    global $data;
    global $companyName;

    echo '<div id="site-logo" class="clearfix">
    <div id="site-log-inner">
        <a href="index.php" rel="home" class="main-logo">
         <!--   <img src="'.$data['design']['lightlogo'].'" alt="'. $companyName .'" width="169" height="39" data-retina="'.$data['design']['lightlogo'].'" data-width="169" data-height="39"> -->
         <h4 class="mt-4" style="color: white">' . strtoupper($data['site']['companyName']). '</h4>
         </a>
    </div>
</div><!-- /#site-logo -->';
}


function pageDown() {

    echo "<html><h1 style='margin-top:5%;font-family:arial;text-align:center;'>This web-page is currently unavailable.</h1><h4 style='font-family:arial;text-align:center;'>Try coming back at another time.</h4></html>";
}

}
